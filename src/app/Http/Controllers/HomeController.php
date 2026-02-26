<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function showHome()
    {
        return view('user.home');
    }
    public function showAdminDashboard()
    {
        echo "Admin Dashboard";
    }
    public function showUserDashboard()
    {
        return view('groups.member.home');
    }
    public function showOwnerDashboard()
    {
        $memberShip = Auth::user()->memberships()->where('is_approved', false)->first();
        $group = $memberShip->group;
        $solde = $group->groupPayments()->where('payer_membership_id', $memberShip->id)->get()->sum('amount') - $group->groupPayments()->where('receiver_membership_id', $memberShip->id)->get()->sum('amount');
        return view('groups.owner.home', compact('solde'));
    }
    public function showExpenses()
    {
        return view('invoices.index');
    }
}

