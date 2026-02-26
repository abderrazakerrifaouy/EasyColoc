<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('groups.owner.home');
    }
    public function showExpenses()
    {
        return view('invoices.index');
    }
}
