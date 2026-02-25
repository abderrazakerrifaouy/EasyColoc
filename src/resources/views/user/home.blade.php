{{-- @extends('layouts.app')

@section('title', 'Tableau de bord')
@section('header_title', 'Aperçu de la Colocation "Les Palmiers"')

@section('content')
<div class="space-y-8">

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100 border-b-4 border-b-emerald-500">
            <div class="flex items-center justify-between mb-4">
                <div class="p-3 bg-emerald-50 text-emerald-600 rounded-2xl">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Mon Solde</span>
            </div>
            <h3 class="text-3xl font-black text-emerald-600">+42.50 €</h3>
            <p class="text-sm text-slate-500 mt-1">On vous doit de l'argent</p>
        </div>

        <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100">
            <div class="flex items-center justify-between mb-4">
                <div class="p-3 bg-indigo-50 text-indigo-600 rounded-2xl">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                </div>
                <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Total Février</span>
            </div>
            <h3 class="text-3xl font-black text-slate-900">856.20 €</h3>
            <p class="text-sm text-slate-500 mt-1 italic">45 dépenses ce mois</p>
        </div>

        <div class="bg-slate-900 p-6 rounded-3xl shadow-xl shadow-slate-200">
            <div class="flex items-center justify-between mb-4">
                <div class="p-3 bg-indigo-500/20 text-indigo-400 rounded-2xl">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                </div>
                <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Ma Réputation</span>
            </div>
            <h3 class="text-3xl font-black text-white">+12</h3>
            <div class="mt-2 text-xs text-indigo-300 font-medium italic">"Excellent payeur"</div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

        <div class="bg-white rounded-3xl shadow-sm border border-slate-100 overflow-hidden">
            <div class="p-6 border-b border-slate-50 flex justify-between items-center bg-slate-50/50">
                <h4 class="font-bold text-slate-800 tracking-tight">Dépenses Récentes</h4>
                <button class="text-indigo-600 text-xs font-bold hover:underline">Ajouter +</button>
            </div>
            <div class="p-6 space-y-5">
                <div class="flex items-center justify-between group cursor-pointer">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-amber-50 text-amber-600 rounded-2xl flex items-center justify-center text-xl">🛒</div>
                        <div>
                            <p class="font-bold text-slate-900">Courses Carrefour</p>
                            <p class="text-xs text-slate-400">Il y a 2h • Par <span class="text-slate-600 font-medium">Yassine</span></p>
                        </div>
                    </div>
                    <span class="font-black text-slate-900">84.00 €</span>
                </div>

                <div class="flex items-center justify-between group cursor-pointer">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-xl">⚡</div>
                        <div>
                            <p class="font-bold text-slate-900">Facture Électricité</p>
                            <p class="text-xs text-slate-400">Hier • Par <span class="text-slate-600 font-medium">Moi</span></p>
                        </div>
                    </div>
                    <span class="font-black text-slate-900">120.50 €</span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-3xl shadow-sm border border-slate-100 overflow-hidden">
            <div class="p-6 border-b border-slate-50 bg-indigo-600">
                <h4 class="font-bold text-white">Balances de la Coloc</h4>
            </div>
            <div class="p-6 space-y-4">
                <div class="flex items-center justify-between p-4 bg-slate-50 rounded-2xl border border-slate-100">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-indigo-200 border-2 border-white flex items-center justify-center font-bold text-indigo-700 text-xs">SL</div>
                        <p class="text-sm font-medium text-slate-700">Sara Lee <span class="text-slate-400 text-xs">(Membre)</span></p>
                    </div>
                    <span class="text-sm font-black text-rose-500">-12.50 €</span>
                </div>

                <div class="flex items-center justify-between p-4 bg-slate-50 rounded-2xl border border-slate-100">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-emerald-200 border-2 border-white flex items-center justify-center font-bold text-emerald-700 text-xs">YM</div>
                        <p class="text-sm font-medium text-slate-700">Yassine M. <span class="text-indigo-600 text-xs font-bold">(Owner)</span></p>
                    </div>
                    <span class="text-sm font-black text-emerald-600">+55.00 €</span>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection --}}
@extends('layouts.app')

@section('title', 'Bienvenue')
@section('header_title', 'Commencez l\'aventure')

@section('content')
<div class="max-w-4xl mx-auto pt-12 text-center">

    <div class="mb-8">
        <div class="inline-flex items-center justify-center w-24 h-24 bg-indigo-100 text-indigo-600 rounded-full mb-4">
            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
            </svg>
        </div>
        <h2 class="text-3xl font-black text-slate-900 italic">Vous n'avez pas encore de colocation !</h2>
        <p class="text-slate-500 mt-2 max-w-md mx-auto">Pour commencer à gérer vos dépenses partagées, vous devez soit créer un nouveau groupe, soit en rejoindre un existant.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-12">

        <div class="bg-white p-8 rounded-3xl border-2 border-slate-100 hover:border-indigo-500 transition-all group shadow-sm hover:shadow-xl">
            <div class="w-16 h-16 bg-indigo-600 text-white rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg shadow-indigo-200 group-hover:scale-110 transition-transform">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
            </div>
            <h3 class="text-xl font-bold text-slate-900 mb-2">Créer une colocation</h3>
            <p class="text-slate-500 text-sm mb-6">Devenez l'administrateur de votre groupe, invitez vos amis et gérez les catégories.</p>
            <a href="" class="inline-block w-full py-3 px-6 bg-slate-900 text-white font-bold rounded-xl hover:bg-indigo-600 transition">
                Démarrer un groupe
            </a>
        </div>

        <div class="bg-white p-8 rounded-3xl border-2 border-slate-100 hover:border-emerald-500 transition-all group shadow-sm hover:shadow-xl">
            <div class="w-16 h-16 bg-emerald-500 text-white rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg shadow-emerald-200 group-hover:scale-110 transition-transform">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
                </svg>
            </div>
            <h3 class="text-xl font-bold text-slate-900 mb-2">Rejoindre via un code</h3>
            <p class="text-slate-500 text-sm mb-6">Vous avez reçu une invitation ? Entrez le token unique envoyé par votre colocataire par email.</p>
            <a href="{{-- route('invitation.join') --}}" class="inline-block w-full py-3 px-6 bg-slate-100 text-slate-900 font-bold rounded-xl hover:bg-emerald-500 hover:text-white transition">
                Saisir un token
            </a>
        </div>

    </div>

    <div class="mt-16 p-6 bg-slate-100 rounded-2xl inline-flex items-center gap-3 border border-slate-200">
        <span class="flex-shrink-0 w-8 h-8 bg-white rounded-full flex items-center justify-center shadow-sm">💡</span>
        <p class="text-xs text-slate-600 font-medium">
            Rappel : Vous ne pouvez faire partie que d'<strong>une seule colocation active</strong> à la fois.
        </p>
    </div>
</div>
@endsection
