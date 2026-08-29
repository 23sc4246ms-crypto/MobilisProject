<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;

class AppReleaseService
{
    protected string $metaPath;

    protected string $uploadDir;

    public function __construct()
    {
        $this->metaPath = storage_path('app/app_release.json');
        $this->uploadDir = public_path('uploads/apps');

        if (! File::isDirectory($this->uploadDir)) {
            File::makeDirectory($this->uploadDir, 0755, true, true);
        }
    }

    /**
     * Get the active release information.
     */
    public function getReleaseInfo(): array
    {
        $default = [
            'name' => 'Mobilis: All-In-One Car Rental App',
            'version' => 'v2.5.0',
            'filename' => 'Mobilis-App-v2.5.0.apk',
            'file_path' => 'uploads/apps/Mobilis-App-v2.5.0.apk',
            'size' => '32.8 MB',
            'size_bytes' => 34393292,
            'rating' => '4.9 ★ (18.5k reviews)',
            'downloads' => '200,000+',
            'download_count' => 214580,
            'description' => 'The single official Mobilis App for everyone. Rent by the hour or day, drive as an accredited chauffeur, or host your vehicle fleet all in one app!',
            'release_notes' => 'Official 2026 Production Build with unified Renter, Chauffeur, and Fleet Partner modes.',
            'min_android' => 'Android 8.0 (Oreo) or higher',
            'updated_at' => date('Y-m-d H:i:s'),
            'file_exists' => false,
        ];

        if (File::exists($this->metaPath)) {
            $data = json_decode(File::get($this->metaPath), true);
            if (is_array($data)) {
                $default = array_merge($default, $data);
            }
        }

        // Check if real file exists on disk and calculate accurate file size
        $realPath = $this->getDownloadFilePath($default['filename'] ?? null);
        if ($realPath && File::exists($realPath)) {
            $bytes = File::size($realPath);
            $default['size_bytes'] = $bytes;
            $default['size'] = $this->formatBytes($bytes);
            $default['file_exists'] = true;
            $default['absolute_path'] = $realPath;
        } else {
            $default['file_exists'] = false;
        }

        return $default;
    }

    /**
     * Save an uploaded APK file and update release metadata.
     */
    public function saveRelease(
        UploadedFile $file,
        string $version,
        ?string $releaseNotes = null,
        ?string $minAndroid = null
    ): array {
        $cleanVersion = preg_replace('/[^a-zA-Z0-9\.\-\_]/', '', $version);
        if (empty($cleanVersion)) {
            $cleanVersion = 'v2.5.0';
        }

        // Format clean filename: e.g. Mobilis-App-v2.5.0.apk
        $extension = $file->getClientOriginalExtension() ?: 'apk';
        $filename = 'Mobilis-App-'.ltrim($cleanVersion, 'v').'.'.$extension;

        // Move to public upload dir
        $file->move($this->uploadDir, $filename);

        $realPath = $this->uploadDir.DIRECTORY_SEPARATOR.$filename;
        $sizeBytes = File::exists($realPath) ? File::size($realPath) : $file->getSize();
        $formattedSize = $this->formatBytes($sizeBytes);

        $current = $this->getReleaseInfo();
        $updatedData = array_merge($current, [
            'version' => str_starts_with($cleanVersion, 'v') ? $cleanVersion : 'v'.$cleanVersion,
            'filename' => $filename,
            'file_path' => 'uploads/apps/'.$filename,
            'size' => $formattedSize,
            'size_bytes' => $sizeBytes,
            'release_notes' => $releaseNotes ?: ($current['release_notes'] ?? 'Updated application build.'),
            'min_android' => $minAndroid ?: ($current['min_android'] ?? 'Android 8.0 or higher'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        $this->saveMetadata($updatedData);

        return $updatedData;
    }

    /**
     * Increment the download counter.
     */
    public function incrementDownloadCount(): void
    {
        $info = $this->getReleaseInfo();
        $info['download_count'] = ($info['download_count'] ?? 200000) + 1;
        $info['downloads'] = number_format($info['download_count']).'+';
        $this->saveMetadata($info);
    }

    /**
     * Resolve the absolute path to the active APK on disk.
     */
    public function getDownloadFilePath(?string $customFilename = null): ?string
    {
        if ($customFilename) {
            $path = $this->uploadDir.DIRECTORY_SEPARATOR.$customFilename;
            if (File::exists($path)) {
                return $path;
            }
        }

        // Check active filename from metadata
        if (File::exists($this->metaPath)) {
            $data = json_decode(File::get($this->metaPath), true);
            if (! empty($data['filename'])) {
                $path = $this->uploadDir.DIRECTORY_SEPARATOR.$data['filename'];
                if (File::exists($path)) {
                    return $path;
                }
            }
        }

        // Check if any .apk exists in upload directory
        $files = File::glob($this->uploadDir.'/*.apk');
        if (! empty($files)) {
            return $files[0];
        }

        return null;
    }

    /**
     * Save metadata array to JSON file.
     */
    protected function saveMetadata(array $data): void
    {
        $dir = dirname($this->metaPath);
        if (! File::isDirectory($dir)) {
            File::makeDirectory($dir, 0755, true, true);
        }

        File::put($this->metaPath, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
    }

    /**
     * Format bytes into human readable format.
     */
    public function formatBytes(int $bytes, int $precision = 1): string
    {
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];
        $bytes = max($bytes, 0);
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
        $pow = min($pow, count($units) - 1);
        $bytes /= pow(1024, $pow);

        return round($bytes, $precision).' '.$units[$pow];
    }
}
