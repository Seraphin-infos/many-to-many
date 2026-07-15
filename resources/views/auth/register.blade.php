@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-950 flex items-center justify-center py-12 px-4">
    <div class="bg-gray-900 border border-teal-500/30 rounded-3xl p-8 w-full max-w-md">
        
        <!-- Logo / Titre -->
        <div class="text-center mb-8">
            <h2 class="text-3xl font-extrabold tracking-tight text-transparent bg-clip-text bg-gradient-to-r from-teal-400 to-cyan-400">
                ManyToMany
            </h2>
            <p class="text-slate-400 mt-2">Créer un compte</p>
        </div>

        <form method="POST" action="" class="space-y-6">
            @csrf  

            <!-- Nom complet -->
            <div>
                <label class="block text-sm text-slate-400 mb-2">Nom complet</label>
                <input type="text" name="name" 
                       class="w-full bg-gray-800 border border-teal-500/20 rounded-2xl px-5 py-4 focus:outline-none focus:border-teal-500 text-white placeholder-slate-500"
                       placeholder="RANDRIANASOLO Muriellah" required>
            </div>

            <!-- Email -->
            <div>
                <label class="block text-sm text-slate-400 mb-2">Adresse email</label>
                <input type="email" name="email" 
                       class="w-full bg-gray-800 border border-teal-500/20 rounded-2xl px-5 py-4 focus:outline-none focus:border-teal-500 text-white placeholder-slate-500"
                       placeholder="randriamu@gmail.com" required>
            </div>

            <!-- Mot de passe -->
            <div>
                <label class="block text-sm text-slate-400 mb-2">Mot de passe</label>
                <input type="password" name="password" 
                       class="w-full bg-gray-800 border border-teal-500/20 rounded-2xl px-5 py-4 focus:outline-none focus:border-teal-500 text-white placeholder-slate-500"
                       placeholder="••••••••" required>
            </div>

            <!-- Confirmation mot de passe -->
            <div>
                <label class="block text-sm text-slate-400 mb-2">Confirmer le mot de passe</label>
                <input type="password" name="password_confirmation" 
                       class="w-full bg-gray-800 border border-teal-500/20 rounded-2xl px-5 py-4 focus:outline-none focus:border-teal-500 text-white placeholder-slate-500"
                       placeholder="••••••••" required>
            </div>

            <!-- Bouton -->
            <button type="submit"
                    class="w-full py-4 bg-gradient-to-r from-teal-500 to-cyan-500 hover:from-teal-600 hover:to-cyan-600 rounded-2xl font-semibold text-lg transition-all">
                Créer mon compte
            </button>
        </form>

        <!-- Lien vers Login -->
        <p class="text-center text-slate-400 mt-8">
            Déjà un compte ? 
            <a href="{{ route('login') }}" class="text-teal-400 hover:text-teal-300 font-medium">
                Se connecter
            </a>
        </p>
    </div>
</div>
@endsection