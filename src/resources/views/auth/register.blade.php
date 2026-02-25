@extends('layouts.guest')

@section('title', 'Inscription')

@section('content')
    <div class="mb-6 text-center">
        <h2 class="text-2xl font-bold text-slate-900">Créer un compte</h2>
        <p class="text-slate-500 text-sm">Rejoignez une colocation ou créez la vôtre dès aujourd'hui.</p>
    </div>

    @if ($errors->any())
        <div class="mb-4 p-4 bg-red-50 border-l-4 border-red-500 text-red-700 text-sm rounded-r-lg">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('register') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label for="name" class="block text-sm font-semibold text-slate-700">Nom Complet</label>
            <div class="mt-1">
                <input type="text" name="name" id="name" required autofocus
                    class="block w-full px-4 py-3 rounded-xl border-slate-200 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all"
                    placeholder="Ex: Jean Dupont" value="{{ old('name') }}">
            </div>
        </div>

        <div>
            <label for="email" class="block text-sm font-semibold text-slate-700">Adresse Email</label>
            <div class="mt-1">
                <input type="email" name="email" id="email" required
                    class="block w-full px-4 py-3 rounded-xl border-slate-200 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all"
                    placeholder="jean@exemple.com" value="{{ old('email') }}">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="password" class="block text-sm font-semibold text-slate-700">Mot de passe</label>
                <div class="mt-1">
                    <input type="password" name="password" id="password" required
                        class="block w-full px-4 py-3 rounded-xl border-slate-200 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all"
                        placeholder="••••••••">
                </div>
            </div>
            <div>
                <label for="password_confirmation" class="block text-sm font-semibold text-slate-700">Confirmation</label>
                <div class="mt-1">
                    <input type="password" name="password_confirmation" id="password_confirmation" required
                        class="block w-full px-4 py-3 rounded-xl border-slate-200 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all"
                        placeholder="••••••••">
                </div>
            </div>
        </div>

        <div class=" p-3 bg-indigo-50 rounded-lg flex items-start gap-3 border border-indigo-100">
            <svg class="w-5 h-5 text-indigo-600 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <p class="text-xs text-indigo-700">
                En vous inscrivant, vous pourrez créer une nouvelle colocation ou en rejoindre une via une invitation.
            </p>
        </div>

        <button type="submit"
            class="w-full flex justify-center py-3 px-4 border border-transparent rounded-xl shadow-lg shadow-indigo-200 text-sm font-bold text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all transform active:scale-[0.98] mt-4">
            Créer mon compte
        </button>
    </form>

    <div class="mt-6 text-center">
        <p class="text-sm text-slate-600">
            Déjà membre ?
            <a href="{{ route('login') }}" class="font-bold text-indigo-600 hover:text-indigo-500 transition">Connectez-vous</a>
        </p>
    </div>


@endsection
