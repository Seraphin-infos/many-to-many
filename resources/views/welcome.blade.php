@extends('layouts.app')

@section('content')
<!-- Section d'effets CSS personnalisés (Infinite Marquee, Animations 3D & Scroll) -->
<style>
    /* 1. Animation Défilement Infini (Infinite Marquee) */
    @keyframes marquee {
        0% { transform: translateX(0%); }
        100% { transform: translateX(-50%); }
    }
    .animate-marquee {
        display: flex;
        width: 200%;
        animation: marquee 20s linear infinite;
    }
    .animate-marquee:hover {
        animation-play-state: paused; /* Pause au survol pour plus d'interaction */
    }

    /* 2. Animation de flottement 2D */
    @keyframes float {
        0%, 100% { transform: translateY(0px) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(3deg); }
    }
    .animate-float-slow { animation: float 8s ease-in-out infinite; }
    .animate-float-fast { animation: float 5s ease-in-out infinite; }

    /* 3. Effet d'apparition au Scroll */
    .reveal {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .reveal.active {
        opacity: 1;
        transform: translateY(0);
    }

    /* 4. Zone 3D Perspective */
    .perspective-3d { perspective: 1200px; }
    .tilt-card {
        transition: transform 0.2s ease-out, box-shadow 0.2s ease-out;
        transform-style: preserve-3d;
    }
</style>

<div class="overflow-x-hidden bg-slate-50 relative">

    <!-- Arrière-plan décoratif -->
    <div class="absolute top-20 left-10 w-72 h-72 bg-emerald-300/20 rounded-full blur-3xl animate-float-slow pointer-events-none"></div>
    <div class="absolute top-[40%] right-10 w-96 h-96 bg-teal-300/10 rounded-full blur-3xl animate-float-fast pointer-events-none"></div>

    <!-- ========================================== -->
    <!-- HERO SECTION                              -->
    <!-- ========================================== -->
    <section class="relative max-w-7xl mx-auto px-6 pt-16 pb-20 lg:pt-24 lg:pb-28 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        
        <div class="lg:col-span-6 space-y-8 z-10 text-center lg:text-left">
            <span class="inline-flex items-center gap-1.5 py-1 px-3 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-600 border border-emerald-100">
                🚀 Révolutionner les bases de données
            </span>
            
            <h1 class="text-4xl sm:text-6xl font-extrabold text-slate-900 tracking-tight leading-none">
                Gérez vos données en <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-500 to-teal-600">
                    Many To Many
                </span>
                sans effort.
            </h1>
            
            <p class="text-lg text-slate-600 max-w-xl mx-auto lg:mx-0">
                Connectez vos modèles, organisez vos entités et profitez d'une vitesse d'exécution exceptionnelle.
            </p>

            <div class="flex flex-wrap items-center justify-center lg:justify-start gap-4">
                <a href="#quick-access" 
                   class="px-8 py-4 bg-emerald-500 text-white font-bold rounded-2xl shadow-lg shadow-emerald-500/20 hover:bg-emerald-600 hover:shadow-emerald-500/30 hover:-translate-y-0.5 active:scale-95 transition-all duration-200">
                    Découvrir nos modules
                </a>
                <a href="#demo" 
                   class="px-8 py-4 bg-white text-slate-700 font-bold rounded-2xl border border-slate-200/80 hover:bg-slate-50 hover:border-emerald-200 hover:-translate-y-0.5 active:scale-95 transition-all duration-200">
                    Tester la démo
                </a>
            </div>
        </div>

        <!-- Visuel interactif 3D -->
        <div class="lg:col-span-6 flex justify-center perspective-3d z-10">
            <div id="tiltCard" class="tilt-card w-full max-w-[500px] h-[340px] rounded-3xl bg-gradient-to-tr from-emerald-500 to-teal-600 p-[1px] shadow-2xl shadow-emerald-950/10 cursor-pointer">
                <div class="w-full h-full bg-slate-900 rounded-3xl p-6 flex flex-col justify-between overflow-hidden relative">
                    <div class="absolute -top-10 -right-10 w-32 h-32 bg-emerald-500/20 rounded-full blur-xl pointer-events-none"></div>
                    
                    <div class="flex items-center justify-between border-b border-slate-800 pb-4">
                        <div class="flex gap-1.5">
                            <span class="w-3 h-3 rounded-full bg-rose-500"></span>
                            <span class="w-3 h-3 rounded-full bg-amber-500"></span>
                            <span class="w-3 h-3 rounded-full bg-emerald-500"></span>
                        </div>
                        <span class="text-xs text-slate-500 font-mono">dashboard_final.xml</span>
                    </div>

                    <div class="space-y-4 my-auto">
                        <div class="flex justify-between items-center bg-slate-800/50 p-3 rounded-xl hover:bg-slate-800 transition-colors">
                            <span class="text-xs text-emerald-400 font-semibold">Articles & Commandes</span>
                            <span class="text-sm font-mono text-white">4 289</span>
                        </div>
                        <div class="flex justify-between items-center bg-slate-800/50 p-3 rounded-xl hover:bg-slate-800 transition-colors">
                            <span class="text-xs text-teal-400 font-semibold">Produits Actifs</span>
                            <span class="text-sm font-mono text-white">128</span>
                        </div>
                    </div>

                    <div class="text-center text-[10px] text-slate-500 italic">
                        Survolez pour l'effet de profondeur 3D !
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- ========================================== -->
    <!-- 1. ANIMATION DÉFILEMENT INFINI (INFINITE)  -->
    <!-- ========================================== -->
    <section class="bg-white border-y border-slate-200/80 py-8 overflow-hidden relative shadow-inner">
        <div class="animate-marquee items-center gap-12 text-slate-400 font-bold text-sm uppercase tracking-widest">
            <!-- Liste 1 -->
            <div class="flex items-center gap-12 shrink-0">
                <span class="flex items-center gap-2"><ion-icon class="text-emerald-500 text-xl" name="logo-laravel"></ion-icon> Laravel Framework</span>
                <span class="text-slate-300">•</span>
                <span class="flex items-center gap-2"><ion-icon class="text-emerald-500 text-xl" name="color-palette-outline"></ion-icon> Tailwind CSS</span>
                <span class="text-slate-300">•</span>
                <span class="flex items-center gap-2"><ion-icon class="text-emerald-500 text-xl" name="server-outline"></ion-icon> MySQL Database</span>
                <span class="text-slate-300">•</span>
                <span class="flex items-center gap-2"><ion-icon class="text-emerald-500 text-xl" name="code-working-outline"></ion-icon> PHP 8.x Engine</span>
                <span class="text-slate-300">•</span>
                <span class="flex items-center gap-2"><ion-icon class="text-emerald-500 text-xl" name="git-branch-outline"></ion-icon> Dynamic Many-To-Many</span>
                <span class="text-slate-300">•</span>
            </div>
            <!-- Duplication exacte pour l'effet en boucle infini -->
            <div class="flex items-center gap-12 shrink-0">
                <span class="flex items-center gap-2"><ion-icon class="text-emerald-500 text-xl" name="logo-laravel"></ion-icon> Laravel Framework</span>
                <span class="text-slate-300">•</span>
                <span class="flex items-center gap-2"><ion-icon class="text-emerald-500 text-xl" name="color-palette-outline"></ion-icon> Tailwind CSS</span>
                <span class="text-slate-300">•</span>
                <span class="flex items-center gap-2"><ion-icon class="text-emerald-500 text-xl" name="server-outline"></ion-icon> MySQL Database</span>
                <span class="text-slate-300">•</span>
                <span class="flex items-center gap-2"><ion-icon class="text-emerald-500 text-xl" name="code-working-outline"></ion-icon> PHP 8.x Engine</span>
                <span class="text-slate-300">•</span>
                <span class="flex items-center gap-2"><ion-icon class="text-emerald-500 text-xl" name="git-branch-outline"></ion-icon> Dynamic Many-To-Many</span>
                <span class="text-slate-300">•</span>
            </div>
        </div>
    </section>

    <!-- ========================================== -->
    <!-- 2. LES 4 MENUS PRINCIPAUX DU SITE          -->
    <!-- ========================================== -->
    <section id="quick-access" class="max-w-7xl mx-auto px-6 py-20 lg:py-28">
        <div class="text-center max-w-2xl mx-auto mb-16 reveal">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900">
                Explorez vos fonctionnalités
            </h2>
            <p class="text-slate-500 mt-4">
                Accédez directement aux 4 grands modules de votre application ManyToMany.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- Menu 1: ACCUEIL -->
            <a href="" class="reveal group bg-white border border-slate-200/80 p-6 rounded-3xl hover:shadow-xl hover:shadow-emerald-500/10 hover:border-emerald-300 transition-all duration-300 hover:-translate-y-2 flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 bg-emerald-50 text-emerald-500 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-emerald-500 group-hover:text-white transition-all duration-300">
                        <ion-icon class="text-2xl" name="home-outline"></ion-icon>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 group-hover:text-emerald-600 transition-colors">Accueil</h3>
                    <p class="text-xs text-slate-500 mt-2 leading-relaxed">
                        Vue générale du système, synthèses et tableau de bord principal.
                    </p>
                </div>
                <div class="mt-6 flex items-center gap-1 text-xs font-bold text-emerald-500 group-hover:translate-x-1 transition-transform">
                    Accéder <ion-icon name="arrow-forward-outline"></ion-icon>
                </div>
            </a>

            <!-- Menu 2: ORDER -->
            <a href="" class="reveal group bg-white border border-slate-200/80 p-6 rounded-3xl hover:shadow-xl hover:shadow-emerald-500/10 hover:border-emerald-300 transition-all duration-300 hover:-translate-y-2 flex flex-col justify-between" style="transition-delay: 100ms;">
                <div>
                    <div class="w-12 h-12 bg-emerald-50 text-emerald-500 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-emerald-500 group-hover:text-white transition-all duration-300">
                        <ion-icon class="text-2xl" name="cart-outline"></ion-icon>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 group-hover:text-emerald-600 transition-colors">Order</h3>
                    <p class="text-xs text-slate-500 mt-2 leading-relaxed">
                        Gestion complète de toutes les commandes enregistrées et suivis de statut.
                    </p>
                </div>
                <div class="mt-6 flex items-center gap-1 text-xs font-bold text-emerald-500 group-hover:translate-x-1 transition-transform">
                    Voir les commandes <ion-icon name="arrow-forward-outline"></ion-icon>
                </div>
            </a>

            <!-- Menu 3: PRODUIT -->
            <a href="" class="reveal group bg-white border border-slate-200/80 p-6 rounded-3xl hover:shadow-xl hover:shadow-emerald-500/10 hover:border-emerald-300 transition-all duration-300 hover:-translate-y-2 flex flex-col justify-between" style="transition-delay: 200ms;">
                <div>
                    <div class="w-12 h-12 bg-emerald-50 text-emerald-500 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-emerald-500 group-hover:text-white transition-all duration-300">
                        <ion-icon class="text-2xl" name="cube-outline"></ion-icon>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 group-hover:text-emerald-600 transition-colors">Produit</h3>
                    <p class="text-xs text-slate-500 mt-2 leading-relaxed">
                        Inventaire, ajout et modification de vos produits au catalogue.
                    </p>
                </div>
                <div class="mt-6 flex items-center gap-1 text-xs font-bold text-emerald-500 group-hover:translate-x-1 transition-transform">
                    Gérer le catalogue <ion-icon name="arrow-forward-outline"></ion-icon>
                </div>
            </a>

            <!-- Menu 4: TOTAL OWT -->
            <a href="" class="reveal group bg-white border border-slate-200/80 p-6 rounded-3xl hover:shadow-xl hover:shadow-emerald-500/10 hover:border-emerald-300 transition-all duration-300 hover:-translate-y-2 flex flex-col justify-between" style="transition-delay: 300ms;">
                <div>
                    <div class="w-12 h-12 bg-emerald-50 text-emerald-500 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-emerald-500 group-hover:text-white transition-all duration-300">
                        <ion-icon class="text-2xl" name="calculator-outline"></ion-icon>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 group-hover:text-emerald-600 transition-colors">Total owt</h3>
                    <p class="text-xs text-slate-500 mt-2 leading-relaxed">
                        Calculs automatiques, totaux généraux et synthèses financières.
                    </p>
                </div>
                <div class="mt-6 flex items-center gap-1 text-xs font-bold text-emerald-500 group-hover:translate-x-1 transition-transform">
                    Consulter le total <ion-icon name="arrow-forward-outline"></ion-icon>
                </div>
            </a>

        </div>
    </section>

    <!-- ========================================== -->
    <!-- DEMO INTERACTIVE                           -->
    <!-- ========================================== -->
    <section id="demo" class="max-w-4xl mx-auto px-6 py-16 mb-24 reveal bg-white border border-slate-200 rounded-3xl shadow-xl shadow-emerald-500/5 relative overflow-hidden">
        <div class="absolute -top-20 -left-20 w-48 h-48 bg-emerald-100/50 rounded-full blur-2xl"></div>
        
        <div class="text-center mb-8 relative z-10">
            <h3 class="text-2xl font-extrabold text-slate-900">Module Interactif</h3>
            <p class="text-xs text-slate-500 mt-1">Testez les animations d'actions au clic</p>
        </div>

        <div class="flex flex-col sm:flex-row items-center justify-around gap-6 py-4 relative z-10">
            <button onclick="triggerDemoAnimation('success')" 
                class="px-6 py-3 bg-slate-50 hover:bg-emerald-50 text-slate-700 hover:text-emerald-600 border border-slate-200 hover:border-emerald-300 font-bold rounded-xl active:scale-95 transition-all duration-150">
                Lancer Succès
            </button>

            <div id="statusBox" class="w-48 h-24 bg-slate-100 rounded-2xl flex flex-col items-center justify-center transition-all duration-500 border border-slate-200">
                <span id="statusIcon" class="text-2xl text-slate-400 transition-transform duration-300">
                    <ion-icon name="ellipse-outline"></ion-icon>
                </span>
                <span id="statusText" class="text-sm font-semibold text-slate-500 mt-1">En attente...</span>
            </div>

            <button onclick="triggerDemoAnimation('error')" 
                class="px-6 py-3 bg-slate-50 hover:bg-emerald-50 text-slate-700 hover:text-emerald-600 border border-slate-200 hover:border-emerald-300 font-bold rounded-xl active:scale-95 transition-all duration-150">
                Lancer Erreur
            </button>
        </div>
    </section>

</div>

<!-- SCRIPTS JS -->
<script>
    // 1. Animation 3D Tilt Card
    const card = document.getElementById('tiltCard');
    if(card) {
        card.addEventListener('mousemove', (e) => {
            const cardRect = card.getBoundingClientRect();
            const mouseX = (e.clientX - cardRect.left) / cardRect.width - 0.5;
            const mouseY = (e.clientY - cardRect.top) / cardRect.height - 0.5;
            card.style.transform = `rotateX(${(-mouseY * 25).toFixed(2)}deg) rotateY(${(mouseX * 25).toFixed(2)}deg) scale3d(1.03, 1.03, 1.03)`;
        });
        card.addEventListener('mouseleave', () => {
            card.style.transform = 'rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)';
        });
    }

    // 2. Scroll Reveal
    const reveals = document.querySelectorAll('.reveal');
    const revealOnScroll = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15 });

    reveals.forEach(element => revealOnScroll.observe(element));

    // 3. Demo Click Animation
    function triggerDemoAnimation(type) {
        const box = document.getElementById('statusBox');
        const icon = document.getElementById('statusIcon');
        const text = document.getElementById('statusText');

        box.className = "w-48 h-24 rounded-2xl flex flex-col items-center justify-center transition-all duration-300 border scale-95";
        
        setTimeout(() => {
            if (type === 'success') {
                box.className = "w-48 h-24 rounded-2xl flex flex-col items-center justify-center transition-all duration-500 border border-emerald-200 bg-emerald-50 text-emerald-700 shadow-lg shadow-emerald-500/10 scale-100";
                icon.innerHTML = '<ion-icon name="checkmark-circle-outline"></ion-icon>';
                icon.style.transform = "scale(1.2) rotate(360deg)";
                text.textContent = "Succès !";
            } else {
                box.className = "w-48 h-24 rounded-2xl flex flex-col items-center justify-center transition-all duration-500 border border-rose-200 bg-rose-50 text-rose-700 shadow-lg shadow-rose-500/10 scale-100";
                icon.innerHTML = '<ion-icon name="alert-circle-outline"></ion-icon>';
                icon.style.transform = "scale(1.2) rotate(-15deg)";
                text.textContent = "Erreur !";
            }
        }, 150);
    }
</script>
@endsection