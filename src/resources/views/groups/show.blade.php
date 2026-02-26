@extends('layouts.app')

@section('title', 'Ma Colocation')

@section('content')
<div class="max-w-5xl mx-auto space-y-8">

    <div class="bg-slate-900 rounded-[2rem] p-8 shadow-xl border border-slate-800">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
            <div>
                <span class="text-indigo-400 text-[10px] font-black uppercase tracking-widest">Groupe Actuel</span>
                <h1 class="text-3xl font-black text-white uppercase italic">Résidence El Hana</h1>
                <p class="text-slate-500 text-xs mt-1 font-bold">ID Groupe: #8921 • Créé le 12/01/2026</p>
            </div>
            <div class="bg-white/5 border border-white/10 p-4 rounded-2xl">
                <p class="text-indigo-300 text-[10px] font-black uppercase tracking-tighter">Budget Total Estimé</p>
                <p class="text-xl font-black text-white">4,850.00 DH</p>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">

        <div class="lg:col-span-8 space-y-8">

            <div class="bg-white rounded-[2rem] border border-slate-100 shadow-sm overflow-hidden">
                <div class="p-6 border-b border-slate-50 flex justify-between items-center">
                    <h3 class="font-black text-slate-800 uppercase text-xs tracking-widest">Membres du groupe</h3>
                    <span class="text-[10px] font-black text-slate-400">4 Membres</span>
                </div>

                <div class="divide-y divide-slate-50">
                    <div class="p-5 flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 bg-indigo-600 rounded-xl flex items-center justify-center text-white font-black text-xs">YM</div>
                            <div>
                                <p class="font-bold text-slate-900 text-sm italic">Yassine (Owner)</p>
                                <p class="text-[9px] font-black text-indigo-500 uppercase tracking-widest">Admin du groupe</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-xs font-black text-slate-900">Score: 145.0</p>
                        </div>
                    </div>

                    <div class="p-5 flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 bg-slate-100 rounded-xl flex items-center justify-center text-slate-400 font-black text-xs">KB</div>
                            <div>
                                <p class="font-bold text-slate-900 text-sm italic">Karim Benani</p>
                                <p class="text-[9px] font-black text-slate-400 uppercase tracking-widest">Membre</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-xs font-black text-slate-900">Score: 92.0</p>
                        </div>
                    </div>

                    <div class="p-5 flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 bg-slate-100 rounded-xl flex items-center justify-center text-slate-400 font-black text-xs">SL</div>
                            <div>
                                <p class="font-bold text-slate-900 text-sm italic">Sara Lee</p>
                                <p class="text-[9px] font-black text-slate-400 uppercase tracking-widest">Membre</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-xs font-black text-slate-900">Score: 110.5</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-[2rem] border border-slate-100 shadow-sm p-8">
                <h3 class="font-black text-slate-400 uppercase text-[10px] tracking-widest mb-6">Dictionnaire des Catégories</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="bg-slate-50 p-4 rounded-2xl border border-slate-100 text-center">
                        <p class="text-xs font-black text-slate-700 uppercase">Alimentation</p>
                    </div>
                    <div class="bg-slate-50 p-4 rounded-2xl border border-slate-100 text-center">
                        <p class="text-xs font-black text-slate-700 uppercase">Loyer</p>
                    </div>
                    <div class="bg-slate-50 p-4 rounded-2xl border border-slate-100 text-center">
                        <p class="text-xs font-black text-slate-700 uppercase">Internet</p>
                    </div>
                    <div class="bg-slate-50 p-4 rounded-2xl border border-slate-100 text-center">
                        <p class="text-xs font-black text-slate-700 uppercase">Electricité</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="lg:col-span-4 space-y-6">
            <div class="bg-white rounded-[2rem] border border-slate-100 shadow-sm p-6">
                <h4 class="font-black text-slate-800 uppercase text-xs tracking-widest mb-6">Activité Récente</h4>

                <div class="space-y-6">
                    <div class="relative pl-6 border-l-2 border-indigo-500">
                        <p class="text-sm font-black text-slate-900 italic leading-none">Achat Supermarché</p>
                        <p class="text-[10px] font-bold text-slate-400 uppercase mt-1">24 Février 2026</p>
                        <p class="text-xs font-black text-indigo-600 mt-2">450.00 DH</p>
                    </div>

                    <div class="relative pl-6 border-l-2 border-slate-200">
                        <p class="text-sm font-black text-slate-900 italic leading-none">Facture IAM Fibre</p>
                        <p class="text-[10px] font-bold text-slate-400 uppercase mt-1">20 Février 2026</p>
                        <p class="text-xs font-black text-slate-500 mt-2">349.00 DH</p>
                    </div>

                    <div class="relative pl-6 border-l-2 border-slate-200">
                        <p class="text-sm font-black text-slate-900 italic leading-none">Bouteille de Gaz</p>
                        <p class="text-[10px] font-bold text-slate-400 uppercase mt-1">15 Février 2026</p>
                        <p class="text-xs font-black text-slate-500 mt-2">45.00 DH</p>
                    </div>
                </div>

                <a href="#" class="block w-full mt-8 py-3 bg-slate-900 text-white text-center text-[10px] font-black uppercase rounded-xl tracking-widest hover:bg-indigo-600 transition">
                    Toutes les factures
                </a>
            </div>

            <div class="p-6 bg-amber-50 rounded-[2rem] border border-amber-100">
                <p class="text-[10px] font-black text-amber-600 uppercase mb-2">Note Jury</p>
                <p class="text-[11px] text-amber-800 leading-relaxed italic">
                    Cette vue synthétise les relations <strong>BelongsTo</strong> entre les factures et les membres du groupe.
                </p>
            </div>
        </div>

    </div>
</div>
@endsection
