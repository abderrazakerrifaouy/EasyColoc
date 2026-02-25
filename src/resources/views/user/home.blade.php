
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
            <a href="{{ route('create.Colocation') }}" class="inline-block w-full py-3 px-6 bg-slate-900 text-white font-bold rounded-xl hover:bg-indigo-600 transition">
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
        <p class="text-xs text-slate-600 font-medium">
            Rappel : Vous ne pouvez faire partie que d'<strong>une seule colocation active</strong> à la fois.
        </p>
    </div>
</div>
@endsection
