@extends('layouts.app')

@section('title', 'Security & Insurance Policy | Mobilis Car Rental App')

@section('content')
<section class="py-20 lg:py-28 bg-radial-hero bg-grid-pattern relative">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Header -->
        <div class="text-center mb-16 space-y-4">
            <span class="px-4 py-1.5 rounded-full bg-emerald-500/15 text-emerald-400 text-xs font-black border border-emerald-500/30 uppercase tracking-widest">
                PROTECTION & SAFETY GUARANTEE
            </span>
            <h1 class="text-3xl sm:text-5xl font-black text-white font-display">
                Security & Insurance Policy
            </h1>
            <p class="text-slate-400 text-xs sm:text-sm">
                100% Commercial Protection for Renters, Drivers, and Vehicle Hosts
            </p>
        </div>

        <!-- Content Body -->
        <div class="glass-card bg-navy-900/95 rounded-3xl p-8 sm:p-12 border border-white/15 shadow-2xl space-y-10 text-slate-300 text-sm leading-relaxed">
            
            <div class="space-y-3">
                <h2 class="text-lg sm:text-xl font-bold text-white flex items-center gap-2">
                    <span class="text-emerald-400 font-display">1.</span> Comprehensive Commercial Rental Insurance
                </h2>
                <p>
                    Every vehicle trip booked through the Mobilis App is protected under our comprehensive commercial rental policy underwritten by licensed non-life insurance partners in the Philippines. Unlike standard personal car insurance which excludes commercial rent-a-car use, Mobilis insurance explicitly covers peer-to-peer and chauffeur car rental operations.
                </p>
            </div>

            <div class="space-y-3">
                <h2 class="text-lg sm:text-xl font-bold text-white flex items-center gap-2">
                    <span class="text-emerald-400 font-display">2.</span> Scope of Coverage
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                    <div class="p-4 rounded-2xl bg-navy-950 border border-white/10 space-y-1">
                        <span class="text-xs font-bold text-emerald-400 block">Own Damage & Collision</span>
                        <p class="text-xs text-slate-300">Covers vehicle repairs resulting from accidental collisions, overturning, falling objects, or road hazards.</p>
                    </div>
                    <div class="p-4 rounded-2xl bg-navy-950 border border-white/10 space-y-1">
                        <span class="text-xs font-bold text-emerald-400 block">Third-Party Property Damage (TPPD)</span>
                        <p class="text-xs text-slate-300">Protects against claims for damage caused to third-party vehicles or roadside property.</p>
                    </div>
                    <div class="p-4 rounded-2xl bg-navy-950 border border-white/10 space-y-1">
                        <span class="text-xs font-bold text-emerald-400 block">Excess Bodily Injury & Medical</span>
                        <p class="text-xs text-slate-300">Covers hospital expenses and personal accident protection for drivers and authorized passengers.</p>
                    </div>
                    <div class="p-4 rounded-2xl bg-navy-950 border border-white/10 space-y-1">
                        <span class="text-xs font-bold text-emerald-400 block">Theft & Total Loss</span>
                        <p class="text-xs text-slate-300">Full vehicle replacement value compensation in the event of unrecoverable theft or total wreck.</p>
                    </div>
                </div>
            </div>

            <div class="space-y-3">
                <h2 class="text-lg sm:text-xl font-bold text-white flex items-center gap-2">
                    <span class="text-emerald-400 font-display">3.</span> Zero-Liability Host Protection Guarantee
                </h2>
                <p>
                    Partner Hosts are 100% indemnified against accident liability during confirmed rental periods. Any deductibles (participation fees) are charged to the responsible renter or absorbed by Mobilis platform protection funds.
                </p>
            </div>

            <div class="space-y-3">
                <h2 class="text-lg sm:text-xl font-bold text-white flex items-center gap-2">
                    <span class="text-emerald-400 font-display">4.</span> 24/7 Roadside Assistance & Emergency Response
                </h2>
                <p>
                    Mobilis is partnered with the Automobile Association Philippines (AAP) to provide nationwide 24/7 roadside rescue:
                </p>
                <ul class="list-disc pl-5 space-y-1.5 text-xs sm:text-sm">
                    <li>Free emergency vehicle towing to the nearest authorized service center.</li>
                    <li>Battery booster jumps, flat tire replacements, and emergency fuel delivery.</li>
                    <li>Direct in-app SOS emergency dispatcher connecting to PNP Highway Patrol and medical first responders.</li>
                </ul>
            </div>

            <div class="space-y-3">
                <h2 class="text-lg sm:text-xl font-bold text-white flex items-center gap-2">
                    <span class="text-emerald-400 font-display">5.</span> Biometric Verification & Security Screening
                </h2>
                <p>
                    Every renter undergoes automated AI facial biometric matching against government records. Accredited chauffeurs undergo mandatory background checks with the National Bureau of Investigation (NBI) and Philippine National Police (PNP).
                </p>
            </div>

            <div class="space-y-3">
                <h2 class="text-lg sm:text-xl font-bold text-white flex items-center gap-2">
                    <span class="text-emerald-400 font-display">6.</span> How to File an Insurance Claim in the App
                </h2>
                <ol class="list-decimal pl-5 space-y-1.5 text-xs sm:text-sm">
                    <li>Ensure safety and tap the in-app <strong class="text-yellow-gold">"Report Incident"</strong> button immediately.</li>
                    <li>Take clear photos of vehicle damage, third-party plates, and surrounding road context.</li>
                    <li>Secure a standard Philippine National Police (PNP) Traffic Investigation Report.</li>
                    <li>Upload documents into the Mobilis App for priority 48-hour claim processing.</li>
                </ol>
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
