@extends('layouts.app')

@section('title', 'Mobilis | All-In-One Car Rental App - Official Download Hub')

@section('content')

<!-- ======================================================== -->
<!-- 1. HERO SECTION WITH DOON-INSPIRED QUICK-FINDER BAR -->
<!-- ======================================================== -->
<section class="relative min-h-[95vh] flex items-center justify-center overflow-hidden bg-radial-hero bg-grid-pattern pt-16 pb-28 lg:pt-24 lg:pb-36">
    <!-- Ambient Background Glow Orbs -->
    <div class="absolute -top-40 left-1/2 -translate-x-1/2 w-[900px] h-[500px] bg-yellow-gold/15 rounded-full blur-[150px] pointer-events-none"></div>
    <div class="absolute top-1/3 -right-48 w-[450px] h-[450px] bg-blue-600/15 rounded-full blur-[130px] pointer-events-none"></div>
    <div class="absolute bottom-10 -left-48 w-[450px] h-[450px] bg-yellow-gold/10 rounded-full blur-[130px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
        <div class="text-center max-w-4xl mx-auto space-y-8">
            
            <!-- Category Badge -->
            <div class="inline-flex items-center gap-2.5 px-5 py-2.5 rounded-full glass-card-yellow border border-yellow-gold/40 animate-pulse-subtle">
                <span class="w-2.5 h-2.5 rounded-full bg-yellow-gold animate-ping"></span>
                <span class="text-xs sm:text-sm font-extrabold text-yellow-gold tracking-widest uppercase">
                    100% PURE CAR RENTAL PLATFORM IN THE PHILIPPINES
                </span>
            </div>

            <!-- Main Headline -->
            <h1 class="text-4xl sm:text-6xl lg:text-7xl font-black font-display tracking-tight text-white leading-[1.06]">
                Rent a car and <span class="text-gradient-yellow">enjoy the journey</span> <br class="hidden sm:inline">
                with the Mobilis App.
            </h1>

            <!-- Subheadline -->
            <p class="text-base sm:text-xl text-slate-300 max-w-2xl mx-auto leading-relaxed font-normal">
                Hourly & Daily rentals across verified Sedans, SUVs, and Luxury Vans. Whether you are renting, driving as a chauffeur, or hosting your car—everything is seamlessly managed inside one unified app.
            </p>

            <!-- DOON-STYLE INTERACTIVE QUICK-FINDER BAR -->
            <div class="max-w-4xl mx-auto glass-card bg-navy-900/95 rounded-3xl p-3 sm:p-4 border border-yellow-gold/30 shadow-2xl glow-yellow-sm transition-all duration-300 hover:border-yellow-gold/60">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 items-center">
                    
                    <!-- Location Selector -->
                    <div class="p-3 rounded-2xl bg-navy-950/80 border border-white/10 text-left">
                        <span class="text-[10px] font-black uppercase text-yellow-gold tracking-wider block">Where?</span>
                        <select class="w-full bg-transparent text-white text-xs font-bold focus:outline-none cursor-pointer mt-0.5">
                            <option value="manila">Metro Manila & BGC</option>
                            <option value="cebu">Metro Cebu & Mactan</option>
                            <option value="clark">Clark & Pampanga</option>
                            <option value="davao">Davao City</option>
                        </select>
                    </div>

                    <!-- Rental Mode Selector -->
                    <div class="p-3 rounded-2xl bg-navy-950/80 border border-white/10 text-left">
                        <span class="text-[10px] font-black uppercase text-yellow-gold tracking-wider block">Pricing Type</span>
                        <select class="w-full bg-transparent text-white text-xs font-bold focus:outline-none cursor-pointer mt-0.5">
                            <option value="hourly">⏱️ Hourly (1 - 24 Hours)</option>
                            <option value="daily" selected>📅 Daily (1 - 30 Days)</option>
                        </select>
                    </div>

                    <!-- Car Type Selector -->
                    <div class="p-3 rounded-2xl bg-navy-950/80 border border-white/10 text-left">
                        <span class="text-[10px] font-black uppercase text-yellow-gold tracking-wider block">Vehicle Category</span>
                        <select class="w-full bg-transparent text-white text-xs font-bold focus:outline-none cursor-pointer mt-0.5">
                            <option value="all">All Vehicles (1,200+)</option>
                            <option value="sedan">Sedans (from ₱180/hr)</option>
                            <option value="suv">7-Seat SUVs (from ₱380/hr)</option>
                            <option value="van">VIP Vans (from ₱480/hr)</option>
                            <option value="luxury">Luxury (from ₱750/hr)</option>
                        </select>
                    </div>

                    <!-- Search Button -->
                    <button type="button" id="hero-quick-search-btn" class="w-full h-full min-h-[52px] px-6 py-3.5 rounded-2xl bg-yellow-gold hover:bg-yellow-amber text-navy-950 font-black text-xs uppercase tracking-wider flex items-center justify-center gap-2 shadow-xl glow-yellow transition-all transform hover:-translate-y-0.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M19 11a8 8 0 11-16 0 8 8 0 0116 0z"></path>
                        </svg>
                        <span>Search Cars in App</span>
                    </button>

                </div>
            </div>

            <!-- Trust Stats Row -->
            <div class="grid grid-cols-3 gap-6 pt-10 border-t border-white/10 text-center max-w-2xl mx-auto">
                <div class="space-y-1">
                    <div class="text-3xl sm:text-4xl font-black text-yellow-gold font-display">200K+</div>
                    <p class="text-xs text-slate-400 font-semibold">App Downloads</p>
                </div>
                <div class="space-y-1">
                    <div class="text-3xl sm:text-4xl font-black text-white font-display">1,200+</div>
                    <p class="text-xs text-slate-400 font-semibold">Active Fleet Cars</p>
                </div>
                <div class="space-y-1">
                    <div class="text-3xl sm:text-4xl font-black text-yellow-gold font-display">4.9 ★</div>
                    <p class="text-xs text-slate-400 font-semibold">User Rating</p>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ======================================================== -->
<!-- 2. INTERACTIVE ROLE SLIDES CAROUSEL (STRICTLY 3 ROLES) -->
<!-- ======================================================== -->
<section id="apps" class="py-28 lg:py-36 bg-navy-900/60 border-y border-white/10 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
            <span class="px-4 py-1.5 rounded-full bg-yellow-gold/15 text-yellow-gold text-xs font-black border border-yellow-gold/30 uppercase tracking-widest">
                3 IN-APP ROLES & MODES
            </span>
            <h2 class="text-3xl sm:text-5xl font-black text-white font-display">
                One App for Renters, Drivers & Car Hosts
            </h2>
            <p class="text-slate-300 text-sm sm:text-base">
                Click any role or use the slide navigation arrows to see how each mode works inside the Mobilis Mobile App.
            </p>
        </div>

        <!-- STRICTLY 3 ROLE SLIDE TABS -->
        <div class="flex flex-wrap items-center justify-center gap-3 p-2 rounded-2xl glass-card bg-navy-950 max-w-2xl mx-auto mb-12 border border-white/15 shadow-xl">
            <button type="button" data-slide-tab="0" class="flex-1 min-w-[160px] py-3.5 px-4 rounded-xl text-xs sm:text-sm font-black bg-yellow-gold text-navy-950 shadow-xl glow-yellow-sm transition-all flex items-center justify-center gap-2">
                <span>🔑</span>
                <span>Rent a Car</span>
            </button>
            <button type="button" data-slide-tab="1" class="flex-1 min-w-[160px] py-3.5 px-4 rounded-xl text-xs sm:text-sm font-bold text-slate-300 hover:text-white transition-all flex items-center justify-center gap-2">
                <span>🧑‍✈️</span>
                <span>Drive as Chauffeur</span>
            </button>
            <button type="button" data-slide-tab="2" class="flex-1 min-w-[160px] py-3.5 px-4 rounded-xl text-xs sm:text-sm font-bold text-slate-300 hover:text-white transition-all flex items-center justify-center gap-2">
                <span>🤝</span>
                <span>List Your Car (Host)</span>
            </button>
        </div>

        <!-- 3-SLIDES CONTAINER WITH PREV/NEXT ARROWS -->
        <div class="relative max-w-5xl mx-auto">
            
            <!-- Left Arrow Button -->
            <button type="button" id="role-slide-prev" class="absolute -left-5 sm:-left-7 top-1/2 -translate-y-1/2 z-20 w-12 h-12 rounded-2xl bg-navy-900/90 hover:bg-yellow-gold text-white hover:text-navy-950 border border-white/20 hover:border-yellow-gold shadow-2xl flex items-center justify-center transition-all transform hover:scale-110">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>

            <!-- Right Arrow Button -->
            <button type="button" id="role-slide-next" class="absolute -right-5 sm:-right-7 top-1/2 -translate-y-1/2 z-20 w-12 h-12 rounded-2xl bg-navy-900/90 hover:bg-yellow-gold text-white hover:text-navy-950 border border-white/20 hover:border-yellow-gold shadow-2xl flex items-center justify-center transition-all transform hover:scale-110">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>

            <!-- SLIDE 0: BE A RENTER -->
            <div data-role-slide="0" class="glass-card bg-gradient-to-tr from-navy-950 via-navy-900 to-navy-850 rounded-3xl p-8 sm:p-14 border border-white/15 shadow-2xl glow-card">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    <div class="lg:col-span-6 space-y-6">
                        <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-yellow-gold/15 text-yellow-gold text-xs font-black border border-yellow-gold/30">
                            MODE 01 • RENTER
                        </div>
                        <h3 class="text-3xl sm:text-4xl font-black text-white font-display">
                            Rent the Perfect Car for Your Next Journey
                        </h3>
                        <p class="text-sm sm:text-base text-slate-300 leading-relaxed">
                            Choose between Hourly and Daily rates. Unlock verified sedans, SUVs, and vans with Bluetooth keyless entry or book with a professional chauffeur.
                        </p>
                        <div class="space-y-3 text-xs sm:text-sm text-slate-300">
                            <div class="flex items-center gap-2.5"><span class="text-yellow-gold font-bold">✓</span> Hourly (from ₱140/hr) and Daily (from ₱1,400/day) options</div>
                            <div class="flex items-center gap-2.5"><span class="text-yellow-gold font-bold">✓</span> 1-Minute Digital ID Verification & Instant Approval</div>
                            <div class="flex items-center gap-2.5"><span class="text-yellow-gold font-bold">✓</span> Full Comprehensive Insurance & 24/7 Roadside Assistance</div>
                        </div>
                        <div class="pt-4 flex flex-wrap gap-4">
                            <a href="{{ route('mobilis.download') }}" data-direct-download="all" class="px-8 py-4 rounded-2xl bg-yellow-gold hover:bg-yellow-amber text-navy-950 font-black text-xs uppercase tracking-wider shadow-xl glow-yellow-sm transition-all flex items-center gap-2">
                                <span>Download App to Rent</span>
                                <span>↓</span>
                            </a>
                        </div>
                    </div>
                    <div class="lg:col-span-6">
                        <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-white/15 group">
                            <img src="https://images.unsplash.com/photo-1590362891991-f776e747a588?auto=format&fit=crop&w=900&q=80" alt="Rent with Mobilis" class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-700">
                            <div class="absolute bottom-4 left-4 right-4 p-4 rounded-xl bg-navy-950/90 backdrop-blur-md border border-white/10 flex items-center justify-between">
                                <div>
                                    <span class="text-xs font-bold text-white block">Honda Civic RS Turbo</span>
                                    <span class="text-[11px] text-yellow-gold">₱280/hr • ₱2,800/day</span>
                                </div>
                                <span class="px-3 py-1 rounded-lg bg-yellow-gold text-navy-950 font-black text-[11px]">Instant Unlock</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SLIDE 1: BE A DRIVER -->
            <div data-role-slide="1" class="glass-card bg-gradient-to-tr from-navy-950 via-navy-900 to-navy-850 rounded-3xl p-8 sm:p-14 border border-white/15 shadow-2xl glow-card hidden">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    <div class="lg:col-span-6 space-y-6">
                        <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-blue-500/15 text-blue-400 text-xs font-black border border-blue-500/30">
                            MODE 02 • DRIVER
                        </div>
                        <h3 class="text-3xl sm:text-4xl font-black text-white font-display">
                            Drive VIPs & Corporate Clients with Great Pay
                        </h3>
                        <p class="text-sm sm:text-base text-slate-300 leading-relaxed">
                            Join our elite chauffeur team. Accept airport transfers, city rentals, and executive dispatches with flexible working hours and daily cashouts.
                        </p>
                        <div class="space-y-3 text-xs sm:text-sm text-slate-300">
                            <div class="flex items-center gap-2.5"><span class="text-blue-400 font-bold">✓</span> Earn ₱2,500 - ₱3,500 daily (₱55,000+ monthly potential)</div>
                            <div class="flex items-center gap-2.5"><span class="text-blue-400 font-bold">✓</span> Instant Daily Cashout to GCash or Bank Account</div>
                            <div class="flex items-center gap-2.5"><span class="text-blue-400 font-bold">✓</span> Full Trip Accident & Medical Insurance Protection</div>
                        </div>
                        <div class="pt-4 flex flex-wrap gap-4">
                            <a href="{{ route('mobilis.download') }}" data-direct-download="all" class="px-8 py-4 rounded-2xl bg-yellow-gold hover:bg-yellow-amber text-navy-950 font-black text-xs uppercase tracking-wider shadow-xl glow-yellow-sm transition-all flex items-center gap-2">
                                <span>Download App to Apply</span>
                                <span>↓</span>
                            </a>
                        </div>
                    </div>
                    <div class="lg:col-span-6">
                        <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-white/15 group">
                            <img src="https://images.unsplash.com/photo-1570125909232-eb263c188f7e?auto=format&fit=crop&w=900&q=80" alt="Driver with Mobilis" class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-700">
                            <div class="absolute bottom-4 left-4 right-4 p-4 rounded-xl bg-navy-950/90 backdrop-blur-md border border-white/10 flex items-center justify-between">
                                <div>
                                    <span class="text-xs font-bold text-white block">HiAce Super Grandia VIP</span>
                                    <span class="text-[11px] text-blue-400">Corporate Chauffeur Dispatch</span>
                                </div>
                                <span class="px-3 py-1 rounded-lg bg-blue-500 text-navy-950 font-black text-[11px]">₱2,500+ / day</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SLIDE 2: BE A PARTNER (LIST YOUR CAR) -->
            <div data-role-slide="2" class="glass-card bg-gradient-to-tr from-navy-950 via-navy-900 to-navy-850 rounded-3xl p-8 sm:p-14 border border-white/15 shadow-2xl glow-card hidden">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    <div class="lg:col-span-6 space-y-6">
                        <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-emerald-500/15 text-emerald-400 text-xs font-black border border-emerald-500/30">
                            MODE 03 • PARTNER HOST (LIST YOUR CAR)
                        </div>
                        <h3 class="text-3xl sm:text-4xl font-black text-white font-display">
                            Turn Your Car into Monthly Passive Income
                        </h3>
                        <p class="text-sm sm:text-base text-slate-300 leading-relaxed">
                            List your car or fleet in the Mobilis App and start earning ₱25k to ₱90k every month. Full commercial insurance coverage and verified renters protect your investment.
                        </p>
                        <div class="space-y-3 text-xs sm:text-sm text-slate-300">
                            <div class="flex items-center gap-2.5"><span class="text-emerald-400 font-bold">✓</span> Earn ₱25,000 - ₱90,000 per car every month</div>
                            <div class="flex items-center gap-2.5"><span class="text-emerald-400 font-bold">✓</span> 100% Commercial Insurance Protection for Hosts</div>
                            <div class="flex items-center gap-2.5"><span class="text-emerald-400 font-bold">✓</span> Live In-App Dashboard to Track Trips & Automated Payouts</div>
                        </div>
                        <div class="pt-4 flex flex-wrap gap-4">
                            <a href="{{ route('mobilis.download') }}" data-direct-download="all" class="px-8 py-4 rounded-2xl bg-yellow-gold hover:bg-yellow-amber text-navy-950 font-black text-xs uppercase tracking-wider shadow-xl glow-yellow-sm transition-all flex items-center gap-2">
                                <span>Download App to List Car</span>
                                <span>↓</span>
                            </a>
                        </div>
                    </div>
                    <div class="lg:col-span-6">
                        <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-white/15 group">
                            <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=900&q=80" alt="Host with Mobilis" class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-700">
                            <div class="absolute bottom-4 left-4 right-4 p-4 rounded-xl bg-navy-950/90 backdrop-blur-md border border-white/10 flex items-center justify-between">
                                <div>
                                    <span class="text-xs font-bold text-white block">Ford Everest 4x4 Host Listing</span>
                                    <span class="text-[11px] text-emerald-400">Net Monthly Earnings: ₱48,000</span>
                                </div>
                                <span class="px-3 py-1 rounded-lg bg-emerald-500 text-navy-950 font-black text-[11px]">Fully Insured</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- EXACTLY 3 DOTS INDICATOR -->
            <div class="flex items-center justify-center gap-2 mt-8">
                <button type="button" data-slide-dot="0" class="h-2.5 w-8 rounded-full bg-yellow-gold transition-all"></button>
                <button type="button" data-slide-dot="1" class="h-2.5 w-2.5 rounded-full bg-slate-700 transition-all"></button>
                <button type="button" data-slide-dot="2" class="h-2.5 w-2.5 rounded-full bg-slate-700 transition-all"></button>
            </div>

        </div>

    </div>
</section>


<!-- ======================================================== -->
<!-- 3. SERVICE PARTNERS & TRUST BADGES -->
<!-- ======================================================== -->
<section class="py-20 bg-navy-950 border-b border-white/10 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-2xl mx-auto mb-14 space-y-2">
            <span class="text-xs uppercase font-extrabold tracking-widest text-yellow-gold">OFFICIAL SERVICE PARTNERS</span>
            <h2 class="text-2xl sm:text-3xl font-black text-white font-display">
                Backed by the Country's Leading Institutions
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <div class="glass-card bg-navy-900 rounded-3xl p-6 border border-white/10 space-y-3 glow-card glow-card-hover">
                <div class="w-12 h-12 rounded-xl bg-yellow-gold/15 text-yellow-gold flex items-center justify-center text-2xl border border-yellow-gold/30">
                    🛡️
                </div>
                <h3 class="text-base font-bold text-white">Commercial Insurance</h3>
                <p class="text-xs text-slate-300 leading-relaxed">
                    Partnered with premier insurance underwriters ensuring full comprehensive vehicle protection for every rental journey.
                </p>
            </div>

            <div class="glass-card bg-navy-900 rounded-3xl p-6 border border-white/10 space-y-3 glow-card glow-card-hover">
                <div class="w-12 h-12 rounded-xl bg-blue-500/15 text-blue-400 flex items-center justify-center text-2xl border border-blue-500/30">
                    🚨
                </div>
                <h3 class="text-base font-bold text-white">24/7 Roadside Assistance</h3>
                <p class="text-xs text-slate-300 leading-relaxed">
                    Nationwide towing, battery jumpstarts, flat tire support, and emergency dispatch ready 24/7 via the in-app SOS button.
                </p>
            </div>

            <div class="glass-card bg-navy-900 rounded-3xl p-6 border border-white/10 space-y-3 glow-card glow-card-hover">
                <div class="w-12 h-12 rounded-xl bg-emerald-500/15 text-emerald-400 flex items-center justify-center text-2xl border border-emerald-500/30">
                    🔐
                </div>
                <h3 class="text-base font-bold text-white">Digital ID Verification</h3>
                <p class="text-xs text-slate-300 leading-relaxed">
                    Automated biometric and government ID screening protecting hosts and drivers from unauthorized users.
                </p>
            </div>

            <div class="glass-card bg-navy-900 rounded-3xl p-6 border border-purple-500/15 space-y-3 glow-card glow-card-hover">
                <div class="w-12 h-12 rounded-xl bg-purple-500/15 text-purple-400 flex items-center justify-center text-2xl border border-purple-500/30">
                    ⚡
                </div>
                <h3 class="text-base font-bold text-white">Instant E-Wallet Payouts</h3>
                <p class="text-xs text-slate-300 leading-relaxed">
                    Seamless automated disbursements to GCash, Maya, and all major Philippine banks for drivers and vehicle hosts.
                </p>
            </div>

        </div>

    </div>
</section>


<!-- ======================================================== -->
<!-- 4. CAR FLEET SHOWROOM WITH HORIZONTAL CAROUSEL CONTROLS -->
<!-- ======================================================== -->
<section id="fleet" class="py-28 lg:py-36 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex flex-col lg:flex-row lg:items-end justify-between mb-12 gap-8">
            <div class="space-y-3">
                <span class="px-4 py-1.5 rounded-full bg-yellow-gold/15 text-yellow-gold text-xs font-black border border-yellow-gold/30 uppercase tracking-widest">
                    MOBILIS VERIFIED VEHICLES
                </span>
                <h2 class="text-3xl sm:text-5xl font-black text-white font-display">
                    Explore Our Car Rental Fleet
                </h2>
                <p class="text-slate-300 text-sm sm:text-base max-w-2xl leading-relaxed">
                    Hourly and daily rental rates. Filter by category or scroll horizontally to find your vehicle.
                </p>
            </div>

            <!-- Controls: Filter Tabs + Left/Right Arrow Buttons -->
            <div class="flex flex-wrap items-center gap-4">
                <div class="flex flex-wrap gap-2 p-1.5 rounded-2xl bg-navy-900 border border-white/10 shadow-xl">
                    <button type="button" data-fleet-filter="all" class="px-4 py-2 rounded-xl text-xs font-black bg-yellow-gold text-navy-950 glow-yellow-sm transition-all">
                        All
                    </button>
                    <button type="button" data-fleet-filter="sedan" class="px-4 py-2 rounded-xl text-xs font-bold bg-navy-800 text-slate-300 hover:text-white transition-all">
                        Sedan
                    </button>
                    <button type="button" data-fleet-filter="suv" class="px-4 py-2 rounded-xl text-xs font-bold bg-navy-800 text-slate-300 hover:text-white transition-all">
                        SUV
                    </button>
                    <button type="button" data-fleet-filter="van" class="px-4 py-2 rounded-xl text-xs font-bold bg-navy-800 text-slate-300 hover:text-white transition-all">
                        Van
                    </button>
                    <button type="button" data-fleet-filter="luxury" class="px-4 py-2 rounded-xl text-xs font-bold bg-navy-800 text-slate-300 hover:text-white transition-all">
                        Luxury
                    </button>
                </div>

                <!-- Carousel Navigation Arrows -->
                <div class="flex items-center gap-2">
                    <button type="button" id="fleet-prev-btn" class="w-11 h-11 rounded-xl bg-navy-900 hover:bg-yellow-gold text-white hover:text-navy-950 border border-white/10 hover:border-yellow-gold shadow-lg flex items-center justify-center transition-all">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </button>
                    <button type="button" id="fleet-next-btn" class="w-11 h-11 rounded-xl bg-navy-900 hover:bg-yellow-gold text-white hover:text-navy-950 border border-white/10 hover:border-yellow-gold shadow-lg flex items-center justify-center transition-all">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- HORIZONTAL SCROLLING FLEET TRACK -->
        <div id="fleet-track" class="flex gap-8 overflow-x-auto pb-8 pt-2 no-scrollbar scroll-smooth">
            @foreach($fleet as $car)
                @php
                    $carImages = $car['images'] ?? [$car['image']];
                    $imageCount = count($carImages);
                @endphp
                <div data-car-category="{{ strtolower($car['category']) }}" data-car-card-id="{{ $car['id'] }}" class="flex-shrink-0 w-[340px] sm:w-[380px] glass-card bg-navy-900 rounded-3xl overflow-hidden border border-white/10 hover:border-yellow-gold/50 transition-all duration-300 flex flex-col justify-between group glow-card glow-card-hover">
                    
                    <div>
                        <!-- Car Image Carousel Container -->
                        <div class="relative h-60 w-full overflow-hidden bg-navy-950 select-none group/car rounded-t-3xl" data-car-carousel>
                            
                            <!-- Slides Track -->
                            <div class="w-full h-full relative cursor-pointer" data-open-gallery="{{ $car['id'] }}" title="Click to view full photo gallery">
                                @foreach($carImages as $idx => $img)
                                    <div data-car-slide="{{ $idx }}" class="absolute inset-0 w-full h-full transition-opacity duration-400 ease-in-out {{ $idx === 0 ? 'opacity-100 z-10' : 'opacity-0 z-0 pointer-events-none' }}">
                                        <img src="{{ $img }}" alt="{{ $car['name'] }} - Photo {{ $idx + 1 }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy">
                                    </div>
                                @endforeach
                            </div>

                            <!-- Top Badges Row -->
                            <div class="absolute top-3.5 left-3.5 z-20 pointer-events-none">
                                <span class="px-3 py-1 rounded-full bg-yellow-gold text-navy-950 text-[11px] font-black uppercase tracking-wider shadow-lg">
                                    {{ $car['badge'] }}
                                </span>
                            </div>

                            <div class="absolute top-3.5 right-3.5 z-20 pointer-events-none">
                                <span class="px-3 py-1 rounded-full bg-navy-950/85 text-white text-xs font-bold backdrop-blur-md border border-white/15 flex items-center gap-1.5 shadow-md">
                                    <span class="text-yellow-gold">★</span> {{ $car['rating'] }}
                                </span>
                            </div>

                            <!-- Carousel Left & Right Arrow Buttons (Shown when > 1 image) -->
                            @if($imageCount > 1)
                                <button type="button" data-car-carousel-prev class="absolute left-2.5 top-1/2 -translate-y-1/2 z-20 w-8 h-8 rounded-full bg-navy-950/85 hover:bg-yellow-gold text-white hover:text-navy-950 border border-white/20 hover:border-yellow-gold flex items-center justify-center transition-all backdrop-blur-sm shadow-xl opacity-0 group-hover/car:opacity-100 focus:opacity-100 hover:scale-110" aria-label="Previous photo">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
                                    </svg>
                                </button>
                                <button type="button" data-car-carousel-next class="absolute right-2.5 top-1/2 -translate-y-1/2 z-20 w-8 h-8 rounded-full bg-navy-950/85 hover:bg-yellow-gold text-white hover:text-navy-950 border border-white/20 hover:border-yellow-gold flex items-center justify-center transition-all backdrop-blur-sm shadow-xl opacity-0 group-hover/car:opacity-100 focus:opacity-100 hover:scale-110" aria-label="Next photo">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </button>

                                <!-- Bottom Carousel Indicator & Photo Count Pill -->
                                <div class="absolute bottom-2.5 inset-x-3 z-20 flex items-center justify-between pointer-events-none">
                                    <!-- Dots -->
                                    <div class="flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-navy-950/75 backdrop-blur-md border border-white/10 pointer-events-auto">
                                        @foreach($carImages as $idx => $img)
                                            <button type="button" data-car-dot="{{ $idx }}" class="h-1.5 rounded-full transition-all duration-300 {{ $idx === 0 ? 'w-4 bg-yellow-gold' : 'w-1.5 bg-white/50 hover:bg-white' }}" aria-label="Go to photo {{ $idx + 1 }}"></button>
                                        @endforeach
                                    </div>

                                    <!-- Photo Counter -->
                                    <span class="px-2.5 py-1 rounded-full bg-navy-950/75 text-[10px] font-bold text-slate-200 backdrop-blur-md border border-white/10 flex items-center gap-1">
                                        <span>📷</span> <span data-car-counter>1/{{ $imageCount }}</span>
                                    </span>
                                </div>
                            @endif

                        </div>

                        <!-- Car Specs Details Matching Design -->
                        <div class="p-6 space-y-4">
                            <div>
                                <span class="text-[11px] font-extrabold uppercase tracking-widest text-yellow-gold">{{ $car['category'] }}</span>
                                <h3 class="text-xl sm:text-2xl font-black text-yellow-gold font-display leading-tight group-hover:text-yellow-amber transition-colors mt-0.5">
                                    {{ $car['name'] }}
                                </h3>
                            </div>

                            <!-- 3-Icon Specs Row -->
                            <div class="grid grid-cols-3 gap-2 py-3 border-y border-white/10 text-xs text-slate-200">
                                <div class="flex items-center gap-1.5">
                                    <span class="text-yellow-gold">👥</span>
                                    <span class="font-medium">{{ $car['seats'] }}</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <span class="text-yellow-gold">⚙️</span>
                                    <span class="font-medium">{{ $car['transmission'] }}</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <span class="text-yellow-gold">⛽</span>
                                    <span class="font-medium">{{ $car['fuel'] }}</span>
                                </div>
                            </div>

                            <!-- Feature Tags / Pills -->
                            <div class="flex flex-wrap gap-1.5 pt-1">
                                @foreach($car['features'] as $feat)
                                    <span class="text-[11px] px-2.5 py-1 rounded-lg bg-navy-950 text-slate-300 border border-white/10 font-medium hover:border-yellow-gold/30 transition-colors">
                                        {{ $feat }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Price Box with BOTH HOURLY & DAILY RATES -->
                    <div class="p-6 pt-0 space-y-4">
                        <div class="p-4 rounded-2xl bg-navy-950/90 border border-white/10 flex items-center justify-between">
                            <div>
                                <span class="text-[11px] text-slate-400 block font-medium">Hourly Rate</span>
                                <span class="text-lg font-black text-white font-display">₱{{ number_format($car['hourly_rate']) }}</span>
                                <span class="text-[11px] text-slate-400">/hr</span>
                            </div>
                            <div class="w-px h-8 bg-white/10"></div>
                            <div class="text-right">
                                <span class="text-[11px] text-yellow-gold block font-bold">Daily Rate</span>
                                <span class="text-xl font-black text-yellow-gold font-display">₱{{ number_format($car['daily_rate']) }}</span>
                                <span class="text-[11px] text-slate-400">/day</span>
                            </div>
                        </div>

                        <!-- Direct App Booking Trigger -->
                        <button type="button" data-open-modal="app-download-notice-modal" class="w-full py-4 rounded-2xl bg-yellow-gold hover:bg-yellow-amber text-navy-950 font-black text-xs uppercase tracking-wider flex items-center justify-center gap-2 shadow-xl glow-yellow-sm transition-all transform hover:-translate-y-0.5">
                            <span>Book in Mobilis App</span>
                            <span>↓</span>
                        </button>
                    </div>

                </div>
            @endforeach
        </div>

    </div>
</section>


<!-- ======================================================== -->
<!-- 5. CUSTOMER & PARTNER TESTIMONIALS SLIDER -->
<!-- ======================================================== -->
<section class="py-28 lg:py-36 bg-navy-900/60 border-y border-white/10 relative">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
            <span class="px-4 py-1.5 rounded-full bg-yellow-gold/15 text-yellow-gold text-xs font-black border border-yellow-gold/30 uppercase tracking-widest">
                VERIFIED USER EXPERIENCES
            </span>
            <h2 class="text-3xl sm:text-5xl font-black text-white font-display">
                What Our Community Says
            </h2>
            <p class="text-slate-300 text-sm sm:text-base">
                Real feedback from renters, accredited drivers, and vehicle partner hosts.
            </p>
        </div>

        <!-- Testimonial Slider Frame with Prev/Next Controls -->
        <div class="relative">
            
            <button type="button" id="testimonial-prev" class="absolute -left-4 sm:-left-7 top-1/2 -translate-y-1/2 z-20 w-12 h-12 rounded-2xl bg-navy-950 hover:bg-yellow-gold text-white hover:text-navy-950 border border-white/20 hover:border-yellow-gold shadow-2xl flex items-center justify-center transition-all">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>

            <button type="button" id="testimonial-next" class="absolute -right-4 sm:-right-7 top-1/2 -translate-y-1/2 z-20 w-12 h-12 rounded-2xl bg-navy-950 hover:bg-yellow-gold text-white hover:text-navy-950 border border-white/20 hover:border-yellow-gold shadow-2xl flex items-center justify-center transition-all">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>

            <!-- Testimonial Slide 1 (Renter) -->
            <div data-testimonial-slide="0" class="glass-card bg-navy-950/90 rounded-3xl p-8 sm:p-12 border border-yellow-gold/30 shadow-2xl text-center space-y-6">
                <div class="flex justify-center text-yellow-gold text-xl gap-1">
                    ★★★★★
                </div>
                <blockquote class="text-base sm:text-xl text-slate-200 font-medium leading-relaxed max-w-3xl mx-auto italic">
                    "Mobilis has a super quick verification process and my profile got approved in less than 2 minutes! We rented a Toyota Vios for an out-of-town Tagaytay road trip. Keyless Bluetooth unlock worked flawlessly. Highly recommended!"
                </blockquote>
                <div class="flex items-center justify-center gap-4 pt-2">
                    <div class="w-14 h-14 rounded-full bg-yellow-gold/20 border-2 border-yellow-gold text-yellow-gold font-black flex items-center justify-center text-xl">
                        AE
                    </div>
                    <div class="text-left">
                        <h4 class="text-base font-bold text-white">Angela Evans</h4>
                        <span class="text-xs text-yellow-gold font-semibold">Verified Renter • BGC Manila</span>
                    </div>
                </div>
            </div>

            <!-- Testimonial Slide 2 (Driver) -->
            <div data-testimonial-slide="1" class="glass-card bg-navy-950/90 rounded-3xl p-8 sm:p-12 border border-blue-500/30 shadow-2xl text-center space-y-6 hidden">
                <div class="flex justify-center text-yellow-gold text-xl gap-1">
                    ★★★★★
                </div>
                <blockquote class="text-base sm:text-xl text-slate-200 font-medium leading-relaxed max-w-3xl mx-auto italic">
                    "As a full-time chauffeur, Mobilis transformed my daily income. With VIP airport transfers and corporate long-distance trips, I easily take home ₱2,500+ daily with instant bank cashouts every night."
                </blockquote>
                <div class="flex items-center justify-center gap-4 pt-2">
                    <div class="w-14 h-14 rounded-full bg-blue-500/20 border-2 border-blue-400 text-blue-400 font-black flex items-center justify-center text-xl">
                        JV
                    </div>
                    <div class="text-left">
                        <h4 class="text-base font-bold text-white">Jubert Valmores</h4>
                        <span class="text-xs text-blue-400 font-semibold">Accredited Chauffeur Driver • Metro Manila</span>
                    </div>
                </div>
            </div>

            <!-- Testimonial Slide 3 (Host) -->
            <div data-testimonial-slide="2" class="glass-card bg-navy-950/90 rounded-3xl p-8 sm:p-12 border border-emerald-500/30 shadow-2xl text-center space-y-6 hidden">
                <div class="flex justify-center text-yellow-gold text-xl gap-1">
                    ★★★★★
                </div>
                <blockquote class="text-base sm:text-xl text-slate-200 font-medium leading-relaxed max-w-3xl mx-auto italic">
                    "I listed my Ford Everest Titanium on Mobilis Partner Mode while I work from home. I made ₱48,000 net last month alone! The commercial insurance coverage gives me complete peace of mind."
                </blockquote>
                <div class="flex items-center justify-center gap-4 pt-2">
                    <div class="w-14 h-14 rounded-full bg-emerald-500/20 border-2 border-emerald-400 text-emerald-400 font-black flex items-center justify-center text-xl">
                        KT
                    </div>
                    <div class="text-left">
                        <h4 class="text-base font-bold text-white">Kim Turingan</h4>
                        <span class="text-xs text-emerald-400 font-semibold">Car Partner Host • Cebu City</span>
                    </div>
                </div>
            </div>

            <!-- Testimonial Dots Indicator -->
            <div class="flex items-center justify-center gap-2 mt-8">
                <button type="button" data-testimonial-dot="0" class="h-2.5 w-8 rounded-full bg-yellow-gold transition-all"></button>
                <button type="button" data-testimonial-dot="1" class="h-2.5 w-2.5 rounded-full bg-slate-700 transition-all"></button>
                <button type="button" data-testimonial-dot="2" class="h-2.5 w-2.5 rounded-full bg-slate-700 transition-all"></button>
            </div>

        </div>

    </div>
</section>


<!-- ======================================================== -->
<!-- 6. LIVE 3-WAY ESTIMATOR CALCULATOR -->
<!-- ======================================================== -->
<section id="calculator" class="py-28 lg:py-36 relative">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-14 space-y-4">
            <span class="px-4 py-1.5 rounded-full bg-yellow-gold/15 text-yellow-gold text-xs font-black border border-yellow-gold/30 uppercase tracking-widest">
                MOBILIS PRICING & EARNINGS ESTIMATOR
            </span>
            <h2 class="text-3xl sm:text-5xl font-black text-white font-display">
                Estimate Rental Rates, Driver Salary & Host Earnings
            </h2>
            <p class="text-slate-300 text-sm sm:text-base">
                Calculate estimated trip fees, chauffeur take-home earnings, or vehicle host payouts in real time.
            </p>
        </div>

        <div class="glass-card bg-navy-900/95 rounded-3xl p-8 sm:p-12 border border-white/15 shadow-2xl glow-card">
            
            <!-- 3-Way Tabs -->
            <div class="flex flex-wrap rounded-2xl bg-navy-950 p-2 mb-10 border border-white/10 gap-1.5">
                <button type="button" data-calc-tab="renter" class="flex-1 py-3.5 px-3 rounded-xl text-xs sm:text-sm font-black bg-yellow-gold text-navy-950 shadow-md transition-all flex items-center justify-center gap-2">
                    <span>🔑</span>
                    <span>For Renters</span>
                </button>
                <button type="button" data-calc-tab="driver" class="flex-1 py-3.5 px-3 rounded-xl text-xs sm:text-sm font-bold text-slate-400 hover:text-white transition-all flex items-center justify-center gap-2">
                    <span>🧑‍✈️</span>
                    <span>Driver Salary</span>
                </button>
                <button type="button" data-calc-tab="host" class="flex-1 py-3.5 px-3 rounded-xl text-xs sm:text-sm font-bold text-slate-400 hover:text-white transition-all flex items-center justify-center gap-2">
                    <span>🤝</span>
                    <span>For Car Hosts</span>
                </button>
            </div>

            <!-- 1. RENTER CALCULATOR VIEW -->
            <div data-calc-view="renter" class="space-y-8">
                
                <div class="flex items-center justify-between p-3 rounded-2xl bg-navy-950 border border-white/10">
                    <span class="text-xs font-bold text-slate-300 uppercase tracking-wider pl-2">Rental Pricing Type:</span>
                    <div class="flex items-center gap-1.5 bg-navy-900 p-1 rounded-xl border border-white/5">
                        <button type="button" data-renter-mode-tab="hourly" class="px-4 py-2 rounded-lg text-xs font-bold text-slate-400 hover:text-white transition-all">
                            ⏱️ Per Hour
                        </button>
                        <button type="button" data-renter-mode-tab="daily" class="px-4 py-2 rounded-lg text-xs font-black bg-yellow-gold text-navy-950 transition-all">
                            📅 Per Day
                        </button>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                    <div>
                        <label class="block text-xs font-bold text-slate-300 uppercase mb-3">SELECT VEHICLE CATEGORY:</label>
                        <select id="calc-renter-car" class="w-full px-5 py-4 rounded-2xl bg-navy-950 border border-slate-700 text-white text-sm focus:border-yellow-gold focus:outline-none">
                            <option value="compact-1" data-hourly="140" data-daily="1400">Toyota Wigo (₱140/hr • ₱1,400/day)</option>
                            <option value="sedan-1" data-hourly="180" data-daily="1800" selected>Toyota Vios 2025 (Uno) (₱180/hr • ₱1,800/day)</option>
                            <option value="sedan-2" data-hourly="280" data-daily="2800">Honda Civic RS (₱280/hr • ₱2,800/day)</option>
                            <option value="suv-1" data-hourly="380" data-daily="3800">Toyota Fortuner (₱380/hr • ₱3,800/day)</option>
                            <option value="suv-2" data-hourly="420" data-daily="4200">Ford Everest 4x4 (₱420/hr • ₱4,200/day)</option>
                            <option value="van-1" data-hourly="480" data-daily="4800">Toyota HiAce Grandia (₱480/hr • ₱4,800/day)</option>
                            <option value="luxury-1" data-hourly="750" data-daily="7500">Mercedes-Benz C-Class (₱750/hr • ₱7,500/day)</option>
                        </select>
                    </div>

                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <label id="calc-renter-duration-label" class="text-xs font-bold text-slate-300 uppercase">RENTAL DURATION (DAYS):</label>
                            <span id="calc-renter-duration-val" class="text-xs font-black text-yellow-gold">3 Days</span>
                        </div>
                        <input type="range" id="calc-renter-duration" min="1" max="30" value="3" class="w-full h-2.5 bg-navy-950 rounded-lg appearance-none cursor-pointer accent-yellow-gold">
                        <div id="calc-renter-ticks" class="flex justify-between text-xs text-slate-400 mt-2">
                            <span>1 day</span>
                            <span>7 days (15% off)</span>
                            <span>14+ days (20% off)</span>
                            <span>30 days</span>
                        </div>
                    </div>
                </div>

                <div class="p-5 rounded-2xl bg-navy-950/90 border border-white/10 flex items-center justify-between">
                    <div>
                        <span class="text-sm font-bold text-white block">Include Professional Chauffeur?</span>
                        <span id="calc-renter-driver-fee-text" class="text-xs text-slate-400">Chauffeur fee: +₱800 per day</span>
                    </div>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" id="calc-renter-driver" class="sr-only peer">
                        <div class="w-12 h-6 bg-navy-800 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-yellow-gold"></div>
                    </label>
                </div>

                <!-- Result Box -->
                <div class="p-8 rounded-3xl bg-gradient-to-r from-navy-950 via-navy-900 to-navy-950 border border-yellow-gold/40 flex flex-col sm:flex-row items-center justify-between gap-6 shadow-xl">
                    <div class="space-y-1">
                        <span class="text-xs text-slate-400 uppercase font-bold tracking-wider">ESTIMATED TOTAL RENTAL COST</span>
                        <div id="calc-renter-total" class="text-4xl sm:text-5xl font-black text-yellow-gold font-display">₱5,400</div>
                        <span id="calc-renter-discount" class="text-xs sm:text-sm text-emerald-400 font-semibold">Save up to 20% on rentals 7+ days in the app!</span>
                    </div>
                    <div class="flex flex-col sm:items-end w-full sm:w-auto">
                        <span id="calc-renter-subrate" class="text-sm font-bold text-white mb-2">₱1,800 / day</span>
                        <a href="{{ route('mobilis.download') }}" data-direct-download="all" class="px-7 py-4 rounded-2xl bg-yellow-gold hover:bg-yellow-amber text-navy-950 font-black text-xs uppercase tracking-wider shadow-xl glow-yellow-sm transition-all flex items-center justify-center gap-2">
                            <span>DOWNLOAD MOBILIS APP TO BOOK</span>
                            <span>↓</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 2. DRIVER SALARY ESTIMATOR VIEW -->
            <div data-calc-view="driver" class="space-y-8 hidden">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <label class="text-xs font-bold text-slate-300 uppercase">DRIVING HOURS PER DAY:</label>
                            <span id="calc-driver-hours-val" class="text-xs font-black text-yellow-gold">8 Hours / Day</span>
                        </div>
                        <input type="range" id="calc-driver-hours" min="4" max="14" value="8" class="w-full h-2.5 bg-navy-950 rounded-lg appearance-none cursor-pointer accent-yellow-gold">
                        <div class="flex justify-between text-xs text-slate-400 mt-2">
                            <span>4 hrs (Part-time)</span>
                            <span>8 hrs (Standard)</span>
                            <span>12+ hrs (Overtime)</span>
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <label class="text-xs font-bold text-slate-300 uppercase">WORKING DAYS PER MONTH:</label>
                            <span id="calc-driver-days-val" class="text-xs font-black text-yellow-gold">22 Days / Month</span>
                        </div>
                        <input type="range" id="calc-driver-days" min="10" max="28" value="22" class="w-full h-2.5 bg-navy-950 rounded-lg appearance-none cursor-pointer accent-yellow-gold">
                        <div class="flex justify-between text-xs text-slate-400 mt-2">
                            <span>10 days</span>
                            <span>20 days</span>
                            <span>22 days (5 days/wk)</span>
                            <span>26 days</span>
                        </div>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-300 uppercase mb-3">CHAUFFEUR RENTAL TRIP TIER:</label>
                    <select id="calc-driver-trip-type" class="w-full px-5 py-4 rounded-2xl bg-navy-950 border border-slate-700 text-white text-sm focus:border-yellow-gold focus:outline-none">
                        <option value="200">Standard City Rental Chauffeur (~₱200/hr + tips)</option>
                        <option value="250" selected>Airport VIP Transfer & Corporate Trips (~₱250/hr + tips)</option>
                        <option value="320">Provincial / Long Distance Roadtrip (~₱320/hr + allowance)</option>
                    </select>
                </div>

                <!-- Driver Salary Result Box -->
                <div class="p-8 rounded-3xl bg-gradient-to-r from-navy-950 via-navy-900 to-navy-950 border border-blue-500/40 flex flex-col sm:flex-row items-center justify-between gap-6 shadow-xl">
                    <div class="space-y-1">
                        <span class="text-xs text-slate-400 uppercase font-bold tracking-wider">ESTIMATED MONTHLY TAKE-HOME PAY</span>
                        <div id="calc-driver-monthly-salary" class="text-4xl sm:text-5xl font-black text-blue-400 font-display">₱51,040</div>
                        <div class="flex items-center gap-4 pt-1">
                            <span class="text-xs text-slate-300">Daily Average: <strong id="calc-driver-daily-salary" class="text-white">₱2,320 / day</strong></span>
                            <span class="text-slate-500">•</span>
                            <span id="calc-driver-annual-salary" class="text-xs text-emerald-400 font-semibold">₱612,480 / year</span>
                        </div>
                    </div>
                    <div class="flex flex-col sm:items-end w-full sm:w-auto">
                        <a href="{{ route('mobilis.download') }}" data-direct-download="all" class="px-7 py-4 rounded-2xl bg-yellow-gold hover:bg-yellow-amber text-navy-950 font-black text-xs uppercase tracking-wider shadow-xl glow-yellow-sm transition-all flex items-center justify-center gap-2">
                            <span>DOWNLOAD MOBILIS APP TO APPLY</span>
                            <span>↓</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 3. PARTNER HOST ESTIMATOR VIEW -->
            <div data-calc-view="host" class="space-y-8 hidden">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                    <div>
                        <label class="block text-xs font-bold text-slate-300 uppercase mb-3">VEHICLE CATEGORY:</label>
                        <select id="calc-host-car" class="w-full px-5 py-4 rounded-2xl bg-navy-950 border border-slate-700 text-white text-sm focus:border-yellow-gold focus:outline-none">
                            <option value="1500">Hatchback (Wigo / Mirage - ~₱1,500/day)</option>
                            <option value="2000" selected>Sedan (Vios / City / Almera - ~₱2,000/day)</option>
                            <option value="3000">Compact Crossover / MPV (BR-V / Xpander - ~₱3,000/day)</option>
                            <option value="4000">Midsize 7-Seat SUV (Fortuner / Everest - ~₱4,000/day)</option>
                            <option value="5000">Passenger Van (HiAce / Staria - ~₱5,000/day)</option>
                            <option value="8000">Luxury Vehicle (Alphard / Mercedes - ~₱8,000/day)</option>
                        </select>
                    </div>

                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <label class="text-xs font-bold text-slate-300 uppercase">ESTIMATED BOOKED DAYS / MONTH:</label>
                            <span id="calc-host-days-val" class="text-xs font-black text-yellow-gold">18 Days (60% Utilization)</span>
                        </div>
                        <input type="range" id="calc-host-days" min="5" max="28" value="18" class="w-full h-2.5 bg-navy-950 rounded-lg appearance-none cursor-pointer accent-yellow-gold">
                        <div class="flex justify-between text-xs text-slate-400 mt-2">
                            <span>5 days</span>
                            <span>15 days (50%)</span>
                            <span>22 days (73%)</span>
                            <span>28 days</span>
                        </div>
                    </div>
                </div>

                <!-- Result Box -->
                <div class="p-8 rounded-3xl bg-gradient-to-r from-navy-950 via-navy-900 to-navy-950 border border-emerald-500/40 flex flex-col sm:flex-row items-center justify-between gap-6 shadow-xl">
                    <div class="space-y-1">
                        <span class="text-xs text-slate-400 uppercase font-bold tracking-wider">ESTIMATED NET MONTHLY HOST EARNINGS</span>
                        <div id="calc-host-earnings" class="text-4xl sm:text-5xl font-black text-emerald-400 font-display">₱27,000</div>
                        <span id="calc-host-annual" class="text-xs sm:text-sm text-slate-300 font-medium">₱324,000 / year (est.)</span>
                    </div>
                    <div class="flex flex-col sm:items-end w-full sm:w-auto">
                        <a href="{{ route('mobilis.download') }}" data-direct-download="all" class="px-8 py-4 rounded-2xl bg-yellow-gold hover:bg-yellow-amber text-navy-950 font-black text-xs uppercase tracking-wider shadow-xl glow-yellow-sm transition-all flex items-center justify-center gap-2">
                            <span>DOWNLOAD MOBILIS APP TO HOST</span>
                            <span>↓</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>


<!-- ======================================================== -->
<!-- 7. FREQUENTLY ASKED QUESTIONS (FAQ) -->
<!-- ======================================================== -->
<section id="faq" class="py-28 lg:py-36 bg-navy-900/60 border-t border-white/10 relative">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-16 space-y-4">
            <span class="px-4 py-1.5 rounded-full bg-yellow-gold/15 text-yellow-gold text-xs font-black border border-yellow-gold/30 uppercase tracking-widest">
                SUPPORT & INQUIRIES
            </span>
            <h2 class="text-3xl sm:text-5xl font-black text-white font-display">
                Frequently Asked Questions (FAQ)
            </h2>
            <p class="text-slate-300 text-sm sm:text-base">
                Everything you need to know about the Mobilis mobile app for hourly/daily rentals, driver accreditation, and vehicle hosting.
            </p>

            <div class="flex flex-wrap justify-center gap-2.5 pt-4">
                <button type="button" data-faq-filter="all" class="px-5 py-2 rounded-full text-xs font-black bg-yellow-gold text-navy-950 transition-all">
                    All
                </button>
                <button type="button" data-faq-filter="renter" class="px-5 py-2 rounded-full text-xs font-bold bg-navy-800 text-slate-300 hover:text-white transition-all">
                    Renter
                </button>
                <button type="button" data-faq-filter="driver" class="px-5 py-2 rounded-full text-xs font-bold bg-navy-800 text-slate-300 hover:text-white transition-all">
                    Driver
                </button>
                <button type="button" data-faq-filter="partner" class="px-5 py-2 rounded-full text-xs font-bold bg-navy-800 text-slate-300 hover:text-white transition-all">
                    Partner Host
                </button>
            </div>
        </div>

        <div class="space-y-5">
            <!-- FAQ 1 -->
            <div data-faq-cat="renter" class="faq-item glass-card bg-navy-900 rounded-3xl border border-white/10 overflow-hidden transition-all shadow-md">
                <button type="button" class="faq-header w-full p-6 sm:p-7 text-left flex items-center justify-between gap-6">
                    <span class="text-base sm:text-lg font-bold text-white">
                        Is there an option to rent by the hour (hourly rental)?
                    </span>
                    <span class="faq-icon w-9 h-9 rounded-full bg-navy-950 flex items-center justify-center text-yellow-gold flex-shrink-0 transition-transform duration-300 text-sm">
                        ↓
                    </span>
                </button>
                <div class="faq-content px-6 sm:px-7 pb-6 sm:pb-7 pt-2 text-xs sm:text-sm text-slate-300 leading-relaxed border-t border-white/5 hidden">
                    Yes! Inside the Mobilis App, you can rent vehicles by the hour (from ₱140/hour for compact sedans) or by the day (from ₱1,400/day). This is ideal for short errands, airport drop-offs, or business meetings.
                </div>
            </div>

            <!-- FAQ 2 -->
            <div data-faq-cat="driver" class="faq-item glass-card bg-navy-900 rounded-3xl border border-white/10 overflow-hidden transition-all shadow-md">
                <button type="button" class="faq-header w-full p-6 sm:p-7 text-left flex items-center justify-between gap-6">
                    <span class="text-base sm:text-lg font-bold text-white">
                        How much do accredited Mobilis Drivers earn?
                    </span>
                    <span class="faq-icon w-9 h-9 rounded-full bg-navy-950 flex items-center justify-center text-yellow-gold flex-shrink-0 transition-transform duration-300 text-sm">
                        ↓
                    </span>
                </button>
                <div class="faq-content px-6 sm:px-7 pb-6 sm:pb-7 pt-2 text-xs sm:text-sm text-slate-300 leading-relaxed border-t border-white/5 hidden">
                    Accredited chauffeurs earn between ₱2,000 and ₱3,500 daily or approximately ₱45,000 to ₱65,000 monthly based on driving hours, trip completion bonuses, and passenger tips.
                </div>
            </div>

            <!-- FAQ 3 -->
            <div data-faq-cat="partner" class="faq-item glass-card bg-navy-900 rounded-3xl border border-white/10 overflow-hidden transition-all shadow-md">
                <button type="button" class="faq-header w-full p-6 sm:p-7 text-left flex items-center justify-between gap-6">
                    <span class="text-base sm:text-lg font-bold text-white">
                        How do I list my vehicle as a Partner Host?
                    </span>
                    <span class="faq-icon w-9 h-9 rounded-full bg-navy-950 flex items-center justify-center text-yellow-gold flex-shrink-0 transition-transform duration-300 text-sm">
                        ↓
                    </span>
                </button>
                <div class="faq-content px-6 sm:px-7 pb-6 sm:pb-7 pt-2 text-xs sm:text-sm text-slate-300 leading-relaxed border-t border-white/5 hidden">
                    Inside the Mobilis App, toggle to "Partner Host Mode" and upload your vehicle's OR/CR and photos. Once approved, your car is activated on the platform with commercial insurance coverage and automatic monthly payout schedules.
                </div>
            </div>
        </div>

    </div>
</section>


<!-- ======================================================== -->
<!-- 8. FINAL CALL TO ACTION HERO -->
<!-- ======================================================== -->
<section class="py-28 lg:py-36 relative overflow-hidden bg-gradient-to-b from-navy-950 via-navy-900 to-navy-950">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center space-y-10">
        
        <div class="w-20 h-20 rounded-3xl bg-yellow-gold p-3 flex items-center justify-center mx-auto shadow-2xl glow-yellow animate-float-smooth">
            <img src="{{ asset('images/logo.svg') }}" alt="Mobilis Logo" class="w-full h-full object-contain">
        </div>

        <h2 class="text-4xl sm:text-6xl font-black text-white font-display tracking-tight leading-tight">
            Ready to Experience Mobilis? <br>
            <span class="text-gradient-yellow">Download the Mobilis App!</span>
        </h2>

        <p class="text-slate-300 text-sm sm:text-lg max-w-2xl mx-auto leading-relaxed">
            One single mobile app for Renters, Drivers, and Vehicle Hosts. Hourly & Daily rental options. Download now for Android!
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-5 pt-4">
            <a href="{{ route('mobilis.download') }}" data-direct-download="all" class="w-full sm:w-auto px-10 py-5 rounded-2xl bg-yellow-gold hover:bg-yellow-amber text-navy-950 font-black text-sm uppercase tracking-wider shadow-2xl glow-yellow transition-all transform hover:-translate-y-1 flex items-center justify-center gap-3">
                <span>Download Mobilis App (APK)</span>
                <span>↓</span>
            </a>
            <button type="button" data-open-modal="qr-download-modal" class="w-full sm:w-auto px-8 py-5 rounded-2xl glass-card text-white hover:text-yellow-gold font-bold text-sm flex items-center justify-center gap-2.5 transition-all">
                <svg class="w-5 h-5 text-yellow-gold" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M3 3h8v8H3V3zm2 2v4h4V5H5zm8-2h8v8h-8V3zm2 2v4h4V5h-4zM3 13h8v8H3v-8zm2 2v4h4v-4H5zm13-2h3v3h-3v-3zm0 5h3v3h-3v-3zm-5-5h3v3h-3v-3zm0 5h3v3h-3v-3z"></path>
                </svg>
                <span>Scan QR Code</span>
            </button>
        </div>

    </div>
</section>

@endsection
