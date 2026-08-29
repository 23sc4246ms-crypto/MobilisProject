@extends('layouts.app')

@section('title', 'Mobilis App Release & File Storage Manager')

@section('content')
<div class="min-h-screen py-12 px-4 sm:px-6 lg:px-8 bg-radial-hero bg-grid-pattern">
    <div class="max-w-5xl mx-auto space-y-8">
        
        <!-- Header & Breadcrumb & Logout -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 border-b border-white/10 pb-6">
            <div>
                <a href="{{ route('mobilis.home') }}" class="inline-flex items-center gap-2 text-xs font-bold text-yellow-gold hover:text-yellow-amber transition-colors mb-2">
                    <span>&larr;</span> Back to Mobilis Homepage
                </a>
                <h1 class="text-3xl sm:text-4xl font-black text-white font-display tracking-tight flex items-center gap-3">
                    <span>📱</span> App Release & Storage Manager
                </h1>
                <p class="text-slate-400 text-xs sm:text-sm mt-1">
                    Secure Admin Portal: Manage download URLs, upload APK builds, and update version notes.
                </p>
            </div>

            <div class="flex items-center gap-3">
                <a href="{{ route('admin.app-manager.test-download') }}" class="px-4 py-2.5 rounded-xl glass-card text-yellow-gold hover:text-white border border-yellow-gold/30 hover:border-yellow-gold text-xs font-bold flex items-center gap-2 transition-all">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                    </svg>
                    <span>Test Download</span>
                </a>

                <form action="/admin/logout" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="px-4 py-2.5 rounded-xl bg-rose-500/20 hover:bg-rose-500 text-rose-300 hover:text-white border border-rose-500/30 text-xs font-bold transition-all">
                        Logout
                    </button>
                </form>
            </div>
        </div>

        <!-- Alert Notifications -->
        @if(session('success'))
            <div class="p-4 rounded-2xl bg-emerald-500/15 border border-emerald-500/40 text-emerald-300 text-xs sm:text-sm flex items-start gap-3 shadow-lg">
                <span class="text-emerald-400 font-black text-lg">✓</span>
                <div>
                    <strong class="font-bold block text-emerald-200">Success!</strong>
                    {{ session('success') }}
                </div>
            </div>
        @endif

        @if(session('error'))
            <div class="p-4 rounded-2xl bg-rose-500/15 border border-rose-500/40 text-rose-300 text-xs sm:text-sm flex items-start gap-3 shadow-lg">
                <span class="text-rose-400 font-black text-lg">⚠️</span>
                <div>
                    <strong class="font-bold block text-rose-200">Notice:</strong>
                    {{ session('error') }}
                </div>
            </div>
        @endif

        @if ($errors->any())
            <div class="p-4 rounded-2xl bg-rose-500/15 border border-rose-500/40 text-rose-300 text-xs sm:text-sm space-y-1">
                <strong class="font-bold block text-rose-200">Please check the following errors:</strong>
                <ul class="list-disc list-inside space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Active Release Status Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            <!-- Active File Status Card -->
            <div class="md:col-span-2 glass-card bg-navy-900/90 border border-white/15 rounded-3xl p-6 sm:p-7 shadow-2xl relative overflow-hidden">
                <div class="absolute top-0 right-0 w-48 h-48 bg-yellow-gold/5 rounded-full blur-3xl pointer-events-none"></div>

                <div class="flex items-start justify-between gap-4 mb-4">
                    <div>
                        @if($releaseInfo['has_cloud_url'])
                            <span class="px-3 py-1 rounded-full text-[11px] font-black uppercase tracking-wider bg-blue-500/20 text-blue-400 border border-blue-500/30">
                                ☁️ CLOUD DOWNLOAD LINK ACTIVE (VERCEL-COMPATIBLE)
                            </span>
                        @elseif($releaseInfo['file_exists'])
                            <span class="px-3 py-1 rounded-full text-[11px] font-black uppercase tracking-wider bg-emerald-500/20 text-emerald-400 border border-emerald-500/30">
                                ● LOCAL APK ACTIVE ON DISK
                            </span>
                        @else
                            <span class="px-3 py-1 rounded-full text-[11px] font-black uppercase tracking-wider bg-yellow-500/20 text-yellow-400 border border-yellow-500/30">
                                ○ METADATA READY (SET CLOUD LINK OR UPLOAD BELOW)
                            </span>
                        @endif
                        <h2 class="text-2xl font-black text-white font-display mt-2">
                            {{ $releaseInfo['name'] }}
                        </h2>
                    </div>
                    <span class="px-3.5 py-1.5 rounded-xl bg-yellow-gold text-navy-950 font-black text-sm shadow-md">
                        {{ $releaseInfo['version'] }}
                    </span>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 py-4 border-y border-white/10 my-4 text-xs">
                    <div>
                        <span class="text-slate-400 block text-[11px]">Download Source:</span>
                        <span class="text-white font-bold block mt-0.5 truncate" title="{{ $releaseInfo['download_url'] ?: $releaseInfo['filename'] }}">
                            {{ $releaseInfo['download_url'] ? 'External Cloud URL' : $releaseInfo['filename'] }}
                        </span>
                    </div>
                    <div>
                        <span class="text-slate-400 block text-[11px]">File Size:</span>
                        <span class="text-yellow-gold font-bold block mt-0.5">{{ $releaseInfo['size'] }}</span>
                    </div>
                    <div>
                        <span class="text-slate-400 block text-[11px]">Total Downloads:</span>
                        <span class="text-white font-bold block mt-0.5">{{ $releaseInfo['downloads'] }}</span>
                    </div>
                    <div>
                        <span class="text-slate-400 block text-[11px]">Target OS:</span>
                        <span class="text-white font-semibold block mt-0.5">{{ $releaseInfo['min_android'] }}</span>
                    </div>
                </div>

                <div class="text-xs text-slate-300 space-y-1.5">
                    <span class="text-slate-400 font-semibold block">Release Notes:</span>
                    <p class="bg-navy-950/80 p-3 rounded-xl border border-white/5 font-sans leading-relaxed text-slate-200">
                        {{ $releaseInfo['release_notes'] }}
                    </p>
                </div>
            </div>

            <!-- Mobile Scan Preview Card -->
            <div class="glass-card bg-navy-900/90 border border-white/15 rounded-3xl p-6 shadow-2xl flex flex-col items-center justify-center text-center">
                <span class="text-[11px] font-black text-yellow-gold uppercase tracking-wider mb-2">
                    Mobile Direct Link
                </span>
                
                <div class="w-36 h-36 p-2 rounded-2xl bg-white shadow-xl border-2 border-yellow-gold/50 flex items-center justify-center mb-3">
                    <svg class="w-full h-full text-slate-900" viewBox="0 0 100 100" fill="currentColor">
                        <rect x="5" y="5" width="25" height="25" rx="3" fill="#030712"/>
                        <rect x="9" y="9" width="17" height="17" rx="2" fill="#ffffff"/>
                        <rect x="13" y="13" width="9" height="9" fill="#030712"/>
                        <rect x="70" y="5" width="25" height="25" rx="3" fill="#030712"/>
                        <rect x="74" y="9" width="17" height="17" rx="2" fill="#ffffff"/>
                        <rect x="78" y="13" width="9" height="9" fill="#030712"/>
                        <rect x="5" y="70" width="25" height="25" rx="3" fill="#030712"/>
                        <rect x="9" y="74" width="17" height="17" rx="2" fill="#ffffff"/>
                        <rect x="13" y="78" width="9" height="9" fill="#030712"/>
                        <rect x="35" y="10" width="6" height="6" fill="#030712"/>
                        <rect x="45" y="15" width="8" height="6" fill="#030712"/>
                        <rect x="58" y="8" width="6" height="8" fill="#030712"/>
                        <rect x="35" y="24" width="10" height="6" fill="#030712"/>
                        <rect x="50" y="26" width="12" height="6" fill="#030712"/>
                        <rect x="72" y="35" width="10" height="8" fill="#030712"/>
                        <rect x="85" y="42" width="8" height="8" fill="#030712"/>
                        <rect x="74" y="50" width="18" height="6" fill="#030712"/>
                        <rect x="35" y="70" width="8" height="6" fill="#030712"/>
                        <rect x="48" y="72" width="10" height="8" fill="#030712"/>
                        <rect x="62" y="70" width="6" height="10" fill="#030712"/>
                        <rect x="74" y="75" width="16" height="6" fill="#030712"/>
                        <rect x="40" y="84" width="22" height="6" fill="#030712"/>
                        <rect x="68" y="86" width="14" height="6" fill="#030712"/>
                    </svg>
                </div>

                <p class="text-[11px] text-slate-300 mb-2">Scan with phone to test mobile download handler.</p>
                <code class="text-[10px] text-yellow-gold bg-navy-950 px-2.5 py-1 rounded-lg border border-white/10 font-mono">
                    {{ url('/download') }}
                </code>
            </div>
        </div>

        <!-- ======================================================== -->
        <!-- SECTION 1: CLOUD DIRECT DOWNLOAD LINK SETTINGS (VERCEL COMPATIBLE) -->
        <!-- ======================================================== -->
        <div class="glass-card bg-navy-900/90 border border-yellow-gold/30 rounded-3xl p-7 sm:p-9 shadow-2xl">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-10 h-10 rounded-xl bg-yellow-gold text-navy-950 flex items-center justify-center font-bold text-lg">
                    ☁️
                </div>
                <div>
                    <div class="flex items-center gap-2">
                        <h3 class="text-xl font-black text-white font-display">Cloud Download Link & Version Settings</h3>
                        <span class="px-2.5 py-0.5 rounded-full bg-yellow-gold/20 text-yellow-gold font-bold text-[10px] uppercase">Recommended for Vercel</span>
                    </div>
                    <p class="text-xs text-slate-400">Set your direct APK link from GitHub Releases, Google Drive, MediaFire, Dropbox, or CDN.</p>
                </div>
            </div>

            <form action="/admin/app-manager/settings" method="POST" class="space-y-5">
                @csrf

                <!-- Download URL Input -->
                <div>
                    <label for="download_url" class="block text-xs font-black uppercase tracking-wider text-yellow-gold mb-2">
                        Direct Cloud APK URL (e.g. GitHub Releases / Google Drive / CDN)
                    </label>
                    <input type="url" name="download_url" id="download_url" value="{{ old('download_url', $releaseInfo['download_url'] ?? '') }}" placeholder="https://github.com/your-username/your-repo/releases/download/v2.5.0/Mobilis-App.apk" class="w-full px-4 py-3.5 rounded-2xl bg-navy-950 border border-white/15 text-white text-xs sm:text-sm font-mono focus:outline-none focus:border-yellow-gold">
                    <span class="text-[11px] text-slate-400 block mt-1.5">
                        💡 <strong>Tip for Vercel:</strong> Dahil may 4.5MB limit ang Vercel upload, pwede ninyong i-upload ang inyong `.apk` sa <strong>GitHub Releases</strong> o <strong>Google Drive</strong> at i-paste dito ang download link. Automatic itong ida-download ng mga users kapag nag-scan sila!
                    </span>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                    <div>
                        <label for="settings_version" class="block text-xs font-black uppercase tracking-wider text-slate-300 mb-2">
                            Version Number <span class="text-rose-400">*</span>
                        </label>
                        <input type="text" name="version" id="settings_version" value="{{ old('version', $releaseInfo['version']) }}" required placeholder="e.g. v2.5.0" class="w-full px-4 py-3.5 rounded-2xl bg-navy-950 border border-white/15 text-white text-sm font-bold focus:outline-none focus:border-yellow-gold">
                    </div>

                    <div>
                        <label for="settings_size" class="block text-xs font-black uppercase tracking-wider text-slate-300 mb-2">
                            Display File Size
                        </label>
                        <input type="text" name="size" id="settings_size" value="{{ old('size', $releaseInfo['size']) }}" placeholder="e.g. 32.8 MB" class="w-full px-4 py-3.5 rounded-2xl bg-navy-950 border border-white/15 text-white text-sm font-bold focus:outline-none focus:border-yellow-gold">
                    </div>

                    <div>
                        <label for="settings_min_android" class="block text-xs font-black uppercase tracking-wider text-slate-300 mb-2">
                            Min Android Requirement
                        </label>
                        <input type="text" name="min_android" id="settings_min_android" value="{{ old('min_android', $releaseInfo['min_android']) }}" placeholder="e.g. Android 8.0 or higher" class="w-full px-4 py-3.5 rounded-2xl bg-navy-950 border border-white/15 text-white text-sm font-bold focus:outline-none focus:border-yellow-gold">
                    </div>
                </div>

                <div>
                    <label for="settings_release_notes" class="block text-xs font-black uppercase tracking-wider text-slate-300 mb-2">
                        Release Notes
                    </label>
                    <textarea name="release_notes" id="settings_release_notes" rows="2" placeholder="Describe the updates in this release..." class="w-full px-4 py-3 rounded-2xl bg-navy-950 border border-white/15 text-white text-xs sm:text-sm font-sans focus:outline-none focus:border-yellow-gold">{{ old('release_notes', $releaseInfo['release_notes']) }}</textarea>
                </div>

                <div class="pt-2">
                    <button type="submit" class="w-full py-4 rounded-2xl bg-yellow-gold hover:bg-yellow-amber text-navy-950 font-black text-sm uppercase tracking-wider shadow-2xl glow-yellow transition-all flex items-center justify-center gap-2">
                        <span>Save & Publish Cloud Release Settings</span>
                    </button>
                </div>
            </form>
        </div>

        <!-- ======================================================== -->
        <!-- SECTION 2: DIRECT APK FILE UPLOADER (LOCAL / VPS SERVERS) -->
        <!-- ======================================================== -->
        <div class="glass-card bg-navy-900/90 border border-white/15 rounded-3xl p-7 sm:p-9 shadow-2xl">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-10 h-10 rounded-xl bg-yellow-gold/20 text-yellow-gold flex items-center justify-center font-bold text-lg border border-yellow-gold/30">
                    📦
                </div>
                <div>
                    <h3 class="text-xl font-black text-white font-display">Direct APK File Upload (Local & VPS Server)</h3>
                    <p class="text-xs text-slate-400">Upload your compiled Android .apk package directly if hosting on Local Laragon or dedicated VPS.</p>
                </div>
            </div>

            <form action="/admin/app-manager/upload" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <!-- File Input Drag-and-Drop Area -->
                <div>
                    <label class="block text-xs font-black uppercase tracking-wider text-yellow-gold mb-2">
                        Select APK File (*.apk) <span class="text-rose-400">*</span>
                    </label>
                    <div class="relative border-2 border-dashed border-white/20 hover:border-yellow-gold/60 rounded-3xl p-8 text-center bg-navy-950/60 hover:bg-navy-950/80 transition-all cursor-pointer group" onclick="document.getElementById('apk_file_input').click()">
                        <input type="file" name="apk_file" id="apk_file_input" accept=".apk,.zip,.xapk" required class="hidden" onchange="updateFileLabel(this)">
                        
                        <div class="space-y-3">
                            <div class="w-16 h-16 rounded-2xl bg-navy-900 text-yellow-gold mx-auto flex items-center justify-center text-3xl border border-white/10 group-hover:scale-110 transition-transform">
                                📱
                            </div>
                            <div>
                                <span id="file-label-text" class="text-sm font-bold text-white block group-hover:text-yellow-gold transition-colors">
                                    Click to choose APK file or drag and drop here
                                </span>
                                <span id="file-size-text" class="text-xs text-slate-400 block mt-1">
                                    Supported: .apk (Android Application Package) up to 500MB on local server
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div>
                        <label for="upload_version" class="block text-xs font-black uppercase tracking-wider text-slate-300 mb-2">
                            App Version Number <span class="text-rose-400">*</span>
                        </label>
                        <input type="text" name="version" id="upload_version" value="{{ old('version', $releaseInfo['version']) }}" required placeholder="e.g. v2.5.0" class="w-full px-4 py-3.5 rounded-2xl bg-navy-950 border border-white/15 text-white text-sm font-bold focus:outline-none focus:border-yellow-gold">
                    </div>

                    <div>
                        <label for="upload_min_android" class="block text-xs font-black uppercase tracking-wider text-slate-300 mb-2">
                            Minimum Android Requirement
                        </label>
                        <input type="text" name="min_android" id="upload_min_android" value="{{ old('min_android', $releaseInfo['min_android']) }}" placeholder="e.g. Android 8.0 (Oreo) or higher" class="w-full px-4 py-3.5 rounded-2xl bg-navy-950 border border-white/15 text-white text-sm font-bold focus:outline-none focus:border-yellow-gold">
                    </div>
                </div>

                <div>
                    <label for="upload_release_notes" class="block text-xs font-black uppercase tracking-wider text-slate-300 mb-2">
                        Release Notes / Changelog
                    </label>
                    <textarea name="release_notes" id="upload_release_notes" rows="2" placeholder="Describe the changes in this APK build..." class="w-full px-4 py-3 rounded-2xl bg-navy-950 border border-white/15 text-white text-xs sm:text-sm font-sans focus:outline-none focus:border-yellow-gold">{{ old('release_notes', $releaseInfo['release_notes']) }}</textarea>
                </div>

                <div class="pt-2">
                    <button type="submit" class="w-full py-4 rounded-2xl bg-navy-800 hover:bg-navy-750 text-yellow-gold hover:text-white border border-yellow-gold/40 font-black text-sm uppercase tracking-wider shadow-xl transition-all flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path>
                        </svg>
                        <span>Upload & Save Physical APK File</span>
                    </button>
                </div>
            </form>
        </div>

        <!-- ======================================================== -->
        <!-- SECTION 3: CHANGE ADMIN PASSWORD -->
        <!-- ======================================================== -->
        <div class="glass-card bg-navy-900/90 border border-white/15 rounded-3xl p-7 sm:p-9 shadow-2xl">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-10 h-10 rounded-xl bg-yellow-gold/20 text-yellow-gold flex items-center justify-center font-bold text-lg border border-yellow-gold/30">
                    🔒
                </div>
                <div>
                    <h3 class="text-xl font-black text-white font-display">Change Admin Security Password</h3>
                    <p class="text-xs text-slate-400">Update your secret passcode to keep the admin manager secure.</p>
                </div>
            </div>

            <form action="/admin/app-manager/change-password" method="POST" class="space-y-4">
                @csrf

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                    <div>
                        <label for="current_password" class="block text-xs font-black uppercase tracking-wider text-slate-300 mb-2">
                            Current Password <span class="text-rose-400">*</span>
                        </label>
                        <input type="password" name="current_password" id="current_password" required placeholder="Enter current passcode..." class="w-full px-4 py-3 rounded-2xl bg-navy-950 border border-white/15 text-white text-xs sm:text-sm font-bold focus:outline-none focus:border-yellow-gold">
                    </div>

                    <div>
                        <label for="new_password" class="block text-xs font-black uppercase tracking-wider text-slate-300 mb-2">
                            New Password <span class="text-rose-400">*</span>
                        </label>
                        <input type="password" name="new_password" id="new_password" required minlength="6" placeholder="Min. 6 characters..." class="w-full px-4 py-3 rounded-2xl bg-navy-950 border border-white/15 text-white text-xs sm:text-sm font-bold focus:outline-none focus:border-yellow-gold">
                    </div>

                    <div>
                        <label for="new_password_confirmation" class="block text-xs font-black uppercase tracking-wider text-slate-300 mb-2">
                            Confirm New Password <span class="text-rose-400">*</span>
                        </label>
                        <input type="password" name="new_password_confirmation" id="new_password_confirmation" required minlength="6" placeholder="Repeat new passcode..." class="w-full px-4 py-3 rounded-2xl bg-navy-950 border border-white/15 text-white text-xs sm:text-sm font-bold focus:outline-none focus:border-yellow-gold">
                    </div>
                </div>

                <div class="pt-2">
                    <button type="submit" class="px-6 py-3 rounded-xl bg-slate-800 hover:bg-slate-700 text-white font-bold text-xs uppercase tracking-wider border border-white/10 transition-all">
                        Update Security Password
                    </button>
                </div>
            </form>
        </div>

    </div>
</div>

<script>
    function updateFileLabel(input) {
        if (input.files && input.files[0]) {
            const file = input.files[0];
            const sizeMB = (file.size / (1024 * 1024)).toFixed(2);
            document.getElementById('file-label-text').textContent = 'Selected: ' + file.name;
            document.getElementById('file-size-text').textContent = 'File Size: ' + sizeMB + ' MB • Ready to upload';
        }
    }
</script>
@endsection
