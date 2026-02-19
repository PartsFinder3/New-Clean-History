@extends('layouts.app')

@section('title', 'Admin Login')

@section('content')
<div class="flex items-center justify-center min-h-[calc(100vh-160px)] px-6">
    <div class="w-full max-w-md bg-zinc-900 border border-zinc-800 rounded-2xl p-8 shadow-2xl">
        <div class="text-center mb-10">
            <h1 class="text-3xl font-bold text-white font-outfit">Admin Login</h1>
            <p class="text-zinc-400 mt-2">Secure access to car history management</p>
        </div>

        @if ($errors->any())
            <div class="mb-6 p-4 bg-red-500/10 border border-red-500/50 rounded-lg text-red-500 text-sm">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('admin.authenticate') }}" method="POST" class="space-y-6">
            @csrf
            <div class="space-y-2">
                <label class="text-sm font-medium text-zinc-300">Email Address</label>
                <input
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="admin@example.com"
                    class="w-full bg-zinc-950 border border-zinc-800 rounded-xl px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-blue-500/50 transition-all font-outfit"
                    required
                />
            </div>

            <div class="space-y-2">
                <label class="text-sm font-medium text-zinc-300">Password</label>
                <input
                    type="password"
                    name="password"
                    placeholder="••••••••"
                    class="w-full bg-zinc-950 border border-zinc-800 rounded-xl px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-blue-500/50 transition-all font-outfit"
                    required
                />
            </div>

            <button
                type="submit"
                class="w-full py-4 rounded-xl font-bold text-white transition-all transform active:scale-[0.98] bg-gradient-to-r from-blue-600 to-indigo-600 hover:shadow-lg hover:shadow-blue-500/20"
            >
                Login to Dashboard
            </button>
        </form>

        <div class="mt-8 text-center text-zinc-500 text-xs">
            Only authorized administrators can access this area.
        </div>
    </div>
</div>
@endsection
