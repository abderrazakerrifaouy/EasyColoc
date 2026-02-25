<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - ColocApp</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-slate-50 font-sans antialiased">

    <div class="flex h-screen overflow-hidden">
        <aside class="w-64 bg-slate-900 text-white hidden lg:flex flex-col">
            <div class="p-6 text-2xl font-bold border-b border-slate-800">
                COLOC<span class="text-indigo-400">APP</span>
            </div>
            <nav class="flex-1 p-4 space-y-2">
                <a href="/dashboard"
                    class="block p-3 rounded-lg hover:bg-slate-800 {{ request()->is('dashboard') ? 'bg-indigo-100' : '' }}">Dashboard</a>
                <a href="/expenses" class="block p-3 rounded-lg hover:bg-slate-800">Dépenses</a>
                <a href="/colocation" class="block p-3 rounded-lg hover:bg-slate-800">Ma Coloc</a>
            </nav>
        </aside>

        <div class="flex-1 flex flex-col overflow-hidden">
            <header class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-8">
                <h2 class="text-xl font-semibold text-slate-800">
                    @yield('header_title')
                </h2>
                <div class="flex items-center gap-4">
                    <span class="text-sm font-medium">{{ Auth::user()->name }}</span>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="text-red-500 text-sm font-bold">Déconnexion</button>
                    </form>
                </div>
            </header>

            <main class="flex-1 overflow-y-auto p-8">
                @yield('content')
            </main>
        </div>
    </div>

    @stack('scripts')
</body>

</html>
