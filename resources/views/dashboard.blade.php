@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-gray-950 text-slate-200">

    <div class="max-w-7xl mx-auto px-6 py-8">
        
        <!-- Header Dashboard -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-10">
            <div>
                <h1 class="text-4xl font-bold tracking-tight text-white">Tableau de Bord</h1>
                <p class="text-slate-400 mt-2">Bienvenue sur ManyToMany • Vue d'ensemble</p>
            </div>
            <div class="mt-4 sm:mt-0 flex items-center gap-3">
                <button onclick="window.location.reload()" 
                        class="px-5 py-2.5 bg-teal-500/10 hover:bg-teal-500/20 border border-teal-500/30 text-teal-300 rounded-2xl text-sm font-medium transition-all flex items-center gap-2">
                    <span>↻</span> Actualiser
                </button>
                <button class="px-6 py-2.5 bg-gradient-to-r from-teal-500 to-cyan-500 hover:from-teal-600 hover:to-cyan-600 rounded-2xl text-sm font-semibold transition-all">
                    + Nouveau Produit
                </button>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
            <div class="bg-gray-900/50 border border-teal-500/10 rounded-3xl p-6 hover:border-teal-500/30 transition-all">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-slate-400 text-sm">Ventes Totales</p>
                        <p class="text-4xl font-bold text-white mt-2">248,950 <span class="text-xl text-teal-400">DA</span></p>
                    </div>
                    <div class="w-12 h-12 bg-teal-500/10 rounded-2xl flex items-center justify-center text-3xl">💰</div>
                </div>
                <p class="text-emerald-400 text-sm mt-4 flex items-center gap-1">↑ 12.5% ce mois</p>
            </div>

            <div class="bg-gray-900/50 border border-teal-500/10 rounded-3xl p-6 hover:border-teal-500/30 transition-all">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-slate-400 text-sm">Commandes</p>
                        <p class="text-4xl font-bold text-white mt-2">184</p>
                    </div>
                    <div class="w-12 h-12 bg-teal-500/10 rounded-2xl flex items-center justify-center text-3xl">📦</div>
                </div>
                <p class="text-emerald-400 text-sm mt-4 flex items-center gap-1">↑ 8 commandes aujourd'hui</p>
            </div>

            <div class="bg-gray-900/50 border border-teal-500/10 rounded-3xl p-6 hover:border-teal-500/30 transition-all">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-slate-400 text-sm">Produits</p>
                        <p class="text-4xl font-bold text-white mt-2">1,247</p>
                    </div>
                    <div class="w-12 h-12 bg-teal-500/10 rounded-2xl flex items-center justify-center text-3xl">🛍️</div>
                </div>
                <p class="text-amber-400 text-sm mt-4 flex items-center gap-1">23 en rupture</p>
            </div>

            <div class="bg-gray-900/50 border border-teal-500/10 rounded-3xl p-6 hover:border-teal-500/30 transition-all">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-slate-400 text-sm">Clients</p>
                        <p class="text-4xl font-bold text-white mt-2">892</p>
                    </div>
                    <div class="w-12 h-12 bg-teal-500/10 rounded-2xl flex items-center justify-center text-3xl">👥</div>
                </div>
                <p class="text-emerald-400 text-sm mt-4 flex items-center gap-1">↑ 47 ce mois</p>
            </div>
        </div>

        <!-- Deux colonnes -->
        <div>
@endsection