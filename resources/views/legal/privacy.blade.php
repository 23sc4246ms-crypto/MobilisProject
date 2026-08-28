@extends('layouts.app')

@section('title', 'Privacy Policy | Mobilis Car Rental App')

@section('content')
<section class="py-20 lg:py-28 bg-radial-hero bg-grid-pattern relative">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Header -->
        <div class="text-center mb-16 space-y-4">
            <span class="px-4 py-1.5 rounded-full bg-yellow-gold/15 text-yellow-gold text-xs font-black border border-yellow-gold/30 uppercase tracking-widest">
                DATA PRIVACY & SECURITY
            </span>
            <h1 class="text-3xl sm:text-5xl font-black text-white font-display">
                Privacy Policy
            </h1>
            <p class="text-slate-400 text-xs sm:text-sm">
                Compliance with Republic Act No. 10173 (Philippine Data Privacy Act of 2012)
            </p>
        </div>

        <!-- Content Body -->
        <div class="glass-card bg-navy-900/95 rounded-3xl p-8 sm:p-12 border border-white/15 shadow-2xl space-y-10 text-slate-300 text-sm leading-relaxed">
            
            <div class="space-y-3">
                <h2 class="text-lg sm:text-xl font-bold text-white flex items-center gap-2">
                    <span class="text-yellow-gold font-display">1.</span> Commitment to Data Privacy
                </h2>
                <p>
                    Mobilis Philippines Inc. ("Mobilis", "we", "our") respects your fundamental right to privacy. We process personal and sensitive personal data in strict compliance with the Data Privacy Act of 2012 (Republic Act No. 10173), its Implementing Rules and Regulations, and National Privacy Commission (NPC) issuances.
                </p>
            </div>

            <div class="space-y-3">
                <h2 class="text-lg sm:text-xl font-bold text-white flex items-center gap-2">
                    <span class="text-yellow-gold font-display">2.</span> Information We Collect
                </h2>
                <ul class="list-disc pl-5 space-y-2 text-xs sm:text-sm">
                    <li><strong class="text-white">Personal Identification:</strong> Full name, date of birth, residential address, mobile phone number, email address, and selfie biometric verification.</li>
                    <li><strong class="text-white">Official Documents:</strong> Driver's License details, Government IDs (Passport, UMID, National ID), and NBI/Police clearances for accredited chauffeurs.</li>
                    <li><strong class="text-white">Vehicle Information:</strong> LTO OR/CR documents, license plate numbers, vehicle photos, and maintenance histories for partner hosts.</li>
                    <li><strong class="text-white">Location & Telematics Data:</strong> Real-time GPS location during active reservation windows for keyless unlock security and roadside emergency routing.</li>
                    <li><strong class="text-white">Payment & Transaction Data:</strong> Tokenized payment identifiers, transaction records, and GCash/Bank payout details. We do not store raw credit card numbers.</li>
                </ul>
            </div>

            <div class="space-y-3">
                <h2 class="text-lg sm:text-xl font-bold text-white flex items-center gap-2">
                    <span class="text-yellow-gold font-display">3.</span> How We Use Your Data
                </h2>
                <p>
                    We collect and process your personal information to facilitate identity verification, prevent fraudulent bookings, coordinate vehicle access, dispatch accredited drivers, process commercial insurance claims, and disburse automated host payouts.
                </p>
            </div>

            <div class="space-y-3">
                <h2 class="text-lg sm:text-xl font-bold text-white flex items-center gap-2">
                    <span class="text-yellow-gold font-display">4.</span> Data Sharing & Third-Party Processors
                </h2>
                <p>
                    We do not sell your personal data. We only disclose necessary information to:
                </p>
                <ul class="list-disc pl-5 space-y-1.5 text-xs sm:text-sm">
                    <li>Licensed insurance underwriters for valid accident/damage claim processing.</li>
                    <li>Emergency roadside assistance and towing providers during active incidents.</li>
                    <li>Authorized law enforcement agencies upon issuance of lawful warrants or court orders.</li>
                </ul>
            </div>

            <div class="space-y-3">
                <h2 class="text-lg sm:text-xl font-bold text-white flex items-center gap-2">
                    <span class="text-yellow-gold font-display">5.</span> Data Security & Encryption Standards
                </h2>
                <p>
                    We employ industry-leading 256-bit AES cryptographic encryption for data at rest and TLS 1.3 encryption for all communications between the Mobilis Mobile App and our secure cloud infrastructure. Strict access control policies ensure only authorized personnel can view sensitive identification records.
                </p>
            </div>

            <div class="space-y-3">
                <h2 class="text-lg sm:text-xl font-bold text-white flex items-center gap-2">
                    <span class="text-yellow-gold font-display">6.</span> Your Data Subject Rights
                </h2>
                <p>
                    Under the Data Privacy Act of 2012, you have the right to be informed, access your data, rectify inaccuracies, request erasure or blocking of your personal data, and lodge complaints with the National Privacy Commission.
                </p>
            </div>

            <div class="space-y-3">
                <h2 class="text-lg sm:text-xl font-bold text-white flex items-center gap-2">
                    <span class="text-yellow-gold font-display">7.</span> Contacting Our Data Protection Officer (DPO)
                </h2>
                <p class="text-xs sm:text-sm">
                    For inquiries or requests regarding your personal data, you may contact our Data Protection Officer at: <br>
                    <strong class="text-white">Email:</strong> privacy@mobilis.ph • <strong class="text-white">Hotline:</strong> (02) 8888-MOBILIS
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
