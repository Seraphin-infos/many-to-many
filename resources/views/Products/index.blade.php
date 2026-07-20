@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-slate-50 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
    
    <!-- Arrière-plan décoratif (ambiance vert doux) -->
    <div class="absolute top-10 left-10 w-72 h-72 bg-emerald-300/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-10 right-10 w-96 h-96 bg-teal-300/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-xl w-full bg-white border border-slate-200/80 p-8 sm:p-10 rounded-3xl shadow-xl shadow-emerald-500/5 relative z-10">
        
        <!-- En-tête du formulaire -->
        <div class="text-center mb-8">
            <span class="inline-flex items-center gap-1.5 py-1 px-3 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-600 border border-emerald-100 mb-3">
                🚀 Catalogue Produits
            </span>
            <h1 class="text-3xl font-extrabold text-slate-900 tracking-tight">
                Create <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-500 to-teal-600">New Product</span>
            </h1>
            <p class="text-xs text-slate-500 mt-2">Ajoutez une nouvelle entité à votre base de données Many-To-Many.</p>
        </div>

        <!-- Notification de Succès Stylisée -->
        @if(session('success'))
        <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-700 text-sm font-semibold rounded-2xl flex items-center gap-2 shadow-sm">
            <svg class="w-5 h-5 shrink-0 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <span>{{ session('success') }}</span>
        </div>
        @endif

        <!-- Formulaire principal -->
        <form action="{{ route('products.store') }}" method="POST" class="space-y-6">
            @csrf

            <!-- Champ : Name -->
            <div class="space-y-1.5">
                <label for="name" class="block text-xs font-bold text-slate-700 uppercase tracking-wider">Name</label>
                <input type="text" id="name" name="name" required
                    class="w-full px-4 py-3.5 bg-slate-50 border border-slate-200 rounded-2xl text-slate-900 text-sm focus:outline-none focus:border-emerald-500 focus:bg-white focus:ring-2 focus:ring-emerald-500/20 transition-all duration-200"
                    placeholder="Enter product name">
            </div>

            <!-- Grille à 2 colonnes pour Price et Stock -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <!-- Champ : Price -->
                <div class="space-y-1.5">
                    <label for="price" class="block text-xs font-bold text-slate-700 uppercase tracking-wider">Price</label>
                    <input type="number" id="price" name="price" step="0.01" required
                        class="w-full px-4 py-3.5 bg-slate-50 border border-slate-200 rounded-2xl text-slate-900 text-sm focus:outline-none focus:border-emerald-500 focus:bg-white focus:ring-2 focus:ring-emerald-500/20 transition-all duration-200"
                        placeholder="0.00">
                </div>

                <!-- Champ : Stock -->
                <div class="space-y-1.5">
                    <label for="stock" class="block text-xs font-bold text-slate-700 uppercase tracking-wider">Stock</label>
                    <input type="number" min="0" id="stock" name="stock"
                        class="w-full px-4 py-3.5 bg-slate-50 border border-slate-200 rounded-2xl text-slate-900 text-sm focus:outline-none focus:border-emerald-500 focus:bg-white focus:ring-2 focus:ring-emerald-500/20 transition-all duration-200"
                        placeholder="Entrer le stock">
                </div>
            </div>

            <!-- Champ : Description -->
            <div class="space-y-1.5">
                <label for="description" class="block text-xs font-bold text-slate-700 uppercase tracking-wider">Description</label>
                <textarea id="description" name="description" rows="4"
                    class="w-full px-4 py-3.5 bg-slate-50 border border-slate-200 rounded-2xl text-slate-900 text-sm focus:outline-none focus:border-emerald-500 focus:bg-white focus:ring-2 focus:ring-emerald-500/20 transition-all duration-200 resize-none"
                    placeholder="Describe the product specifications..."></textarea>
            </div>

            <!-- Bouton d'action -->
            <div class="pt-2">
                <button type="submit" 
                    class="w-full py-4 bg-gradient-to-r from-emerald-500 to-teal-600 text-white font-bold rounded-2xl shadow-lg shadow-emerald-500/20 hover:from-emerald-600 hover:to-teal-700 hover:shadow-emerald-500/30 hover:-translate-y-0.5 active:scale-95 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2">
                    Create Product
                </button>
            </div>
        </form>
    </div>
</div>
@endsection