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
            @if (Auth::user()->memberships()->where('is_approved', false)->exists())
                <nav class="flex-1 p-4 space-y-2">
                    <a href="/dashboard"
                        class="block p-3 rounded-lg hover:bg-slate-800 {{ request()->is('dashboard/user') || request()->is('dashboard/owner') ? 'bg-indigo-100' : '' }}">Dashboard</a>
                    <a href="/expenses"
                        class="block p-3 rounded-lg hover:bg-slate-800 {{ request()->is('expenses') ? 'bg-indigo-100' : '' }}">Dépenses</a>
                    <a href="/colocation"
                        class="block p-3 rounded-lg hover:bg-slate-800 {{ request()->is('colocation') ? 'bg-indigo-100' : '' }}">Ma
                        Coloc</a>
                </nav>
            @else
                <span
                    class="hidden md:block text-[10px] font-black text-slate-300 uppercase tracking-widest border border-slate-100 px-3 py-1 rounded-full">
                    Mode Setup
                </span>
            @endif
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
        @if (session('success'))
            <div  id="prompte" class="absolute bottom-4 right-4 bg-emerald-500 text-white px-4 py-2 rounded-lg shadow-lg">
                {{ session('success') }}
            </div>
        @endif
    </div>
    <script>
    
    </script>
    @stack('scripts')
</body>

</html>
