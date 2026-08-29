<?php

namespace App\Http\Controllers;

use App\Services\AppReleaseService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AppManagerController extends Controller
{
    /**
     * Show the Admin Login Screen.
     */
    public function showLogin(Request $request, AppReleaseService $releaseService): View|RedirectResponse
    {
        $token = $request->query('passcode') ?? $request->query('token') ?? $request->query('auth');
        if ($token && $releaseService->verifyAdminPassword($token)) {
            session(['mobilis_admin_auth' => true]);

            return redirect()->route('admin.app-manager');
        }

        if (session('mobilis_admin_auth') === true) {
            return redirect()->route('admin.app-manager');
        }

        return view('admin.login');
    }

    /**
     * Authenticate Admin Passcode.
     */
    public function login(Request $request, AppReleaseService $releaseService): RedirectResponse
    {
        $request->validate([
            'password' => ['required', 'string'],
        ], [
            'password.required' => 'Please enter the admin security passcode.',
        ]);

        $password = $request->input('password');

        if ($releaseService->verifyAdminPassword($password)) {
            session(['mobilis_admin_auth' => true]);

            return redirect()->route('admin.app-manager')
                ->with('success', 'Admin session authenticated successfully. Welcome to Mobilis App Manager!');
        }

        return back()->withInput()->with('error', 'Incorrect Admin Passcode. Access denied.');
    }

    /**
     * Logout Admin.
     */
    public function logout(): RedirectResponse
    {
        session()->forget('mobilis_admin_auth');

        return redirect()->route('admin.login')
            ->with('success', 'Logged out of admin manager successfully.');
    }

    /**
     * Display the App Manager Release Dashboard (Protected).
     */
    public function index(Request $request, AppReleaseService $releaseService): View|RedirectResponse
    {
        $token = $request->query('passcode') ?? $request->query('token') ?? $request->query('auth');
        if ($token && $releaseService->verifyAdminPassword($token)) {
            session(['mobilis_admin_auth' => true]);
        }

        if (session('mobilis_admin_auth') !== true) {
            return redirect()->route('admin.login');
        }

        $releaseInfo = $releaseService->getReleaseInfo();
        $uploadFolder = public_path('uploads'.DIRECTORY_SEPARATOR.'apps');

        return view('admin.app-manager', compact('releaseInfo', 'uploadFolder'));
    }

    /**
     * Update release settings (Version, Direct Cloud URL, Release Notes).
     */
    public function updateSettings(Request $request, AppReleaseService $releaseService): RedirectResponse
    {
        if (session('mobilis_admin_auth') !== true) {
            return redirect()->route('admin.login');
        }

        $request->validate([
            'version' => ['required', 'string', 'max:20'],
            'download_url' => ['nullable', 'url', 'max:500'],
            'size' => ['nullable', 'string', 'max:30'],
            'min_android' => ['nullable', 'string', 'max:50'],
            'release_notes' => ['nullable', 'string', 'max:1000'],
        ]);

        $releaseService->updateSettings($request->only([
            'version',
            'download_url',
            'size',
            'min_android',
            'release_notes',
        ]));

        return redirect()->route('admin.app-manager')
            ->with('success', 'App Release settings and download link updated successfully!');
    }

    /**
     * Change the Admin Security Password.
     */
    public function changePassword(Request $request, AppReleaseService $releaseService): RedirectResponse
    {
        if (session('mobilis_admin_auth') !== true) {
            return redirect()->route('admin.login');
        }

        $request->validate([
            'current_password' => ['required', 'string'],
            'new_password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        if (! $releaseService->verifyAdminPassword($request->input('current_password'))) {
            return back()->with('error', 'Current password is incorrect.');
        }

        $releaseService->setAdminPassword($request->input('new_password'));

        return redirect()->route('admin.app-manager')
            ->with('success', 'Admin security password changed successfully!');
    }

    /**
     * Handle the upload of a new APK release package.
     */
    public function upload(Request $request, AppReleaseService $releaseService): RedirectResponse
    {
        if (session('mobilis_admin_auth') !== true) {
            return redirect()->route('admin.login');
        }

        $request->validate([
            'apk_file' => [
                'required',
                'file',
                'max:512000', // up to 500MB on local/VPS
            ],
            'version' => ['required', 'string', 'max:20'],
            'release_notes' => ['nullable', 'string', 'max:1000'],
            'min_android' => ['nullable', 'string', 'max:50'],
        ], [
            'apk_file.required' => 'Please select an APK or mobile app file to upload.',
            'apk_file.max' => 'The file size cannot exceed 500MB.',
            'version.required' => 'Please provide the application version number (e.g. v2.5.0).',
        ]);

        $uploadedFile = $request->file('apk_file');
        $version = $request->input('version');
        $releaseNotes = $request->input('release_notes');
        $minAndroid = $request->input('min_android');

        $releaseService->saveRelease($uploadedFile, $version, $releaseNotes, $minAndroid);

        return redirect()->route('admin.app-manager')
            ->with('success', 'Mobile App Package ('.$version.') has been successfully uploaded and published!');
    }

    /**
     * Direct test download for administrative verification.
     */
    public function testDownload(AppReleaseService $releaseService)
    {
        $info = $releaseService->getReleaseInfo();

        if (! empty($info['download_url'])) {
            return redirect()->away($info['download_url']);
        }

        $filePath = $releaseService->getDownloadFilePath();

        if ($filePath && file_exists($filePath)) {
            return response()->download($filePath, $info['filename'], [
                'Content-Type' => 'application/vnd.android.package-archive',
            ]);
        }

        return redirect()->route('admin.app-manager')
            ->with('error', 'No direct download URL or APK file has been configured yet.');
    }
}
