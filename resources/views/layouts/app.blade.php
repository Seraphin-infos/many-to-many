<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body>
    <header class="sticky top-0 z-50 bg-gray-900/80 backdrop-blur-md border-b border-teal-500/10 px-6 py-4">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-4">

            <div class="logo">
                <h2 class="text-2xl font-extrabold tracking-tight text-transparent bg-clip-text bg-gradient-to-r from-teal-400 to-cyan-400">
                    ManyToMany
                </h2>
            </div>

            <nav class="w-full sm:w-auto">
                <ul class="flex flex-wrap items-center justify-center gap-1 sm:gap-2 text-sm font-semibold">
                    <li><a href="" class="px-4 py-2 rounded-xl text-slate-300 bg-teal-500/10 border border-teal-500/5 transition-all duration-300">Accueil</a></li>

                    <li><a href="" class="px-4 py-2 rounded-xl text-slate-300 hover:text-teal-300 hover:bg-teal-500/5 transition-all duration-300">Order</a></li>

                    <li><a href="" class="px-4 py-2 rounded-xl text-slate-300 hover:text-teal-300 hover:bg-teal-500/5 transition-all duration-300">Produit</a></li>

                    <li><a href="" class="px-4 py-2 rounded-xl text-slate-300 hover:text-teal-300 hover:bg-teal-500/5 transition-all duration-300">Total owt</a></li>
                </ul>
            </nav>

        </div>
    </header>

    @yield('content')

    <footer>
        @copyright 2026 ManyToMany
    </footer>

</body>

</html>