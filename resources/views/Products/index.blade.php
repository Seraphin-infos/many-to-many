@extends('layouts.app')

@section('content')
<!-- Styles d'animation personnalisés -->
<style>
    /* Effet d'apparition au chargement */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(15px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in-up {
        animation: fadeInUp 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    /* Décalage progressif des lignes du tableau */
    .table-row-delayed {
        opacity: 0;
        animation: fadeInUp 0.5s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }
</style>

<div class="min-h-screen bg-slate-50 py-12 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
    
    <!-- Arrière-plan décoratif (ambiance vert doux cohérente) -->
    <div class="absolute top-10 left-10 w-72 h-72 bg-emerald-300/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-10 right-10 w-96 h-96 bg-teal-300/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto relative z-10 animate-fade-in-up">
        
        <!-- En-tête de la page -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8 bg-white p-6 rounded-3xl border border-slate-200/80 shadow-xl shadow-emerald-500/5">
            <div>
                <span class="inline-flex items-center gap-1.5 py-1 px-3 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-600 border border-emerald-100 mb-2">
                    📊 Gestion des stocks
                </span>
                <h1 class="text-3xl font-extrabold text-slate-900 tracking-tight">
                    Liste des <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-500 to-teal-600">Produits</span>
                </h1>
            </div>
            <div>
                <a href="{{ route('products.create') }}" 
                   class="inline-flex items-center gap-2 px-6 py-3.5 bg-gradient-to-r from-emerald-500 to-teal-600 text-white font-bold rounded-2xl shadow-lg shadow-emerald-500/20 hover:from-emerald-600 hover:to-teal-700 hover:shadow-emerald-500/30 hover:-translate-y-0.5 active:scale-95 transition-all duration-200">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    Ajouter un Produit
                </a>
            </div>
        </div>

        <!-- Section Notifications -->
        @if(session('success'))
        <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-700 text-sm font-semibold rounded-2xl flex items-center gap-2 shadow-sm">
            <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <span>{{ session('success') }}</span>
        </div>
        @endif

        <!-- Tableau des Produits -->
        <div class="bg-white border border-slate-200/80 rounded-3xl shadow-xl shadow-emerald-500/5 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50/70 border-b border-slate-200 text-slate-700 text-xs font-bold uppercase tracking-wider">
                            <th class="px-6 py-4">Nom</th>
                            <th class="px-6 py-4">Description</th>
                            <th class="px-6 py-4">Prix</th>
                            <th class="px-6 py-4">Stock</th>
                            <th class="px-6 py-4 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @forelse ($products as $index => $product)
                            <!-- Ligne avec un léger délai d'animation progressif -->
                            <tr class="table-row-delayed hover:bg-slate-50/50 transition-colors duration-200" style="animation-delay: {{ $index * 50 }}ms;">
                                <td class="px-6 py-4 font-bold text-slate-900">{{ $product->name }}</td>
                                <td class="px-6 py-4 text-slate-500 text-sm max-w-xs truncate">{{ $product->description ?? 'Aucune description' }}</td>
                                <td class="px-6 py-4 font-mono font-semibold text-emerald-600">${{ number_format($product->price, 2) }}</td>
                                <td class="px-6 py-4">
                                    @if(($product->stock ?? 0) > 0)
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-50 text-emerald-700 border border-emerald-100">
                                            {{ $product->stock }} disponibles
                                        </span>
                                    @else
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-rose-50 text-rose-700 border border-rose-100">
                                            Rupture
                                        </span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-right space-x-2 whitespace-nowrap">
                                    <!-- Bouton Éditer -->
                                    <a href="{{ route('products.edit', $product->id) }}" 
                                       class="inline-flex items-center justify-center p-2 bg-slate-50 text-amber-600 border border-slate-200 rounded-xl hover:bg-amber-50 hover:border-amber-200 hover:text-amber-700 active:scale-95 transition-all duration-150"
                                       title="Modifier">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                        </svg>
                                    </a>
                                    
                                    <!-- Formulaire Supprimer -->
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="inline-flex items-center justify-center p-2 bg-slate-50 text-rose-600 border border-slate-200 rounded-xl hover:bg-rose-50 hover:border-rose-200 hover:text-rose-700 active:scale-95 transition-all duration-150"
                                                onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?')"
                                                title="Supprimer">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-4v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-12 text-center text-slate-400">
                                    <div class="flex flex-col items-center justify-center gap-2">
                                        <svg class="w-10 h-10 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0a2 2 0 01-2 2H6a2 2 0 01-2-2m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-4m-8 0H4"></path>
                                        </svg>
                                        <span class="text-sm font-semibold">Aucun produit disponible</span>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination Stylisée -->
            @if ($products->hasPages())
                <div class="px-6 py-4 bg-slate-50/70 border-t border-slate-200 target-pagination">
                    {{ $products->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection