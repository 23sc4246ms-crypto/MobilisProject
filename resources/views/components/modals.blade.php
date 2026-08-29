<!-- ======================================================== -->
<!-- 1. DESKTOP RESTRICTION / PHONE-EXCLUSIVE QR DOWNLOAD MODAL -->
<!-- ======================================================== -->
<div id="desktop-mobile-exclusive-modal" class="mobilis-modal hidden fixed inset-0 z-50 overflow-y-auto bg-black/90 backdrop-blur-xl flex items-center justify-center p-4">
    <div class="relative w-full max-w-xl glass-card bg-navy-900 border border-yellow-gold/40 rounded-3xl p-7 sm:p-10 shadow-2xl animate-fadeIn text-center glow-yellow-sm">
        
        <!-- Close Button -->
        <button type="button" data-close-modal class="absolute top-6 right-6 p-2.5 rounded-2xl text-slate-400 hover:text-white bg-slate-800/80 hover:bg-slate-800 transition-colors" aria-label="Close modal">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Phone Exclusive Badge -->
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-yellow-gold/15 text-yellow-gold text-xs font-black border border-yellow-gold/30 uppercase tracking-widest mb-4">
            <span class="w-2 h-2 rounded-full bg-yellow-gold animate-ping"></span>
            <span>📱 EXCLUSIVE FOR PHONE APPS</span>
        </div>

        <h3 class="text-2xl sm:text-3xl font-black text-white font-display">
            Scan to Download on Your Phone
        </h3>
        
        <p class="text-slate-300 text-xs sm:text-sm mt-2 max-w-md mx-auto leading-relaxed">
            The Mobilis App is built exclusively for <span class="text-yellow-gold font-bold">Android & iOS smartphones</span>. Desktop installation is not supported.
        </p>

        <!-- Desktop Indicator Pill -->
        <div class="my-4 inline-flex items-center gap-2 px-3.5 py-1 rounded-xl bg-navy-950/80 border border-white/10 text-[11px] text-slate-400">
            <span class="text-slate-300">🖥️ Desktop / Laptop Detected</span>
            <span>•</span>
            <span class="text-yellow-gold font-semibold">Please scan with mobile device</span>
        </div>

        <!-- High Resolution QR Code with Logo Badge in Center -->
        <div class="my-6">
            <div class="relative w-56 h-56 mx-auto p-4 rounded-3xl bg-white shadow-2xl flex items-center justify-center border-4 border-yellow-gold glow-yellow">
                <!-- QR Code Pattern -->
                <svg class="w-full h-full text-slate-900" viewBox="0 0 100 100" fill="currentColor">
                    <!-- Corners -->
                    <rect x="5" y="5" width="25" height="25" rx="3" fill="#030712"/>
                    <rect x="9" y="9" width="17" height="17" rx="2" fill="#ffffff"/>
                    <rect x="13" y="13" width="9" height="9" fill="#030712"/>

                    <rect x="70" y="5" width="25" height="25" rx="3" fill="#030712"/>
                    <rect x="74" y="9" width="17" height="17" rx="2" fill="#ffffff"/>
                    <rect x="78" y="13" width="9" height="9" fill="#030712"/>

                    <rect x="5" y="70" width="25" height="25" rx="3" fill="#030712"/>
                    <rect x="9" y="74" width="17" height="17" rx="2" fill="#ffffff"/>
                    <rect x="13" y="78" width="9" height="9" fill="#030712"/>

                    <!-- Patterns -->
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

                <!-- Center Logo Overlay -->
                <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                    <div class="w-12 h-12 rounded-xl bg-yellow-gold p-1.5 shadow-lg border-2 border-white flex items-center justify-center">
                        <img src="{{ asset('images/logo.svg') }}" alt="Mobilis Logo" class="w-full h-full object-contain">
                    </div>
                </div>
            </div>
        </div>

        <!-- 3 Simple Scan Steps -->
        <div class="grid grid-cols-3 gap-2.5 text-center text-xs mb-6">
            <div class="p-2.5 rounded-2xl bg-navy-950/80 border border-white/5">
                <span class="text-yellow-gold font-bold block text-sm">1</span>
                <span class="text-slate-300 text-[11px] block mt-0.5">Open Phone Camera</span>
            </div>
            <div class="p-2.5 rounded-2xl bg-navy-950/80 border border-white/5">
                <span class="text-yellow-gold font-bold block text-sm">2</span>
                <span class="text-slate-300 text-[11px] block mt-0.5">Scan the QR Code</span>
            </div>
            <div class="p-2.5 rounded-2xl bg-navy-950/80 border border-white/5">
                <span class="text-yellow-gold font-bold block text-sm">3</span>
                <span class="text-slate-300 text-[11px] block mt-0.5">Install Mobilis APK</span>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="space-y-3">
            <button type="button" id="copy-download-link-btn" class="w-full py-3.5 rounded-2xl bg-yellow-gold hover:bg-yellow-amber text-navy-950 font-black text-xs uppercase tracking-wider flex items-center justify-center gap-2 shadow-xl glow-yellow transition-all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                </svg>
                <span id="copy-btn-text">Copy Mobile Download Link</span>
            </button>

            <!-- Optional Developer/Testing Bypass -->
            <div class="pt-2">
                <a href="{{ route('mobilis.download', ['force' => 1]) }}" class="text-[11px] text-slate-500 hover:text-slate-300 underline transition-colors">
                    Developer testing? Download APK directly to PC &rarr;
                </a>
            </div>
        </div>

    </div>
</div>

<!-- ======================================================== -->
<!-- 1B. UNIFIED QR CODE MODAL (STANDARD) -->
<!-- ======================================================== -->
<div id="qr-download-modal" class="mobilis-modal hidden fixed inset-0 z-50 overflow-y-auto bg-black/85 backdrop-blur-md flex items-center justify-center p-4">
    <div class="relative w-full max-w-lg glass-card bg-navy-900 border border-white/15 rounded-3xl p-7 sm:p-9 shadow-2xl animate-fadeIn text-center">
        
        <!-- Close Button -->
        <button type="button" data-close-modal class="absolute top-6 right-6 p-2 rounded-xl text-slate-400 hover:text-white bg-slate-800/60 hover:bg-slate-800 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <div class="mb-6">
            <span class="px-3.5 py-1 rounded-full bg-yellow-gold/15 text-yellow-gold text-xs font-black border border-yellow-gold/30 uppercase tracking-wider">
                All-In-One Mobilis App
            </span>
            <h3 class="text-2xl font-black text-white font-display mt-2.5">
                Scan QR Code with Mobile
            </h3>
            <p class="text-slate-300 text-xs mt-1.5">
                Point your smartphone camera at the code below to directly download the single Mobilis App for Renters, Drivers, and Vehicle Hosts.
            </p>
        </div>

        <!-- High Resolution QR Code with Logo Badge in Center -->
        <div class="space-y-6">
            <div class="relative w-52 h-52 mx-auto p-4 rounded-3xl bg-white shadow-2xl flex items-center justify-center border-4 border-yellow-gold glow-yellow-sm">
                <!-- QR Code Pattern -->
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

                <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                    <div class="w-12 h-12 rounded-xl bg-yellow-gold p-1.5 shadow-lg border-2 border-white flex items-center justify-center">
                        <img src="{{ asset('images/logo.svg') }}" alt="Mobilis Logo" class="w-full h-full object-contain">
                    </div>
                </div>
            </div>

            <!-- Built-in 3 Modes Pill -->
            <div class="flex items-center justify-center gap-2 text-xs">
                <span class="px-3 py-1 rounded-lg bg-navy-950 text-yellow-gold border border-white/10 font-bold">🔑 Hourly & Daily</span>
                <span class="px-3 py-1 rounded-lg bg-navy-950 text-blue-400 border border-white/10 font-bold">🧑‍✈️ Driver</span>
                <span class="px-3 py-1 rounded-lg bg-navy-950 text-emerald-400 border border-white/10 font-bold">🤝 Partner Host</span>
            </div>

            <div>
                <h4 class="font-bold text-white text-base">Mobilis: All-In-One App</h4>
                <p class="text-xs text-slate-400">
                    Includes Renter, Driver, and Partner Host modes in one download
                </p>
            </div>
        </div>

    </div>
</div>


<!-- ======================================================== -->
<!-- 2. IN-APP CONVERSION / DOWNLOAD NOTICE MODAL -->
<!-- ======================================================== -->
<div id="app-download-notice-modal" class="mobilis-modal hidden fixed inset-0 z-50 overflow-y-auto bg-black/85 backdrop-blur-md flex items-center justify-center p-4">
    <div class="relative w-full max-w-lg glass-card bg-navy-900 border border-white/15 rounded-3xl p-8 sm:p-10 shadow-2xl animate-fadeIn text-center">
        
        <button type="button" data-close-modal class="absolute top-6 right-6 p-2 rounded-xl text-slate-400 hover:text-white bg-slate-800/60 hover:bg-slate-800 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <div class="w-20 h-20 rounded-3xl bg-yellow-gold p-3 shadow-2xl mx-auto mb-5 glow-yellow flex items-center justify-center">
            <img src="{{ asset('images/logo.svg') }}" alt="Mobilis Logo" class="w-full h-full object-contain">
        </div>

        <span class="px-3.5 py-1 rounded-full bg-yellow-gold/15 text-yellow-gold text-xs font-black border border-yellow-gold/30 uppercase tracking-widest">
            100% In-App Platform
        </span>

        <h3 class="text-2xl sm:text-3xl font-black text-white font-display mt-3.5 mb-3">
            Download the Mobilis App
        </h3>

        <p class="text-slate-300 text-xs sm:text-sm leading-relaxed mb-8">
            All hourly & daily car bookings, driver onboarding, and fleet hosting take place inside the single unified Mobilis Mobile App. Download now to get started!
        </p>

        <div class="space-y-3.5">
            <a href="{{ route('mobilis.download') }}" data-direct-download="all" class="w-full py-4 rounded-2xl bg-yellow-gold hover:bg-yellow-amber text-navy-950 font-black text-sm uppercase tracking-wider shadow-2xl glow-yellow transition-all flex items-center justify-center gap-2.5">
                <span>Direct APK Download (32.8 MB)</span>
                <span>↓</span>
            </a>
            <button type="button" data-open-modal="qr-download-modal" class="w-full py-3.5 rounded-2xl glass-card text-slate-200 hover:text-white font-bold text-xs flex items-center justify-center gap-2 transition-colors">
                <span>Scan QR Code</span>
            </button>
        </div>

    </div>
</div>


<!-- ======================================================== -->
<!-- 3. TERMS OF SERVICE MODAL -->
<!-- ======================================================== -->
<div id="terms-modal" class="mobilis-modal hidden fixed inset-0 z-50 overflow-y-auto bg-black/85 backdrop-blur-md flex items-center justify-center p-4">
    <div class="relative w-full max-w-2xl max-h-[85vh] overflow-y-auto glass-card bg-navy-900 border border-white/15 rounded-3xl p-7 sm:p-10 shadow-2xl animate-fadeIn">
        
        <button type="button" data-close-modal class="absolute top-6 right-6 p-2 rounded-xl text-slate-400 hover:text-white bg-slate-800/60 hover:bg-slate-800 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <div class="mb-6">
            <span class="px-3 py-1 rounded-full bg-yellow-gold/15 text-yellow-gold text-xs font-black border border-yellow-gold/30 uppercase tracking-wider">
                LEGAL POLICY
            </span>
            <h3 class="text-2xl sm:text-3xl font-black text-white font-display mt-2">
                Terms of Service
            </h3>
            <p class="text-xs text-slate-400 mt-1">Mobilis Philippines Inc. • Last updated August 2026</p>
        </div>

        <div class="space-y-6 text-slate-300 text-xs sm:text-sm leading-relaxed border-t border-white/10 pt-6">
            <div class="space-y-2">
                <h4 class="font-bold text-white text-base">1. Acceptance of Terms</h4>
                <p>By using the Mobilis Mobile App, you agree to comply with all terms governing peer-to-peer and chauffeur car rentals in the Philippines.</p>
            </div>
            <div class="space-y-2">
                <h4 class="font-bold text-white text-base">2. Eligibility & Verification</h4>
                <p>Renters must be at least 18 with a valid Driver's License. Accredited drivers must be 21+ with Professional Driver's License and clear NBI record. Hosts must provide valid LTO OR/CR.</p>
            </div>
            <div class="space-y-2">
                <h4 class="font-bold text-white text-base">3. In-App Bookings & Rates</h4>
                <p>All pricing (Hourly and Daily tiers) and vehicle access are managed strictly via the app. Subleasing or unlawful use results in immediate account suspension.</p>
            </div>
            <div class="space-y-2">
                <h4 class="font-bold text-white text-base">4. Host Payouts & Driver Earnings</h4>
                <p>Earnings are disbursed automatically via linked bank accounts or e-wallets according to platform settlement schedules.</p>
            </div>
        </div>

        <div class="mt-8 pt-6 border-t border-white/10 flex items-center justify-between">
            <a href="{{ route('mobilis.terms') }}" class="text-xs font-bold text-yellow-gold hover:underline">
                View Full Terms Page &rarr;
            </a>
            <button type="button" data-close-modal class="px-5 py-2.5 rounded-xl bg-slate-800 text-white hover:bg-slate-700 text-xs font-bold transition-all">
                Close
            </button>
        </div>

    </div>
</div>


<!-- ======================================================== -->
<!-- 4. PRIVACY POLICY MODAL -->
<!-- ======================================================== -->
<div id="privacy-modal" class="mobilis-modal hidden fixed inset-0 z-50 overflow-y-auto bg-black/85 backdrop-blur-md flex items-center justify-center p-4">
    <div class="relative w-full max-w-2xl max-h-[85vh] overflow-y-auto glass-card bg-navy-900 border border-white/15 rounded-3xl p-7 sm:p-10 shadow-2xl animate-fadeIn">
        
        <button type="button" data-close-modal class="absolute top-6 right-6 p-2 rounded-xl text-slate-400 hover:text-white bg-slate-800/60 hover:bg-slate-800 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <div class="mb-6">
            <span class="px-3 py-1 rounded-full bg-yellow-gold/15 text-yellow-gold text-xs font-black border border-yellow-gold/30 uppercase tracking-wider">
                DATA PRIVACY ACT (RA 10173)
            </span>
            <h3 class="text-2xl sm:text-3xl font-black text-white font-display mt-2">
                Privacy Policy
            </h3>
            <p class="text-xs text-slate-400 mt-1">Mobilis Philippines Inc. • Data Protection Office</p>
        </div>

        <div class="space-y-6 text-slate-300 text-xs sm:text-sm leading-relaxed border-t border-white/10 pt-6">
            <div class="space-y-2">
                <h4 class="font-bold text-white text-base">1. Information We Collect</h4>
                <p>We collect identity documents (Driver's License, Govt IDs), vehicle documentation (OR/CR), trip telematics data during active bookings, and tokenized payment info.</p>
            </div>
            <div class="space-y-2">
                <h4 class="font-bold text-white text-base">2. Purpose of Data Processing</h4>
                <p>Data is used exclusively for fraud prevention, driver/renter authentication, keyless Bluetooth access security, and commercial insurance claim processing.</p>
            </div>
            <div class="space-y-2">
                <h4 class="font-bold text-white text-base">3. 256-Bit Cryptographic Security</h4>
                <p>All data is encrypted in transit and at rest. We never sell personal information to third parties.</p>
            </div>
            <div class="space-y-2">
                <h4 class="font-bold text-white text-base">4. Your Data Subject Rights</h4>
                <p>You may request data copies, corrections, or account deletion anytime by contacting privacy@mobilis.ph.</p>
            </div>
        </div>

        <div class="mt-8 pt-6 border-t border-white/10 flex items-center justify-between">
            <a href="{{ route('mobilis.privacy') }}" class="text-xs font-bold text-yellow-gold hover:underline">
                View Full Privacy Policy &rarr;
            </a>
            <button type="button" data-close-modal class="px-5 py-2.5 rounded-xl bg-slate-800 text-white hover:bg-slate-700 text-xs font-bold transition-all">
                Close
            </button>
        </div>

    </div>
</div>


<!-- ======================================================== -->
<!-- 5. SECURITY & INSURANCE MODAL -->
<!-- ======================================================== -->
<div id="insurance-modal" class="mobilis-modal hidden fixed inset-0 z-50 overflow-y-auto bg-black/85 backdrop-blur-md flex items-center justify-center p-4">
    <div class="relative w-full max-w-2xl max-h-[85vh] overflow-y-auto glass-card bg-navy-900 border border-white/15 rounded-3xl p-7 sm:p-10 shadow-2xl animate-fadeIn">
        
        <button type="button" data-close-modal class="absolute top-6 right-6 p-2 rounded-xl text-slate-400 hover:text-white bg-slate-800/60 hover:bg-slate-800 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <div class="mb-6">
            <span class="px-3 py-1 rounded-full bg-emerald-500/15 text-emerald-400 text-xs font-black border border-emerald-500/30 uppercase tracking-wider">
                100% COVERAGE GUARANTEE
            </span>
            <h3 class="text-2xl sm:text-3xl font-black text-white font-display mt-2">
                Security & Insurance Policy
            </h3>
            <p class="text-xs text-slate-400 mt-1">Comprehensive Protection for Renters, Drivers, and Vehicle Hosts</p>
        </div>

        <div class="space-y-6 text-slate-300 text-xs sm:text-sm leading-relaxed border-t border-white/10 pt-6">
            <div class="space-y-2">
                <h4 class="font-bold text-white text-base">1. Comprehensive Commercial Protection</h4>
                <p>Every active booking includes collision damage, third-party liability (TPPD), passenger accident coverage, and total loss compensation.</p>
            </div>
            <div class="space-y-2">
                <h4 class="font-bold text-white text-base">2. Zero Host Liability</h4>
                <p>Vehicle owners are indemnified against accident damage and liability during confirmed rental bookings.</p>
            </div>
            <div class="space-y-2">
                <h4 class="font-bold text-white text-base">3. 24/7 Nationwide Roadside Assistance</h4>
                <p>Partnered with AAP for emergency towing, tire rescue, battery jumpstart, and in-app SOS response across the Philippines.</p>
            </div>
            <div class="space-y-2">
                <h4 class="font-bold text-white text-base">4. Fast 48-Hour Claim Turnaround</h4>
                <p>File claims directly in the Mobilis App with uploaded incident photos and police investigation reports.</p>
            </div>
        </div>

        <div class="mt-8 pt-6 border-t border-white/10 flex items-center justify-between">
            <a href="{{ route('mobilis.insurance') }}" class="text-xs font-bold text-yellow-gold hover:underline">
                View Full Insurance Policy &rarr;
            </a>
            <button type="button" data-close-modal class="px-5 py-2.5 rounded-xl bg-slate-800 text-white hover:bg-slate-700 text-xs font-bold transition-all">
                Close
            </button>
        </div>

    </div>
</div>


<!-- ======================================================== -->
<!-- 6. CAR MULTI-PHOTO GALLERY LIGHTBOX MODAL -->
<!-- ======================================================== -->
<div id="car-gallery-modal" class="mobilis-modal hidden fixed inset-0 z-50 overflow-y-auto bg-black/90 backdrop-blur-xl flex items-center justify-center p-3 sm:p-6">
    <div class="relative w-full max-w-4xl glass-card bg-navy-950/95 border border-white/15 rounded-3xl overflow-hidden shadow-2xl animate-fadeIn flex flex-col max-h-[90vh]">
        
        <!-- Modal Header -->
        <div class="p-5 sm:p-6 border-b border-white/10 flex items-center justify-between bg-navy-900/80">
            <div class="flex items-center gap-3">
                <span id="gallery-modal-badge" class="px-3 py-1 rounded-full bg-yellow-gold text-navy-950 text-xs font-black uppercase tracking-wider">
                    Sedan
                </span>
                <h3 id="gallery-modal-title" class="text-xl sm:text-2xl font-black text-white font-display">
                    Toyota Vios 2025 (Uno)
                </h3>
            </div>
            <button type="button" data-close-modal class="p-2 rounded-xl text-slate-400 hover:text-white bg-slate-800/60 hover:bg-slate-800 transition-colors" aria-label="Close modal">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Main Photo Viewer Container -->
        <div class="relative flex-1 bg-black min-h-[280px] sm:min-h-[420px] flex items-center justify-center overflow-hidden group">
            <img id="gallery-modal-main-img" src="" alt="Car Photo" class="w-full h-full object-contain max-h-[50vh] transition-all duration-300">
            
            <!-- Left & Right Arrow Navigation -->
            <button type="button" id="gallery-modal-prev" class="absolute left-4 top-1/2 -translate-y-1/2 w-11 h-11 rounded-2xl bg-navy-950/80 hover:bg-yellow-gold text-white hover:text-navy-950 border border-white/20 hover:border-yellow-gold flex items-center justify-center transition-all backdrop-blur-md shadow-2xl" aria-label="Previous photo">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            <button type="button" id="gallery-modal-next" class="absolute right-4 top-1/2 -translate-y-1/2 w-11 h-11 rounded-2xl bg-navy-950/80 hover:bg-yellow-gold text-white hover:text-navy-950 border border-white/20 hover:border-yellow-gold flex items-center justify-center transition-all backdrop-blur-md shadow-2xl" aria-label="Next photo">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>

            <!-- Counter Badge -->
            <div class="absolute bottom-4 right-4 px-3 py-1.5 rounded-xl bg-navy-950/80 backdrop-blur-md border border-white/15 text-xs font-bold text-slate-200 shadow-md">
                <span id="gallery-modal-counter">1 / 3</span>
            </div>
        </div>

        <!-- Thumbnails Strip & Details Footer -->
        <div class="p-5 sm:p-6 bg-navy-900/90 border-t border-white/10 space-y-4">
            <!-- Thumbnails Container -->
            <div id="gallery-modal-thumbnails" class="flex gap-2.5 overflow-x-auto pb-1 no-scrollbar">
                <!-- Injected dynamically by JS -->
            </div>

            <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-2 border-t border-white/5">
                <div class="flex flex-wrap items-center gap-4 text-xs text-slate-300">
                    <span id="gallery-modal-seats">👥 4-5 Seats</span>
                    <span id="gallery-modal-trans">⚙️ Automatic</span>
                    <span id="gallery-modal-fuel">⛽ Unleaded</span>
                    <span id="gallery-modal-rate" class="font-bold text-yellow-gold text-sm">₱180/hr • ₱1,800/day</span>
                </div>
                <div class="flex items-center gap-3 w-full sm:w-auto">
                    <a href="{{ route('mobilis.download') }}" data-direct-download="all" class="w-full sm:w-auto px-6 py-3 rounded-xl bg-yellow-gold hover:bg-yellow-amber text-navy-950 font-black text-xs uppercase tracking-wider shadow-xl glow-yellow-sm transition-all text-center">
                        Book This Car in App ↓
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

