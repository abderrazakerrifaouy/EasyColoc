@extends('layouts.app')

@section('title', 'Mon Dashboard 👑')
@section('header_title', 'Gestion & Mes Dépenses')

@section('content')
<div class="space-y-8">

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-3xl border-b-4 shadow-sm {{ $solde > 0 ? 'border-emerald-500' : 'border-rose-500' }}">
            <p class="text-slate-400 text-[10px] font-black uppercase tracking-widest mb-1">Mon Solde Perso</p>
                    <h3 class="text-2xl font-black {{ $solde > 0 ? 'text-emerald-600' : 'text-rose-600' }}">{{ $solde }} €</h3>
            <p class="text-[10px] text-slate-400 mt-1 italic">Calculé selon vos factures</p>
        </div>
        <div class="bg-slate-900 p-6 rounded-3xl shadow-xl">
            <p class="text-indigo-300 text-[10px] font-black uppercase tracking-widest mb-1">Ma Réputation</p>
            <h3 class="text-2xl font-black text-white">+{{ Auth::user()->reputation }}</h3>
            <p class="text-[10px] text-indigo-400 mt-1">Score de fiabilité</p>
        </div>
        <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm">
            <p class="text-slate-400 text-[10px] font-black uppercase tracking-widest mb-1">État du Groupe</p>
            <h3 class="text-2xl font-black text-slate-900">04 Membres</h3>
            <p class="text-[10px] text-slate-400 mt-1">Coloc: "Appart Centre"</p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">

        <div class="lg:col-span-4 space-y-6">
            <h4 class="text-xs font-black text-slate-400 uppercase tracking-tighter ml-2">Administration</h4>

            <div class="bg-emerald-600 p-6 rounded-[2rem] shadow-lg shadow-emerald-100 text-white">
                <p class="text-[10px] font-black uppercase mb-3">Inviter un ami</p>
                <form action="#" method="POST" class="space-y-2">
                    @csrf
                    <input type="email" placeholder="Email..." class="w-full px-4 py-3 rounded-xl border-none bg-white/20 text-white placeholder-emerald-100 text-sm font-bold">
                    <button class="w-full py-2 bg-white text-emerald-600 font-black rounded-xl text-xs uppercase">Envoyer</button>
                </form>
            </div>

            <div class="bg-indigo-600 p-6 rounded-[2rem] shadow-lg shadow-indigo-100 text-white">
                <p class="text-[10px] font-black uppercase mb-3"> Nouvelle Catégorie</p>
                <form action="{{ route('create_category') }}" method="POST" class="space-y-2">
                    @csrf
                    <input type="text" placeholder="Nom (ex: Loyer)" class="w-full px-4 py-3 rounded-xl border-none bg-white/20 text-white placeholder-indigo-100 text-sm font-bold" name="name">
                    <input type="hidden" name="group_id" value="{{ Auth::user()->memberships()->where('is_approved', false)->first()->group_id }}">
                    <button class="w-full py-2 bg-white text-indigo-600 font-black rounded-xl text-xs uppercase">Créer</button>
                </form>
            </div>
        </div>

        <div class="lg:col-span-8 space-y-6">

            <div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden">
                <div class="p-5 border-b border-slate-50 bg-slate-50/30 flex justify-between items-center">
                    <h4 class="font-black text-slate-800 text-[10px] uppercase tracking-widest">Mes Remboursements</h4>
                    <span class="text-[10px] font-bold text-rose-500 bg-rose-50 px-2 py-1 rounded">2 en attente</span>
                </div>
                <div class="p-4 space-y-3">
                    <div class="flex items-center justify-between p-4 bg-slate-50 rounded-2xl border border-dashed border-slate-200">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-slate-200 flex items-center justify-center font-bold text-[10px]">SL</div>
                            <p class="text-sm font-medium text-slate-700 font-bold italic underline">Je dois à Sara Lee</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <span class="text-rose-600 font-black">15.00 €</span>
                            <button class="px-3 py-1 bg-slate-900 text-white text-[10px] font-bold rounded-lg uppercase">Régler</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden">
                <div class="p-6 border-b border-slate-50 flex justify-between items-center bg-white">
                    <h4 class="font-black text-slate-800 uppercase text-xs tracking-widest">Historique Factures</h4>
                    <button class="px-5 py-2.5 bg-indigo-600 text-white text-[11px] font-black rounded-xl uppercase tracking-widest">
                        + Ajouter Dépense
                    </button>
                </div>
                <div class="divide-y divide-slate-50">
                    <div class="p-5 flex items-center justify-between hover:bg-slate-50 transition">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 bg-slate-100 rounded-xl flex items-center justify-center font-bold text-slate-400">#</div>
                            <div>
                                <p class="font-bold text-slate-900 text-sm">Courses Carrefour</p>
                                <p class="text-[10px] text-slate-400 font-bold uppercase italic">Catégorie: Alimentation</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-black text-slate-900">84.00 €</p>
                            <p class="text-[10px] text-slate-300 font-bold uppercase italic">Payé par Moi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
