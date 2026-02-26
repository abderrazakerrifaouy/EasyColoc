<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'group_id' => 'required|exists:groups,id',
        ]);

        Category::create(
            [
                'name' => $request->name,
                'group_id' => $request->group_id,
            ]
        );
        return redirect()->back()->with('success', 'Category created successfully!');
    }
}
