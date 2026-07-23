@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-950 flex items-center justify-center">
    <div class="bg-gray-900 border border-teal-500/30 rounded-3xl p-8 w-full max-w-md">
        <h2 class="text-3xl font-bold text-center mb-8 text-white">Connexion</h2>
        
        <form class="space-y-6">
            <div>
                <input type="email" placeholder="Email" 
                       class="w-full bg-gray-800 border border-teal-500/20 rounded-2xl px-5 py-4 focus:border-teal-500 outline-none text-white">
            </div>
            <div>
                <input type="password" placeholder="Mot de passe" 
                       class="w-full bg-gray-800 border border-teal-500/20 rounded-2xl px-5 py-4 focus:border-teal-500 outline-none text-white">
            </div>
            <button type="submit"
                    class="w-full py-4 bg-gradient-to-r from-teal-500 to-cyan-500 rounded-2xl font-semibold text-lg">
                Se connecter
            </button>
        </form>
        
        <p class="text-center text-slate-400 mt-6">
            Pas de compte ? <a href="{{ route('register') }}" class="text-teal-400">S'inscrire</a>
        </p>
    </div>
</div>
@endsection