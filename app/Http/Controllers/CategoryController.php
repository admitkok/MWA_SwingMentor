<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
class CategoryController extends Controller
{
    public function index()
    {
        $categories = \App\Models\Category::all();

        return view('site.categories.index', [
            'categories' => $categories,
        ]);
    }

    public function show(string $id)
    {
        $category = \App\Models\Category::findOrFail($id);
        $user = \App\Models\User::findOrFail(auth()->id());

        return view('site.categories.show', [
            'category' => $category,
            'user' => $user
        ]);
    }
}
