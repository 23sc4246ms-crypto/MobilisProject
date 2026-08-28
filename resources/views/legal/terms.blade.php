@extends('layouts.app')

@section('title', 'Terms of Service | Mobilis Car Rental App')

@section('content')
<section class="py-20 lg:py-28 bg-radial-hero bg-grid-pattern relative">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Header -->
        <div class="text-center mb-16 space-y-4">
            <span class="px-4 py-1.5 rounded-full bg-yellow-gold/15 text-yellow-gold text-xs font-black border border-yellow-gold/30 uppercase tracking-widest">
                LEGAL AGREEMENT & TERMS
            </span>
            <h1 class="text-3xl sm:text-5xl font-black text-white font-display">
                Terms of Service
            </h1>
            <p class="text-slate-400 text-xs sm:text-sm">
                Last updated: August 2026 • Mobilis Philippines Inc.
            </p>
        </div>

        <!-- Content Body -->
        <div class="glass-card bg-navy-900/95 rounded-3xl p-8 sm:p-12 border border-white/15 shadow-2xl space-y-10 text-slate-300 text-sm leading-relaxed">
            
            <div class="space-y-3">
                <h2 class="text-lg sm:text-xl font-bold text-white flex items-center gap-2">
                    <span class="text-yellow-gold font-display">1.</span> Acceptance of Terms
                </h2>
                <p>
                    By downloading, accessing, or using the Mobilis Mobile Application ("App") and associated services provided by Mobilis Philippines Inc. ("Mobilis", "we", "our", or "us"), you agree to be bound by these Terms of Service. If you do not agree to these terms, please do not use the application. Mobilis operates purely as a technology platform connecting car renters, accredited professional chauffeurs, and verified vehicle hosts.
                </p>
            </div>

            <div class="space-y-3">
                <h2 class="text-lg sm:text-xl font-bold text-white flex items-center gap-2">
                    <span class="text-yellow-gold font-display">2.</span> User Eligibility & Account Registration
                </h2>
                <ul class="list-disc pl-5 space-y-2 text-xs sm:text-sm">
                    <li><strong class="text-white">Renters:</strong> Must be at least 18 years old, possess a valid government-issued ID and an active Driver's License for self-drive bookings.</li>
                    <li><strong class="text-white">Accredited Drivers:</strong> Must be at least 21 years old, possess a valid Professional Driver's License, updated NBI/Police Clearance, and pass our in-app background screening.</li>
                    <li><strong class="text-white">Partner Hosts:</strong> Must be the legal registered owner of the vehicle or authorized representative with valid Land Transportation Office (LTO) Official Receipt (OR) and Certificate of Registration (CR).</li>
                </ul>
            </div>

            <div class="space-y-3">
                <h2 class="text-lg sm:text-xl font-bold text-white flex items-center gap-2">
                    <span class="text-yellow-gold font-display">3.</span> In-App Booking & Rental Operations
                </h2>
                <p>
                    All vehicle reservations, hourly and daily pricing calculations, driver dispatches, and rental extensions are conducted exclusively through the Mobilis Mobile App. Renters may utilize Bluetooth keyless entry to unlock authorized vehicles during their confirmed reservation window.
                </p>
            </div>

            <div class="space-y-3">
                <h2 class="text-lg sm:text-xl font-bold text-white flex items-center gap-2">
                    <span class="text-yellow-gold font-display">4.</span> Renter Code of Conduct & Vehicle Use Rules
                </h2>
                <ul class="list-disc pl-5 space-y-2 text-xs sm:text-sm">
                    <li>Vehicles must only be operated by the verified renter or the assigned accredited chauffeur.</li>
                    <li>Subleasing, street racing, off-roading in non-4x4 designated cars, or using the vehicle for unlawful activities is strictly prohibited and results in immediate forfeiture of security deposit.</li>
                    <li>Renters must return the vehicle with the same fuel level as received, unless prepaid fuel was selected in-app.</li>
                </ul>
            </div>

            <div class="space-y-3">
                <h2 class="text-lg sm:text-xl font-bold text-white flex items-center gap-2">
                    <span class="text-yellow-gold font-display">5.</span> Chauffeur Driver Service Terms
                </h2>
                <p>
                    Accredited drivers operate as independent transportation service contractors. Drivers agree to maintain professional demeanor, arrive punctually at designated pickup points, strictly adhere to Philippine traffic laws (RA 4136), and maintain clean trip logs inside the Driver Mode.
                </p>
            </div>

            <div class="space-y-3">
                <h2 class="text-lg sm:text-xl font-bold text-white flex items-center gap-2">
                    <span class="text-yellow-gold font-display">6.</span> Vehicle Host Obligations & Payouts
                </h2>
                <p>
                    Hosts guarantee that listed vehicles are roadworthy, mechanically sound, and have clean documentation. Monthly earnings are computed based on confirmed booking days and disbursed automatically via designated bank accounts or digital wallets according to the agreed schedule.
                </p>
            </div>

            <div class="space-y-3">
                <h2 class="text-lg sm:text-xl font-bold text-white flex items-center gap-2">
                    <span class="text-yellow-gold font-display">7.</span> Cancellations, Refunds & Overtime Rates
                </h2>
                <p>
                    Free cancellation is available up to 24 hours prior to booking start time. Late returns without prior in-app extension are billed at standard hourly overtime rates plus associated penalty fees.
                </p>
            </div>

            <div class="space-y-3">
                <h2 class="text-lg sm:text-xl font-bold text-white flex items-center gap-2">
                    <span class="text-yellow-gold font-display">8.</span> Limitation of Liability
                </h2>
                <p>
                    Mobilis facilitates verified peer-to-peer and fleet car sharing with comprehensive commercial insurance backing. To the extent permitted by law, Mobilis is not liable for indirect or consequential damages arising from personal property left inside vehicles.
                </p>
            </div>

            <div class="pt-6 border-t border-white/10 flex flex-wrap items-center justify-between gap-4">
                <a href="{{ route('mobilis.home') }}" class="text-xs font-bold text-yellow-gold hover:underline flex items-center gap-2">
                    &larr; Back to Mobilis Home
                </a>
                <a href="{{ route('mobilis.download') }}" class="px-6 py-3 rounded-xl bg-yellow-gold text-navy-950 font-black text-xs uppercase tracking-wider shadow-lg glow-yellow-sm">
                    Download Mobilis App
                </a>
            </div>

        </div>

    </div>
</section>
@endsection
