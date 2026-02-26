<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ColocationController extends Controller
{
    public function create()
    {
        return view('user.colocation.create');
    }
    public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'PrimaryCategory' => 'required|string|max:255',
        ]);

        try {
            $colocation = Group::create([
                'name' => $validated['name'],
            ]);
            $colocation->memberships()->create([
                'user_id' => Auth::user()->id,
                'group_id' => $colocation->id,
                'role' => 'owner',
            ]);
            $colocation->categories()->create([
                'name' => $validated['PrimaryCategory'],
                'group_id' => $colocation->id,
            ]);

            return redirect()->route('dashboard')->with('success', 'Colocation créée avec succès !');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Une erreur est survenue lors de la création de la colocation.']);
        }
    }

    public function show()
    {
        return view('groups.show');
    }
}
