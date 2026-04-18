@extends('layouts.app')

@section('title', 'Admin Login')
@section('description')
Secure admin portal for Car History Clean. Authorized administrators can manage VIN records, blog posts, and site settings for vehicle history removal.
@endsection

@section('content')
<div class="flex items-center justify-center min-h-[calc(100vh-160px)] px-6 py-12 md:py-24">
    <div class="w-full max-w-md bg-white border border-card-border rounded-[2.5rem] p-10 md:p-12 shadow-2xl relative overflow-hidden">
        <!-- Decorative Glow -->
        <div class="absolute -top-24 -right-24 w-48 h-48 bg-blue-100 blur-3xl rounded-full opacity-50"></div>
        
        <div class="relative z-10">
            <div class="text-center mb-10">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-50 rounded-2xl text-accent mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 00-2 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                    </svg>
                </div>
                <h1 class="text-3xl font-bold text-foreground font-display">Admin Portal</h1>
                <p class="text-muted mt-3 font-medium text-sm">Authorized Access Only</p>
            </div>

            @if ($errors->any())
                <div class="mb-8 p-4 bg-red-50 border border-red-100 rounded-2xl text-red-600 text-sm font-medium animate-shake">
                    @foreach ($errors->all() as $error)
                        <p class="flex items-center gap-2">
                            <span class="w-1 h-1 bg-red-600 rounded-full"></span>
                            {{ $error }}
                        </p>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('admin.authenticate') }}" method="POST" class="space-y-6">
                @csrf
                <div class="space-y-2">
                    <label class="text-sm font-bold text-foreground uppercase tracking-widest pl-1">Email Address</label>
                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="admin@carhistory.com"
                        class="w-full bg-background-secondary border border-card-border rounded-2xl px-5 py-4 text-foreground placeholder-muted-light focus:bg-white focus:border-accent focus:outline-none focus:ring-4 focus:ring-blue-100 transition-all font-display"
                        required
                    />
                </div>

                <div class="space-y-2">
                    <label class="text-sm font-bold text-foreground uppercase tracking-widest pl-1">Password</label>
                    <input
                        type="password"
                        name="password"
                        placeholder="••••••••"
                        class="w-full bg-background-secondary border border-card-border rounded-2xl px-5 py-4 text-foreground placeholder-muted-light focus:bg-white focus:border-accent focus:outline-none focus:ring-4 focus:ring-blue-100 transition-all font-display"
                        required
                    />
                </div>

                <button
                    type="submit"
                    class="btn-primary w-full py-5 rounded-2xl text-lg group"
                >
                    <span class="relative z-10 flex items-center justify-center gap-2">
                        Enter Dashboard
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </span>
                </button>
            </form>

            <div class="mt-10 pt-8 border-t border-card-border text-center text-muted-light text-xs font-bold uppercase tracking-widest">
                Protected by 256-bit AES Encryption
            </div>
        </div>
    </div>
</div>
@endsection
