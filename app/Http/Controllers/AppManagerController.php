<?php

namespace App\Http\Controllers;

use App\Services\AppReleaseService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AppManagerController extends Controller
{
    /**
     * Display the App Manager Release Dashboard.
     */
    public function index(AppReleaseService $releaseService): View
    {
        $releaseInfo = $releaseService->getReleaseInfo();
        $uploadFolder = public_path('uploads'.DIRECTORY_SEPARATOR.'apps');

        return view('admin.app-manager', compact('releaseInfo', 'uploadFolder'));
    }

    /**
     * Handle the upload of a new APK release package.
     */
    public function upload(Request $request, AppReleaseService $releaseService): RedirectResponse
    {
        $request->validate([
            'apk_file' => [
                'required',
                'file',
                'max:512000', // up to 500MB
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
        $filePath = $releaseService->getDownloadFilePath();
        $info = $releaseService->getReleaseInfo();

        if ($filePath && file_exists($filePath)) {
            return response()->download($filePath, $info['filename'], [
                'Content-Type' => 'application/vnd.android.package-archive',
            ]);
        }

        return redirect()->route('admin.app-manager')
            ->with('error', 'No actual APK file has been uploaded yet in the storage folder.');
    }
}
