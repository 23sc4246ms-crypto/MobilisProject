<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Mobilis | All-In-One Car Rental App - Official Download Hub')</title>
    <meta name="description" content="Download the official Mobilis App for 100% car rental in the Philippines. Hourly and Daily rates for Renters, Drivers, and Vehicle Hosts.">
    <meta name="keywords" content="Mobilis, car rental app, car rental Philippines, hourly car rental, rent car Manila, apply car rental driver, car partner host, APK download car rental">

    <!-- Official Brand Favicon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo.svg') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Theme State Initializer (Prevents Flash) -->
    <script>
        if (localStorage.getItem('mobilis_theme') === 'light') {
            document.documentElement.classList.add('light');
            document.documentElement.classList.remove('dark');
        } else {
            document.documentElement.classList.add('dark');
            document.documentElement.classList.remove('light');
        }
    </script>

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-navy-950 text-slate-100 font-sans antialiased selection:bg-yellow-gold selection:text-navy-950 overflow-x-hidden transition-colors duration-300">

    <!-- Top Announcement Bar -->
    <div class="bg-gradient-to-r from-navy-900 via-navy-850 to-navy-900 border-b border-yellow-gold/20 py-2.5 px-4 sm:px-6 text-xs">
        <div class="max-w-7xl mx-auto flex flex-wrap items-center justify-between gap-3">
            <div class="flex items-center gap-3">
                <span class="inline-flex items-center gap-1.5 px-3 py-0.5 rounded-full bg-yellow-gold/15 text-yellow-gold font-black text-[11px] border border-yellow-gold/30">
                    <span class="w-1.5 h-1.5 rounded-full bg-yellow-gold animate-ping"></span>
                    100% PURE CAR RENTAL PLATFORM
                </span>
                <span class="hidden sm:inline text-slate-500">•</span>
                <span class="hidden md:inline text-slate-300 text-xs">Hourly & Daily Rental Rates • One App for All (APK & App Store)</span>
            </div>
            
            <div class="flex items-center gap-4 text-slate-300">
                <!-- Theme Toggle Button (Light / Dark) -->
                <button type="button" id="theme-toggle-btn" class="flex items-center gap-1.5 px-3 py-1 rounded-xl bg-navy-950 border border-white/15 text-xs font-bold text-yellow-gold hover:bg-yellow-gold hover:text-navy-950 transition-all shadow-md">
                    <span id="theme-toggle-icon">☀️</span>
                    <span id="theme-toggle-text">Light Mode</span>
                </button>

                <span class="hidden sm:flex items-center gap-2 text-yellow-gold font-semibold text-xs">
                    <svg class="w-4 h-4" width="16" height="16" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 4V3z"></path></svg>
                    Hotline: (02) 8888-MOBILIS
                </span>
            </div>
        </div>
    </div>

    <!-- Main Navigation Bar (Clean, Uncrowded & Spacious) -->
    <header class="sticky top-0 z-40 backdrop-blur-2xl bg-navy-950/90 border-b border-white/10 transition-all">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-24">
                
                <!-- Official Brand Logo with Generous Right Margin -->
                <div class="flex items-center">
                    <a href="{{ route('mobilis.home') }}" class="flex items-center gap-3.5 group pr-4 sm:pr-8">
                        <div class="relative w-12 h-12 rounded-2xl bg-yellow-gold shadow-xl shadow-yellow-gold/25 group-hover:glow-yellow transition-all duration-300 flex items-center justify-center p-2 flex-shrink-0" style="width: 48px; height: 48px;">
                            <img src="{{ asset('images/logo.svg') }}" alt="Mobilis Official Logo" width="32" height="32" style="max-width: 100%; max-height: 100%;" class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <div>
                            <div class="flex items-center gap-2">
                                <span class="text-2xl sm:text-3xl font-black tracking-tight text-white font-display">MOBILIS</span>
                                <span class="px-2 py-0.5 rounded text-[10px] font-black uppercase bg-yellow-gold text-navy-950 tracking-wider">
                                    RENTAL
                                </span>
                            </div>
                            <p class="text-[10px] sm:text-[11px] text-slate-400 font-bold tracking-wider uppercase">PURE CAR RENTAL HUB</p>
                        </div>
                    </a>
                </div>

                <!-- Streamlined Desktop Navigation Links (Spacious & Clean) -->
                <nav class="hidden lg:flex items-center gap-10 xl:gap-12">
                    <a href="#fleet" class="text-sm font-semibold text-slate-300 hover:text-yellow-gold transition-colors">Car Fleet</a>
                    <a href="#apps" class="text-sm font-semibold text-slate-300 hover:text-yellow-gold transition-colors">App Modes</a>
                    <a href="#calculator" class="text-sm font-semibold text-slate-300 hover:text-yellow-gold transition-colors">Estimator</a>
                    <a href="#faq" class="text-sm font-semibold text-slate-300 hover:text-yellow-gold transition-colors">FAQ</a>
                </nav>

                <!-- Action Buttons -->
                <div class="hidden sm:flex items-center gap-4">
                    <button type="button" data-open-modal="qr-download-modal" class="px-4 py-2.5 rounded-xl glass-card text-slate-200 hover:text-white hover:border-yellow-gold/50 text-xs font-bold flex items-center gap-2 transition-all">
                        <svg class="w-4 h-4 text-yellow-gold" width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M3 3h8v8H3V3zm2 2v4h4V5H5zm8-2h8v8h-8V3zm2 2v4h4V5h-4zM3 13h8v8H3v-8zm2 2v4h4v-4H5zm13-2h3v3h-3v-3zm0 5h3v3h-3v-3zm-5-5h3v3h-3v-3zm0 5h3v3h-3v-3z"></path>
                        </svg>
                        <span>QR Code</span>
                    </button>
                    <a href="{{ route('mobilis.download') }}" data-direct-download="all" class="px-6 py-3 rounded-xl bg-yellow-gold hover:bg-yellow-amber text-navy-950 font-black text-xs uppercase tracking-wider flex items-center gap-2 shadow-xl glow-yellow-sm hover:glow-yellow transition-all transform hover:-translate-y-0.5">
                        <svg class="w-4 h-4" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                        </svg>
                        <span>DOWNLOAD MOBILIS APP</span>
                    </a>
                </div>

                <!-- Mobile Menu Toggle -->
                <div class="flex lg:hidden items-center gap-2">
                    <button type="button" data-open-modal="qr-download-modal" class="p-2.5 rounded-xl glass-card text-yellow-gold" aria-label="QR Code">
                        <svg class="w-5 h-5" width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M3 3h8v8H3V3zm2 2v4h4V5H5zm8-2h8v8h-8V3zm2 2v4h4V5h-4zM3 13h8v8H3v-8zm2 2v4h4v-4H5zm13-2h3v3h-3v-3zm0 5h3v3h-3v-3zm-5-5h3v3h-3v-3zm0 5h3v3h-3v-3z"></path>
                        </svg>
                    </button>
                    <button id="mobile-nav-toggle" type="button" class="p-3 rounded-xl glass-card text-slate-200 hover:text-white" aria-label="Toggle Menu">
                        <svg class="w-6 h-6" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>

            </div>
        </div>
    </header>

    <!-- Mobile Drawer Navigation -->
    <div id="mobile-menu" class="fixed inset-y-0 right-0 z-50 w-full max-w-xs bg-navy-900 border-l border-white/10 p-6 flex flex-col justify-between transform translate-x-full transition-transform duration-300 shadow-2xl">
        <div>
            <div class="flex items-center justify-between pb-6 border-b border-white/10">
                <div class="flex items-center gap-2.5">
                    <div class="w-9 h-9 rounded-xl bg-yellow-gold p-1.5 flex items-center justify-center" style="width: 36px; height: 36px;">
                        <img src="{{ asset('images/logo.svg') }}" alt="Mobilis Logo" width="24" height="24" style="max-width: 100%; max-height: 100%;" class="w-full h-full object-contain">
                    </div>
                    <span class="font-black text-xl text-white font-display">MOBILIS</span>
                </div>
                <button id="mobile-nav-close" class="p-2 rounded-lg text-slate-400 hover:text-white">
                    <svg class="w-6 h-6" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Theme Toggle -->
            <div class="py-4 border-b border-white/10 flex items-center justify-between">
                <span class="text-xs font-semibold text-slate-300">Appearance:</span>
                <button type="button" id="mobile-theme-toggle-btn" class="flex items-center gap-1.5 px-3 py-1.5 rounded-xl bg-navy-950 border border-white/15 text-xs font-bold text-yellow-gold shadow-md">
                    <span class="mobile-theme-icon">☀️</span>
                    <span class="mobile-theme-text">Light Mode</span>
                </button>
            </div>

            <nav class="mt-6 flex flex-col gap-4">
                <a href="#fleet" class="mobile-nav-link text-base font-semibold text-slate-200 hover:text-yellow-gold py-2 flex items-center gap-3">
                    <span class="text-xl">🚗</span> <span>Car Fleet Showroom</span>
                </a>
                <a href="#apps" class="mobile-nav-link text-base font-semibold text-slate-200 hover:text-yellow-gold py-2 flex items-center gap-3">
                    <span class="text-xl">📱</span> <span>App Modes (3-In-1)</span>
                </a>
                <a href="#calculator" class="mobile-nav-link text-base font-semibold text-slate-200 hover:text-yellow-gold py-2 flex items-center gap-3">
                    <span class="text-xl">📊</span> <span>3-Way Estimator</span>
                </a>
                <a href="#faq" class="mobile-nav-link text-base font-semibold text-slate-200 hover:text-yellow-gold py-2 flex items-center gap-3">
                    <span class="text-xl">❓</span> <span>FAQ</span>
                </a>
            </nav>
        </div>

        <div class="pt-6 border-t border-white/10 space-y-3">
            <button type="button" data-open-modal="qr-download-modal" class="w-full py-3 rounded-xl glass-card text-yellow-gold font-bold text-sm flex items-center justify-center gap-2">
                <span>Scan QR Code</span>
            </button>
            <a href="{{ route('mobilis.download') }}" data-direct-download="all" class="w-full py-3.5 rounded-xl bg-yellow-gold text-navy-950 font-black text-sm uppercase tracking-wider flex items-center justify-center gap-2 shadow-xl glow-yellow-sm">
                <span>DOWNLOAD MOBILIS APP</span>
            </a>
        </div>
    </div>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Modals Component -->
    @include('components.modals')

    <!-- Footer -->
    <footer class="bg-navy-950 border-t border-white/10 pt-20 pb-14 text-slate-400 text-sm relative overflow-hidden">
        <div class="absolute top-0 left-1/4 w-[500px] h-[500px] bg-yellow-gold/5 rounded-full blur-[140px] pointer-events-none"></div>
        <div class="absolute bottom-0 right-1/4 w-[500px] h-[500px] bg-blue-600/5 rounded-full blur-[140px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-12 lg:gap-8 pb-16 border-b border-white/10">
                
                <!-- Brand Info -->
                <div class="lg:col-span-2 space-y-5">
                    <div class="flex items-center gap-3.5">
                        <div class="w-11 h-11 rounded-2xl bg-yellow-gold p-2 flex items-center justify-center shadow-xl" style="width: 44px; height: 44px;">
                            <img src="{{ asset('images/logo.svg') }}" alt="Mobilis Logo" width="28" height="28" style="max-width: 100%; max-height: 100%;" class="w-full h-full object-contain">
                        </div>
                        <div>
                            <span class="text-3xl font-black text-white font-display tracking-tight">MOBILIS</span>
                            <span class="block text-[10px] font-extrabold uppercase tracking-widest text-yellow-gold">PURE CAR RENTAL HUB</span>
                        </div>
                    </div>
                    <p class="text-slate-300 text-sm leading-relaxed max-w-sm">
                        The official 100% dedicated Car Rental mobile app hub in the Philippines. Featuring Hourly and Daily rates for Renters, Drivers, and Vehicle Hosts.
                    </p>
                    <div class="pt-2">
                        <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-500/10 text-emerald-400 text-xs font-semibold border border-emerald-500/30">
                            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                            24/7 Roadside Assistance & Commercial Protection Active
                        </span>
                    </div>
                </div>

                <!-- Column 1: App Modes (Strictly 3) -->
                <div class="space-y-4">
                    <h4 class="text-white font-bold text-sm uppercase tracking-wider text-yellow-gold">App Modes</h4>
                    <ul class="space-y-3 text-xs">
                        <li><a href="#apps" class="hover:text-white transition-colors">Download Mobilis App</a></li>
                        <li><a href="#apps" class="hover:text-white transition-colors">1. Renter Mode (Hourly & Daily)</a></li>
                        <li><a href="#apps" class="hover:text-white transition-colors">2. Driver Mode (Chauffeur)</a></li>
                        <li><a href="#apps" class="hover:text-white transition-colors">3. Partner Host (List Your Car)</a></li>
                        <li><a href="#calculator" class="hover:text-white transition-colors">3-Way Estimator</a></li>
                    </ul>
                </div>

                <!-- Column 2: Vehicle Classes -->
                <div class="space-y-4">
                    <h4 class="text-white font-bold text-sm uppercase tracking-wider text-yellow-gold">Car Classes</h4>
                    <ul class="space-y-3 text-xs">
                        <li><a href="#fleet" class="hover:text-white transition-colors">Sedans (from ₱180/hr)</a></li>
                        <li><a href="#fleet" class="hover:text-white transition-colors">7-Seater SUVs (from ₱380/hr)</a></li>
                        <li><a href="#fleet" class="hover:text-white transition-colors">Passenger Vans (from ₱480/hr)</a></li>
                        <li><a href="#fleet" class="hover:text-white transition-colors">Hatchbacks (from ₱140/hr)</a></li>
                        <li><a href="#fleet" class="hover:text-white transition-colors">Luxury Prestige (from ₱750/hr)</a></li>
                    </ul>
                </div>

                <!-- Column 3: Direct APK Download -->
                <div class="space-y-4">
                    <h4 class="text-white font-bold text-sm uppercase tracking-wider text-yellow-gold">Official APK Package</h4>
                    <ul class="space-y-3 text-xs">
                        <li>
                            <a href="{{ route('mobilis.download') }}" data-direct-download="all" class="flex items-center justify-between p-3.5 rounded-2xl bg-navy-900 hover:bg-navy-850 text-slate-200 border border-yellow-gold/30 transition-all">
                                <div>
                                    <span class="font-bold block text-white">Mobilis All-In-One App</span>
                                    <span class="text-[11px] text-slate-400">v2.5.0 • Android APK</span>
                                </div>
                                <span class="text-yellow-gold font-black">32.8 MB</span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>

            <!-- Bottom Legal & Copyright -->
            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs">
                <p>&copy; {{ date('Y') }} Mobilis Philippines Inc. All Rights Reserved. 100% Dedicated Car Rental App Hub.</p>
                <div class="flex items-center gap-6 text-slate-400">
                    <a href="{{ route('mobilis.privacy') }}" data-open-modal="privacy-modal" class="hover:text-yellow-gold transition-colors">Privacy Policy</a>
                    <a href="{{ route('mobilis.terms') }}" data-open-modal="terms-modal" class="hover:text-yellow-gold transition-colors">Terms of Service</a>
                    <a href="{{ route('mobilis.insurance') }}" data-open-modal="insurance-modal" class="hover:text-yellow-gold transition-colors">Security & Insurance</a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
