@extends('layouts.app')

@section('title', 'Créer un Groupe')
@section('header_title', 'Lancer une nouvelle Coloc')

@section('content')
<div class="max-w-2xl mx-auto">
    <a href="{{ route('dashboard') }}" class="inline-flex items-center text-sm font-bold text-slate-500 hover:text-indigo-600 mb-6 transition">
        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
        Retour au tableau de bord
    </a>

    <div class="bg-white rounded-[2rem] shadow-2xl shadow-slate-200/60 border border-slate-100 overflow-hidden">
        <div class="bg-slate-900 p-10 text-center relative overflow-hidden">
            <div class="relative z-10">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-indigo-500 text-white rounded-3xl rotate-3 shadow-lg mb-4">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
                <h2 class="text-3xl font-black text-white italic">Créer un Groupe</h2>
                <p class="text-slate-400 mt-2">Vous allez devenir l'administrateur de ce groupe.</p>
            </div>
            <div class="absolute top-0 right-0 -mr-16 -mt-16 w-64 h-64 bg-indigo-600/10 rounded-full blur-3xl"></div>
        </div>

        <form action="{{ route('colocation.store') }}" method="POST" class="p-10 space-y-8">
            @csrf

            <div class="space-y-2">
                <label for="name" class="block text-sm font-black text-slate-800 uppercase tracking-widest">Nom de la Colocation</label>
                <input type="text" name="name" id="name" required
                    class="block w-full px-6 py-5 rounded-2xl border-2 border-slate-100 bg-slate-50 focus:bg-white focus:border-indigo-500 focus:ring-0 transition-all text-xl font-bold text-slate-900 shadow-sm"
                    placeholder="Ex: Villa des Roses ">
            </div>

            <div class="space-y-2">
                <label for="category" class="block text-sm font-black text-slate-800 uppercase tracking-widest">Première Catégorie</label>
                <div class="relative">
                    <input type="text" name="category" id="category" required
                        class="block w-full px-6 py-5 rounded-2xl border-2 border-slate-100 bg-slate-50 focus:bg-white focus:border-indigo-500 transition-all font-semibold text-slate-700"
                        placeholder="Ex: Courses alimentaires, Loyer, Internet...">
                    <span class="absolute right-6 top-1/2 -translate-y-1/2 text-slate-400 text-xs font-bold uppercase tracking-tighter bg-white px-2 py-1 rounded-md border border-slate-100">Requis</span>
                </div>
                <p class="text-xs text-slate-400 italic">Une catégorie est nécessaire pour commencer à ajouter des factures.</p>
            </div>

            <hr class="border-slate-100">

            <div class="flex gap-4 p-5 bg-indigo-50 rounded-2xl border border-indigo-100">
                <span class="text-2xl">🛡️</span>
                <div>
                    <h4 class="text-sm font-bold text-indigo-900">Rôle d'administrateur</h4>
                    <p class="text-xs text-indigo-700/80 leading-relaxed mt-1">
                        Votre compte sera automatiquement lié à ce groupe avec le rôle <strong>'owner'</strong>. Vous seul pourrez valider les nouveaux membres.
                    </p>
                </div>
            </div>

            <button type="submit"
                class="w-full py-5 px-6 rounded-2xl shadow-xl shadow-indigo-200 text-lg font-black text-white bg-indigo-600 hover:bg-indigo-700 hover:shadow-indigo-300 transition-all transform active:scale-[0.97] flex items-center justify-center gap-3">
                <span>Créer le groupe maintenant</span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
            </button>
        </form>
    </div>
</div>
@endsection
