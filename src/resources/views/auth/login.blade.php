@extends('layouts.guest')

@section('title', 'Connexion')

@section('content')
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-slate-900">Bon retour !</h2>
        <p class="text-slate-500 text-sm">Connectez-vous pour gérer vos dépenses.</p>
    </div>

    @if ($errors->any())
        <div class="mb-4 p-4 bg-red-50 border-l-4 border-red-500 text-red-700 text-sm">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('login') }}" method="POST" class="space-y-5">
        @csrf

        <div>
            <label for="email" class="block text-sm font-semibold text-slate-700">Adresse Email</label>
            <div class="mt-1 relative">
                <input type="email" name="email" id="email" required
                    class="block w-full px-4 py-3 rounded-xl border-slate-200 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all"
                    placeholder="nom@exemple.com" value="{{ old('email') }}">
            </div>
        </div>

        <div>
            <div class="flex items-center justify-between">
                <label for="password" class="block text-sm font-semibold text-slate-700">Mot de passe</label>
                <a href="{{ route('password.request') }}" class="text-xs font-bold text-indigo-600 hover:text-indigo-500">Oublié ?</a>
            </div>
            <div class="mt-1">
                <input type="password" name="password" id="password" required
                    class="block w-full px-4 py-3 rounded-xl border-slate-200 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all"
                    placeholder="••••••••">
            </div>
        </div>

        <div class="flex items-center">
            <input type="checkbox" name="remember" id="remember" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-slate-300 rounded">
            <label for="remember" class="ml-2 block text-sm text-slate-600">Se souvenir de moi</label>
        </div>

        <button type="submit"
            class="w-full flex justify-center py-3 px-4 border border-transparent rounded-xl shadow-sm text-sm font-bold text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all transform active:scale-[0.98]">
            Se connecter
        </button>
    </form>

    <div class="mt-6 text-center">
        <p class="text-sm text-slate-600">
            Pas encore de compte ?
            <a href="{{ route('register') }}" class="font-bold text-indigo-600 hover:text-indigo-500">Inscrivez-vous</a>
        </p>
    </div>
@endsection
