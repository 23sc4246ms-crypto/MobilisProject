@extends('layouts.app')

@section('title', 'Admin Login | Mobilis App Manager')

@section('content')
<div class="min-h-[85vh] flex items-center justify-center py-16 px-4 sm:px-6 lg:px-8 bg-radial-hero bg-grid-pattern relative">
    <div class="absolute w-96 h-96 bg-yellow-gold/10 rounded-full blur-[140px] pointer-events-none"></div>

    <div class="relative w-full max-w-md glass-card bg-navy-900/95 border border-white/15 rounded-3xl p-8 sm:p-10 shadow-2xl animate-fadeIn text-center">
        
        <!-- Brand Logo Icon -->
        <div class="w-16 h-16 rounded-2xl bg-yellow-gold p-2.5 shadow-2xl mx-auto mb-5 glow-yellow flex items-center justify-center">
            <img src="{{ asset('images/logo.svg') }}" alt="Mobilis Logo" class="w-full h-full object-contain">
        </div>

        <span class="px-3.5 py-1 rounded-full bg-yellow-gold/15 text-yellow-gold text-xs font-black border border-yellow-gold/30 uppercase tracking-widest">
            AUTHENTICATION REQUIRED
        </span>

        <h1 class="text-2xl sm:text-3xl font-black text-white font-display mt-3 mb-2">
            Mobilis Admin Gate
        </h1>

        <p class="text-slate-300 text-xs sm:text-sm leading-relaxed mb-6">
            Enter your admin security passcode to access the App Release & Storage Management Portal.
        </p>

        <!-- Alert Notifications -->
        @if(session('success'))
            <div class="p-3.5 rounded-2xl bg-emerald-500/15 border border-emerald-500/40 text-emerald-300 text-xs flex items-center gap-2 mb-5 text-left">
                <span class="font-bold">✓</span>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        @if(session('error'))
            <div class="p-3.5 rounded-2xl bg-rose-500/15 border border-rose-500/40 text-rose-300 text-xs flex items-center gap-2 mb-5 text-left">
                <span class="font-bold">⚠️</span>
                <span>{{ session('error') }}</span>
            </div>
        @endif

        <form action="/admin/login" method="POST" class="space-y-4 text-left">
            @csrf

            <div>
                <label for="password" class="block text-xs font-black uppercase tracking-wider text-slate-300 mb-2">
                    Security Passcode
                </label>
                <div class="relative">
                    <input type="password" name="password" id="password" required autofocus placeholder="Enter admin password..." class="w-full px-4 py-3.5 rounded-2xl bg-navy-950 border border-white/15 text-white text-sm font-bold focus:outline-none focus:border-yellow-gold pr-12">
                    <button type="button" onclick="togglePassVisibility()" class="absolute right-3 top-1/2 -translate-y-1/2 p-2 text-slate-400 hover:text-white text-xs">
                        👁️
                    </button>
                </div>
                <span class="text-[11px] text-slate-400 block mt-1.5">
                    Default Passcode: <code class="text-yellow-gold font-mono bg-navy-950 px-1 py-0.5 rounded">mobilis2026</code>
                </span>
            </div>

            <div class="pt-2">
                <button type="submit" class="w-full py-4 rounded-2xl bg-yellow-gold hover:bg-yellow-amber text-navy-950 font-black text-sm uppercase tracking-wider shadow-2xl glow-yellow transition-all flex items-center justify-center gap-2">
                    <span>Unlock Admin Panel</span>
                    <span>&rarr;</span>
                </button>
            </div>
        </form>

        <div class="mt-6 pt-6 border-t border-white/10 text-center">
            <a href="{{ route('mobilis.home') }}" class="text-xs font-bold text-slate-400 hover:text-yellow-gold transition-colors">
                &larr; Return to Mobilis Landing Page
            </a>
        </div>

    </div>
</div>

<script>
    function togglePassVisibility() {
        const passInput = document.getElementById('password');
        if (passInput.type === 'password') {
            passInput.type = 'text';
        } else {
            passInput.type = 'password';
        }
    }
</script>
@endsection
