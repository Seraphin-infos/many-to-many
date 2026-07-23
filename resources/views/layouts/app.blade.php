<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script type="module" src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.js"></script>

    <title>Document</title>
</head>

<body class="min-h-screen flex flex-col bg-slate-50 text-slate-800">

    <header class="bg-white border-b border-emerald-100 relative z-50">
        <div class="flex justify-between items-center w-[92%] mx-auto py-3">

            <div class="logo">
                <img class="w-16" src="{{ asset('assets/icon/letter-n.png') }}" alt="Logo N">
            </div>

            <nav class="nav-links duration-500 md:static md:min-h-fit md:w-auto absolute min-h-[40vh] left-0 top-[-400%] w-full flex items-center px-5 bg-white md:bg-transparent border-b border-emerald-100 md:border-none z-40">
                <ul class="md:flex-row flex-col flex md:items-center gap-[4vw] gap-6 w-full">
                    <li><a href="" class="text-slate-700 hover:text-emerald-500 font-semibold transition-colors">Accueil</a></li>
                    <li><a href="" class="text-slate-700 hover:text-emerald-500 font-semibold transition-colors">Order</a></li>
                    <li><a href="" class="text-slate-700 hover:text-emerald-500 font-semibold transition-colors">Produit</a></li>
                    <li><a href="" class="text-slate-700 hover:text-emerald-500 font-semibold transition-colors">Total owt</a></li>
                </ul>
            </nav>

            <div class="flex items-center gap-6 relative z-50">
                <button class="bg-emerald-500 text-white px-5 py-2 rounded-full hover:bg-emerald-600 shadow-md shadow-emerald-500/20 transition-all font-semibold text-sm">
                    Connexion
                </button>
                <ion-icon onclick="onToggleMenu(this)" class="text-3xl cursor-pointer md:hidden text-slate-700" name="menu"></ion-icon>
            </div>

        </div>
    </header>

    <main class="flex-grow">
        @yield('content')
    </main>

    <footer class="bg-white border-t border-slate-200/80 text-slate-600">
        <div class="max-w-7xl mx-auto px-4 pt-16 pb-8 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 pb-12 border-b border-slate-100">

                <div class="md:col-span-6 lg:col-span-7 grid grid-cols-1 sm:grid-cols-12 gap-6">

                    <div class="sm:col-span-4 space-y-4">
                        <h3 class="text-xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-emerald-500 to-teal-600">
                            ManyToMany
                        </h3>
                        <p class="text-sm text-slate-500 leading-relaxed">
                            Une plateforme moderne pour gérer vos relations de données.
                        </p>
                    </div>

                    <div class="sm:col-span-8 grid grid-cols-2 gap-4">
                        <div>
                            <h4 class="text-xs font-bold uppercase tracking-wider text-slate-900 mb-4">Navigation</h4>
                            <ul class="space-y-2.5 text-sm">
                                <li><a href="" class="hover:text-emerald-500 transition-colors">Accueil</a></li>
                                <li><a href="" class="hover:text-emerald-500 transition-colors">Order</a></li>
                                <li><a href="" class="hover:text-emerald-500 transition-colors">Produit</a></li>
                                <li><a href="" class="hover:text-emerald-500 transition-colors">Total owt</a></li>
                            </ul>
                        </div>

                        <div>
                            <h4 class="text-xs font-bold uppercase tracking-wider text-slate-900 mb-4">Support</h4>
                            <ul class="space-y-2.5 text-sm">
                                <li><a href="" class="hover:text-emerald-500 transition-colors">Aide & FAQ</a></li>
                                <li><a href="" class="hover:text-emerald-500 transition-colors">Contact</a></li>
                                <li><a href="" class="hover:text-emerald-500 transition-colors">Confidentialité</a></li>
                                <li><a href="" class="hover:text-emerald-500 transition-colors">Conditions</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="md:col-span-6 lg:col-span-5 space-y-4">
                    <div>
                        <h4 class="text-xs font-bold uppercase tracking-wider text-slate-900 mb-1">Contactez-nous</h4>
                        <p class="text-xs text-slate-400">Une suggestion ? Écrivez-nous directement.</p>
                    </div>

                    <form action="#" method="POST" class="space-y-2">
                        @csrf
                        <input type="email" name="email" required placeholder="Votre adresse email"
                            class="w-full px-3 py-2 text-xs border border-slate-200 bg-slate-50 text-slate-800 rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:bg-white transition-all">

                        <textarea name="message" required rows="2" placeholder="Votre message..."
                            class="w-full px-3 py-2 text-xs border border-slate-200 bg-slate-50 text-slate-800 rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:bg-white transition-all resize-none"></textarea>

                        <button type="submit"
                            class="w-full py-2 bg-emerald-500 hover:bg-emerald-600 text-white font-bold text-xs rounded-lg shadow-md shadow-emerald-500/10 hover:shadow-emerald-500/20 transition-all">
                            Envoyer le message
                        </button>
                    </form>
                </div>

            </div>

            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4">

                <p class="text-xs text-slate-400 order-2 sm:order-1">
                    &copy; 2026 ManyToMany. Tous droits réservés.
                </p>

                <div class="flex items-center gap-4 order-1 sm:order-2">

                    <a href="#" class="p-2 text-slate-400 hover:text-emerald-500 hover:bg-emerald-50/50 rounded-full transition-all" title="Facebook">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c4.56-.93 8-4.96 8-9.75z" />
                        </svg>
                    </a>

                    <a href="#" class="p-2 text-slate-400 hover:text-emerald-500 hover:bg-emerald-50/50 rounded-full transition-all" title="Twitter / X">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                        </svg>
                    </a>

                    <a href="#" class="p-2 text-slate-400 hover:text-emerald-500 hover:bg-emerald-50/50 rounded-full transition-all" title="GitHub">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                        </svg>
                    </a>

                </div>

            </div>

        </div>
    </footer>
    <script>
        const navLinks = document.querySelector('.nav-links')
        const onToggleMenu = (e) => {
            e.name = e.name === 'menu' ? 'close' : 'menu';
            // S'ouvre proprement sous le header
            navLinks.classList.toggle('top-[100%]')
        }
    </script>
</body>

</html>