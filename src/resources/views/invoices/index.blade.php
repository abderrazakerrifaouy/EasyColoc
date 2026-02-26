@extends('layouts.app')

@section('title', 'Dépenses Collectives')
@section('header_title', 'Toutes les factures du groupe')

@section('content')
<div class="space-y-6">

    <div class="bg-slate-900 rounded-[2rem] p-8 text-white shadow-xl">
        <div class="flex flex-col md:flex-row justify-between items-center gap-6">
            <div>
                <h3 class="text-indigo-400 text-xs font-black uppercase tracking-widest mb-1">Dépense Totale Février</h3>
                <p class="text-4xl font-black italic">1,450.00 €</p>
            </div>
            <div class="h-12 w-px bg-slate-700 hidden md:block"></div>
            <div>
                <h3 class="text-emerald-400 text-xs font-black uppercase tracking-widest mb-1">Ma part estimée</h3>
                <p class="text-4xl font-black italic">362.50 €</p>
            </div>
            <div class="bg-white/10 p-4 rounded-2xl backdrop-blur-sm">
                <p class="text-[10px] font-bold uppercase text-slate-300 mb-1 text-center">Nombre de parts</p>
                <div class="flex -space-x-2">
                    <div class="w-8 h-8 rounded-full border-2 border-slate-900 bg-indigo-500 flex items-center justify-center text-[10px] font-bold">Y</div>
                    <div class="w-8 h-8 rounded-full border-2 border-slate-900 bg-emerald-500 flex items-center justify-center text-[10px] font-bold">S</div>
                    <div class="w-8 h-8 rounded-full border-2 border-slate-900 bg-amber-500 flex items-center justify-center text-[10px] font-bold">K</div>
                    <div class="w-8 h-8 rounded-full border-2 border-slate-900 bg-slate-600 flex items-center justify-center text-[10px] font-bold">+1</div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-[2rem] border border-slate-100 shadow-sm overflow-hidden">
        <div class="p-6 border-b border-slate-50 flex justify-between items-center">
            <h4 class="font-black text-slate-800 uppercase text-xs tracking-widest">Détails des factures</h4>
            <button class="bg-indigo-600 text-white px-5 py-2 rounded-xl font-bold text-xs uppercase shadow-lg shadow-indigo-100">+ Ajouter</button>
        </div>

        <div class="divide-y divide-slate-50">
            <div class="p-6 hover:bg-slate-50/50 transition">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-slate-100 rounded-2xl flex items-center justify-center text-xl">🛒</div>
                        <div>
                            <p class="font-black text-slate-900 leading-tight">Courses Carrefour (Mois complet)</p>
                            <p class="text-[10px] text-slate-400 font-bold uppercase mt-1">
                                Catégorie: Alimentation • Payé par <span class="text-indigo-600">Yassine</span>
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center gap-8">
                        <div class="text-right">
                            <p class="text-xs text-slate-400 font-bold mb-1 uppercase tracking-tighter">Total Facture</p>
                            <p class="font-black text-slate-900 text-xl">200.00 €</p>
                        </div>
                        <div class="hidden md:block text-slate-200">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                        </div>
                        <div class="text-right bg-indigo-50 px-4 py-2 rounded-2xl border border-indigo-100">
                            <p class="text-[10px] text-indigo-400 font-black mb-1 uppercase tracking-tighter italic">Ta part (1/4)</p>
                            <p class="font-black text-indigo-600 text-xl">50.00 €</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-6 hover:bg-slate-50/50 transition">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-slate-100 rounded-2xl flex items-center justify-center text-xl">🌐</div>
                        <div>
                            <p class="font-black text-slate-900 leading-tight">Abonnement Internet Orange</p>
                            <p class="text-[10px] text-slate-400 font-bold uppercase mt-1">
                                Catégorie: Services • Payé par <span class="text-indigo-600">Sara Lee</span>
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center gap-8">
                        <div class="text-right">
                            <p class="text-xs text-slate-400 font-bold mb-1 uppercase tracking-tighter text-balance">Total Facture</p>
                            <p class="font-black text-slate-900 text-xl">40.00 €</p>
                        </div>
                        <div class="hidden md:block text-slate-200">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                        </div>
                        <div class="text-right bg-rose-50 px-4 py-2 rounded-2xl border border-rose-100">
                            <p class="text-[10px] text-rose-400 font-black mb-1 uppercase tracking-tighter italic">Ta part (1/4)</p>
                            <p class="font-black text-rose-600 text-xl">10.00 €</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
