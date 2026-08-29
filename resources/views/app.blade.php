@extends('layouts.app')

@section('title', 'Mobilis App | All-In-One Mobile Experience')

@section('content')
<div class="min-h-screen bg-navy-950 pb-28 text-white relative">
    
    <!-- Mobile App Top Bar -->
    <div class="sticky top-0 z-30 bg-navy-900/95 backdrop-blur-xl border-b border-white/10 px-4 py-3 shadow-xl">
        <div class="max-w-md mx-auto flex items-center justify-between">
            <div class="flex items-center gap-2.5">
                <div class="w-9 h-9 rounded-xl bg-yellow-gold p-1.5 flex items-center justify-center shadow-lg" style="width: 36px; height: 36px;">
                    <img src="{{ asset('images/logo.svg') }}" alt="Mobilis Logo" class="w-full h-full object-contain">
                </div>
                <div>
                    <span class="text-sm font-black tracking-tight text-white font-display">MOBILIS APP</span>
                    <span class="text-[10px] text-yellow-gold font-bold block flex items-center gap-1">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                        📍 Metro Manila & Luzon
                    </span>
                </div>
            </div>

            <!-- Install / PWA Trigger Button -->
            <button type="button" id="mobile-app-install-btn" class="px-3 py-1.5 rounded-xl bg-yellow-gold text-navy-950 font-black text-xs flex items-center gap-1 shadow-lg hover:bg-yellow-amber transition-all">
                <span>📱</span>
                <span>Install App</span>
            </button>
        </div>

        <!-- 3-In-1 App Mode Switcher (Renter, Driver, Host) -->
        <div class="max-w-md mx-auto mt-3 grid grid-cols-3 gap-1.5 bg-navy-950 p-1 rounded-2xl border border-white/10 text-xs font-bold">
            <button type="button" data-app-mode="renter" class="app-mode-tab py-2 rounded-xl bg-yellow-gold text-navy-950 font-black shadow-md flex items-center justify-center gap-1 transition-all">
                <span>🚗</span>
                <span>Renter</span>
            </button>
            <button type="button" data-app-mode="driver" class="app-mode-tab py-2 rounded-xl text-slate-400 hover:text-white flex items-center justify-center gap-1 transition-all">
                <span>🧑‍✈️</span>
                <span>Driver</span>
            </button>
            <button type="button" data-app-mode="host" class="app-mode-tab py-2 rounded-xl text-slate-400 hover:text-white flex items-center justify-center gap-1 transition-all">
                <span>🔑</span>
                <span>Host</span>
            </button>
        </div>
    </div>

    <!-- Main Mobile Content Area -->
    <div class="max-w-md mx-auto px-4 py-4 space-y-5">
        
        <!-- PWA Install Banner if on mobile browser -->
        <div id="pwa-install-banner" class="glass-card bg-gradient-to-r from-yellow-gold/20 via-navy-900 to-navy-900 border border-yellow-gold/40 rounded-3xl p-4 flex items-center justify-between gap-3 shadow-xl">
            <div class="flex items-center gap-3">
                <div class="w-11 h-11 rounded-2xl bg-yellow-gold p-2 flex-shrink-0 flex items-center justify-center shadow-lg" style="width: 44px; height: 44px;">
                    <img src="{{ asset('images/logo.svg') }}" alt="Logo" class="w-full h-full object-contain">
                </div>
                <div>
                    <h4 class="text-xs font-black text-white">Install Mobilis App</h4>
                    <p class="text-[11px] text-slate-300">Add to your home screen for 1-tap instant car rentals!</p>
                </div>
            </div>
            <button type="button" onclick="triggerPwaInstall()" class="px-3.5 py-2 rounded-xl bg-yellow-gold hover:bg-yellow-amber text-navy-950 font-black text-xs uppercase tracking-wider flex-shrink-0 shadow-lg glow-yellow-sm">
                Install
            </button>
        </div>

        <!-- ============================================== -->
        <!-- MODE 1: RENTER DASHBOARD (CAR RENTAL) -->
        <!-- ============================================== -->
        <div id="view-renter" class="app-view space-y-4">
            
            <!-- Quick Rental Search Card -->
            <div class="glass-card bg-navy-900/90 border border-white/10 rounded-3xl p-4 shadow-xl space-y-3">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-black uppercase text-yellow-gold tracking-wider">Book a Vehicle</span>
                    <div class="flex items-center gap-1 bg-navy-950 px-2 py-0.5 rounded-lg border border-white/10 text-[10px] text-slate-300">
                        <span>⚡ Instant Bluetooth Unlock</span>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-2 text-xs">
                    <div class="bg-navy-950 p-2.5 rounded-2xl border border-white/10">
                        <span class="text-[10px] text-slate-400 block font-bold">PICKUP LOCATION</span>
                        <span class="text-white font-bold text-xs truncate block">📍 BGC, Taguig City</span>
                    </div>
                    <div class="bg-navy-950 p-2.5 rounded-2xl border border-white/10">
                        <span class="text-[10px] text-slate-400 block font-bold">RENTAL TYPE</span>
                        <select id="mobile-rental-type-select" class="bg-transparent text-yellow-gold font-bold text-xs focus:outline-none w-full">
                            <option value="hourly" class="bg-navy-950 text-white">Hourly Rate (from ₱180/hr)</option>
                            <option value="daily" class="bg-navy-950 text-white" selected>Daily Rate (from ₱1,800/day)</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Categories Tabs -->
            <div class="flex gap-2 overflow-x-auto pb-1 no-scrollbar text-xs">
                <button type="button" data-app-cat="all" class="app-cat-btn px-4 py-2 rounded-2xl bg-yellow-gold text-navy-950 font-black flex-shrink-0 shadow-md">All Cars</button>
                <button type="button" data-app-cat="sedan" class="app-cat-btn px-4 py-2 rounded-2xl bg-navy-900 text-slate-300 hover:text-white flex-shrink-0 border border-white/10 font-bold">🚗 Sedan</button>
                <button type="button" data-app-cat="suv" class="app-cat-btn px-4 py-2 rounded-2xl bg-navy-900 text-slate-300 hover:text-white flex-shrink-0 border border-white/10 font-bold">🚙 7-Seat SUV</button>
                <button type="button" data-app-cat="van" class="app-cat-btn px-4 py-2 rounded-2xl bg-navy-900 text-slate-300 hover:text-white flex-shrink-0 border border-white/10 font-bold">🚐 Van</button>
                <button type="button" data-app-cat="luxury" class="app-cat-btn px-4 py-2 rounded-2xl bg-navy-900 text-slate-300 hover:text-white flex-shrink-0 border border-white/10 font-bold">✨ Luxury</button>
            </div>

            <!-- Car List Cards -->
            <div class="space-y-4">
                @foreach($fleet as $car)
                <div class="app-car-item glass-card bg-navy-900/90 border border-white/15 rounded-3xl overflow-hidden shadow-xl" data-category="{{ strtolower($car['category']) }}">
                    <div class="relative h-44 bg-navy-950 overflow-hidden">
                        <img src="{{ $car['image'] }}" alt="{{ $car['name'] }}" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-navy-950 via-transparent to-black/40"></div>
                        
                        <span class="absolute top-3 left-3 px-3 py-1 rounded-xl bg-navy-950/80 backdrop-blur-md text-yellow-gold text-[10px] font-black uppercase border border-yellow-gold/30">
                            {{ $car['badge'] }}
                        </span>

                        <div class="absolute bottom-3 left-3 right-3 flex items-end justify-between">
                            <div>
                                <h3 class="text-base font-black text-white font-display">{{ $car['name'] }}</h3>
                                <p class="text-[11px] text-slate-300">{{ $car['seats'] }} • {{ $car['transmission'] }} • {{ $car['fuel'] }}</p>
                            </div>
                            <div class="text-right">
                                <span class="text-lg font-black text-yellow-gold block">₱{{ number_format($car['daily_rate']) }}</span>
                                <span class="text-[10px] text-slate-400 block">₱{{ $car['hourly_rate'] }}/hr • per day</span>
                            </div>
                        </div>
                    </div>

                    <div class="p-3.5 flex items-center justify-between gap-3 border-t border-white/10 bg-navy-900/95">
                        <div class="flex items-center gap-1.5 text-xs text-slate-300">
                            <span class="text-yellow-gold">★</span>
                            <span class="font-bold">{{ $car['rating'] }}</span>
                            <span class="text-slate-500">({{ $car['trips'] }} trips)</span>
                        </div>

                        <button type="button" onclick="openAppBookingModal('{{ $car['id'] }}', '{{ $car['name'] }}', {{ $car['hourly_rate'] }}, {{ $car['daily_rate'] }}, '{{ $car['image'] }}')" class="px-5 py-2.5 rounded-xl bg-yellow-gold hover:bg-yellow-amber text-navy-950 font-black text-xs uppercase tracking-wider shadow-lg glow-yellow-sm transition-all">
                            Book Now &rarr;
                        </button>
                    </div>
                </div>
                @endforeach
            </div>

        </div>

        <!-- ============================================== -->
        <!-- MODE 2: DRIVER CHAUFFEUR DASHBOARD -->
        <!-- ============================================== -->
        <div id="view-driver" class="app-view hidden space-y-4">
            <!-- Driver Status Card -->
            <div class="glass-card bg-navy-900 border border-white/15 rounded-3xl p-5 shadow-2xl text-center space-y-4">
                <div class="w-16 h-16 rounded-3xl bg-blue-500/20 text-blue-400 mx-auto flex items-center justify-center text-3xl border border-blue-500/30">
                    🧑‍✈️
                </div>
                <div>
                    <span class="px-3 py-1 rounded-full bg-emerald-500/20 text-emerald-400 text-xs font-black border border-emerald-500/30">
                        ● READY FOR DISPATCH
                    </span>
                    <h3 class="text-xl font-black text-white font-display mt-2">Chauffeur Driver Mode</h3>
                    <p class="text-xs text-slate-300 mt-1">Drive accredited vehicles without owning a car. Earn guaranteed daily chauffeur fees.</p>
                </div>

                <div class="grid grid-cols-2 gap-3 text-left pt-2 border-t border-white/10">
                    <div class="bg-navy-950 p-3 rounded-2xl border border-white/10">
                        <span class="text-[10px] text-slate-400 block font-bold">EST. DAILY EARNINGS</span>
                        <span class="text-base font-black text-yellow-gold">₱1,400 - ₱2,500</span>
                    </div>
                    <div class="bg-navy-950 p-3 rounded-2xl border border-white/10">
                        <span class="text-[10px] text-slate-400 block font-bold">AVERAGE TIP / TRIP</span>
                        <span class="text-base font-black text-emerald-400">₱150 - ₱300</span>
                    </div>
                </div>

                <button type="button" onclick="simulateDriverOnboarding()" class="w-full py-3.5 rounded-2xl bg-yellow-gold text-navy-950 font-black text-xs uppercase tracking-wider shadow-lg glow-yellow-sm">
                    Apply as Mobilis Accredited Driver
                </button>
            </div>
        </div>

        <!-- ============================================== -->
        <!-- MODE 3: PARTNER HOST DASHBOARD -->
        <!-- ============================================== -->
        <div id="view-host" class="app-view hidden space-y-4">
            <!-- Host Status Card -->
            <div class="glass-card bg-navy-900 border border-white/15 rounded-3xl p-5 shadow-2xl text-center space-y-4">
                <div class="w-16 h-16 rounded-3xl bg-emerald-500/20 text-emerald-400 mx-auto flex items-center justify-center text-3xl border border-emerald-500/30">
                    🤝
                </div>
                <div>
                    <span class="px-3 py-1 rounded-full bg-yellow-gold/20 text-yellow-gold text-xs font-black border border-yellow-gold/30">
                        🔑 FLEET HOSTING ACTIVE
                    </span>
                    <h3 class="text-xl font-black text-white font-display mt-2">Vehicle Host & Fleet Partner</h3>
                    <p class="text-xs text-slate-300 mt-1">List your idle car or multi-vehicle fleet and earn passive monthly income with 100% insurance coverage.</p>
                </div>

                <div class="grid grid-cols-2 gap-3 text-left pt-2 border-t border-white/10">
                    <div class="bg-navy-950 p-3 rounded-2xl border border-white/10">
                        <span class="text-[10px] text-slate-400 block font-bold">MONTHLY ESTIMATE</span>
                        <span class="text-base font-black text-yellow-gold">₱35,000 - ₱85,000</span>
                    </div>
                    <div class="bg-navy-950 p-3 rounded-2xl border border-white/10">
                        <span class="text-[10px] text-slate-400 block font-bold">DAMAGE LIABILITY</span>
                        <span class="text-base font-black text-emerald-400">₱0 (100% Insured)</span>
                    </div>
                </div>

                <button type="button" onclick="simulateHostOnboarding()" class="w-full py-3.5 rounded-2xl bg-yellow-gold text-navy-950 font-black text-xs uppercase tracking-wider shadow-lg glow-yellow-sm">
                    List Your Vehicle in App
                </button>
            </div>
        </div>

    </div>

    <!-- Native App Bottom Navigation Bar -->
    <div class="fixed bottom-0 inset-x-0 z-40 bg-navy-900/95 backdrop-blur-2xl border-t border-white/10 px-4 py-2 shadow-2xl">
        <div class="max-w-md mx-auto grid grid-cols-4 gap-1 text-center text-[10px] font-bold text-slate-400">
            <a href="{{ route('mobilis.home') }}" class="py-1.5 flex flex-col items-center gap-1 hover:text-white">
                <span class="text-lg">🏠</span>
                <span>Portal</span>
            </a>
            <button type="button" data-app-mode="renter" class="bottom-nav-btn py-1.5 flex flex-col items-center gap-1 text-yellow-gold font-black">
                <span class="text-lg">🚗</span>
                <span>Fleet</span>
            </button>
            <button type="button" data-app-mode="driver" class="bottom-nav-btn py-1.5 flex flex-col items-center gap-1 hover:text-white">
                <span class="text-lg">🧑‍✈️</span>
                <span>Driver</span>
            </button>
            <button type="button" data-app-mode="host" class="bottom-nav-btn py-1.5 flex flex-col items-center gap-1 hover:text-white">
                <span class="text-lg">🔑</span>
                <span>Host</span>
            </button>
        </div>
    </div>

</div>

<!-- Interactive In-App Booking Modal -->
<div id="inapp-booking-modal" class="mobilis-modal hidden fixed inset-0 z-50 overflow-y-auto bg-black/90 backdrop-blur-xl flex items-center justify-center p-4">
    <div class="relative w-full max-w-md glass-card bg-navy-900 border border-yellow-gold/40 rounded-3xl p-6 shadow-2xl animate-fadeIn space-y-4">
        
        <button type="button" data-close-modal class="absolute top-5 right-5 p-2 rounded-xl text-slate-400 hover:text-white bg-slate-800/80">
            ✕
        </button>

        <div class="flex items-center gap-3 border-b border-white/10 pb-3">
            <img id="inapp-modal-img" src="" alt="Car" class="w-16 h-12 object-cover rounded-xl border border-white/10">
            <div>
                <span class="text-[10px] text-yellow-gold font-bold uppercase">Booking Request</span>
                <h3 id="inapp-modal-title" class="text-base font-black text-white">Car Name</h3>
            </div>
        </div>

        <div class="space-y-3 text-xs">
            <div>
                <label class="block text-slate-400 font-bold mb-1">Rental Tier:</label>
                <div class="grid grid-cols-2 gap-2">
                    <button type="button" id="inapp-tier-hourly" onclick="selectInAppTier('hourly')" class="p-2.5 rounded-xl border border-white/15 bg-navy-950 text-white font-bold text-center">
                        <span class="block">Hourly</span>
                        <span id="inapp-tier-hourly-price" class="text-yellow-gold font-black block mt-0.5">₱180/hr</span>
                    </button>
                    <button type="button" id="inapp-tier-daily" onclick="selectInAppTier('daily')" class="p-2.5 rounded-xl border-2 border-yellow-gold bg-yellow-gold/15 text-yellow-gold font-bold text-center">
                        <span class="block">Daily</span>
                        <span id="inapp-tier-daily-price" class="font-black block mt-0.5">₱1,800/day</span>
                    </button>
                </div>
            </div>

            <div>
                <label id="inapp-duration-label" class="block text-slate-400 font-bold mb-1">Rental Duration: <span id="inapp-duration-val" class="text-white">1 Day</span></label>
                <input type="range" id="inapp-duration-slider" min="1" max="14" value="1" class="w-full accent-yellow-gold">
            </div>

            <div class="p-3 rounded-2xl bg-navy-950 border border-white/10 flex items-center justify-between">
                <div>
                    <span class="text-slate-400 text-[11px] block">Estimated Total:</span>
                    <span id="inapp-total-price" class="text-xl font-black text-yellow-gold">₱1,800</span>
                </div>
                <span class="text-[10px] text-emerald-400 font-bold bg-emerald-500/10 px-2.5 py-1 rounded-full border border-emerald-500/30">
                    ✓ 100% Insured
                </span>
            </div>
        </div>

        <div class="space-y-2 pt-2">
            <button type="button" onclick="confirmInAppBooking()" class="w-full py-3.5 rounded-2xl bg-yellow-gold hover:bg-yellow-amber text-navy-950 font-black text-xs uppercase tracking-wider shadow-xl glow-yellow-sm">
                Confirm In-App Reservation
            </button>
            <p class="text-[10px] text-slate-400 text-center">Smart Bluetooth keyless unlock will activate upon vehicle pickup.</p>
        </div>

    </div>
</div>

<script>
    let activeCar = null;
    let selectedTier = 'daily';

    document.querySelectorAll('[data-app-mode]').forEach(btn => {
        btn.addEventListener('click', () => {
            const mode = btn.getAttribute('data-app-mode');
            
            // Switch tabs
            document.querySelectorAll('.app-mode-tab').forEach(t => {
                const active = t.getAttribute('data-app-mode') === mode;
                if (active) {
                    t.classList.add('bg-yellow-gold', 'text-navy-950', 'font-black', 'shadow-md');
                    t.classList.remove('text-slate-400');
                } else {
                    t.classList.remove('bg-yellow-gold', 'text-navy-950', 'font-black', 'shadow-md');
                    t.classList.add('text-slate-400');
                }
            });

            // Switch views
            document.querySelectorAll('.app-view').forEach(v => {
                if (v.id === 'view-' + mode) {
                    v.classList.remove('hidden');
                } else {
                    v.classList.add('hidden');
                }
            });
        });
    });

    // Category Filter
    document.querySelectorAll('[data-app-cat]').forEach(btn => {
        btn.addEventListener('click', () => {
            const cat = btn.getAttribute('data-app-cat');
            document.querySelectorAll('.app-cat-btn').forEach(b => {
                if (b === btn) {
                    b.classList.add('bg-yellow-gold', 'text-navy-950', 'font-black');
                    b.classList.remove('bg-navy-900', 'text-slate-300');
                } else {
                    b.classList.remove('bg-yellow-gold', 'text-navy-950', 'font-black');
                    b.classList.add('bg-navy-900', 'text-slate-300');
                }
            });

            document.querySelectorAll('.app-car-item').forEach(item => {
                const itemCat = item.getAttribute('data-category');
                if (cat === 'all' || itemCat === cat) {
                    item.classList.remove('hidden');
                } else {
                    item.classList.add('hidden');
                }
            });
        });
    });

    function openAppBookingModal(id, name, hourly, daily, img) {
        activeCar = { id, name, hourly, daily, img };
        document.getElementById('inapp-modal-title').textContent = name;
        document.getElementById('inapp-modal-img').src = img;
        document.getElementById('inapp-tier-hourly-price').textContent = '₱' + hourly + '/hr';
        document.getElementById('inapp-tier-daily-price').textContent = '₱' + daily.toLocaleString() + '/day';
        
        selectInAppTier('daily');
        openModal('inapp-booking-modal');
    }

    function selectInAppTier(tier) {
        selectedTier = tier;
        const slider = document.getElementById('inapp-duration-slider');
        const hourlyBtn = document.getElementById('inapp-tier-hourly');
        const dailyBtn = document.getElementById('inapp-tier-daily');

        if (tier === 'hourly') {
            hourlyBtn.className = 'p-2.5 rounded-xl border-2 border-yellow-gold bg-yellow-gold/15 text-yellow-gold font-bold text-center';
            dailyBtn.className = 'p-2.5 rounded-xl border border-white/15 bg-navy-950 text-white font-bold text-center';
            slider.min = 1;
            slider.max = 24;
            slider.value = 4;
        } else {
            dailyBtn.className = 'p-2.5 rounded-xl border-2 border-yellow-gold bg-yellow-gold/15 text-yellow-gold font-bold text-center';
            hourlyBtn.className = 'p-2.5 rounded-xl border border-white/15 bg-navy-950 text-white font-bold text-center';
            slider.min = 1;
            slider.max = 14;
            slider.value = 1;
        }
        updateInAppCalc();
    }

    const slider = document.getElementById('inapp-duration-slider');
    if (slider) {
        slider.addEventListener('input', updateInAppCalc);
    }

    function updateInAppCalc() {
        if (!activeCar) return;
        const val = parseInt(document.getElementById('inapp-duration-slider').value, 10);
        const label = document.getElementById('inapp-duration-val');
        const totalEl = document.getElementById('inapp-total-price');

        if (selectedTier === 'hourly') {
            label.textContent = val + (val > 1 ? ' Hours' : ' Hour');
            totalEl.textContent = '₱' + (activeCar.hourly * val).toLocaleString();
        } else {
            label.textContent = val + (val > 1 ? ' Days' : ' Day');
            totalEl.textContent = '₱' + (activeCar.daily * val).toLocaleString();
        }
    }

    function confirmInAppBooking() {
        closeModal('inapp-booking-modal');
        alert('🎉 Reservation Confirmed!\n\nVehicle: ' + activeCar.name + '\nStatus: Booked & Ready\nSmart Bluetooth Key: Active');
    }

    function simulateDriverOnboarding() {
        alert('🧑‍✈️ Mobilis Chauffeur Driver Program\n\nYour application has been received! Our accreditation team will verify your Professional Driver\'s License within 24 hours.');
    }

    function simulateHostOnboarding() {
        alert('🤝 Mobilis Host Partner Program\n\nThank you for choosing Mobilis! An onboarding specialist will contact you to inspect and install the smart telematics keyless module.');
    }

    // PWA Install Prompt Trigger
    let deferredPrompt = null;
    window.addEventListener('beforeinstallprompt', (e) => {
        e.preventDefault();
        deferredPrompt = e;
        const banner = document.getElementById('pwa-install-banner');
        if (banner) banner.classList.remove('hidden');
    });

    function triggerPwaInstall() {
        if (deferredPrompt) {
            deferredPrompt.prompt();
            deferredPrompt.userChoice.then((choiceResult) => {
                if (choiceResult.outcome === 'accepted') {
                    console.log('User accepted PWA install');
                }
                deferredPrompt = null;
            });
        } else {
            openModal('mobile-install-app-modal');
        }
    }

    const appInstallBtn = document.getElementById('mobile-app-install-btn');
    if (appInstallBtn) {
        appInstallBtn.addEventListener('click', triggerPwaInstall);
    }
</script>
@endsection
