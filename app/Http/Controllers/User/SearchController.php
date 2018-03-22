<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Http\Requests;

class SearchController extends Controller
{
    public function filter(Request $request, Category $category)
    {
        // Needs more to work
        $category = $category->newQuery();

        // Search for a category based on their name.
        if ($request->has('name')) {
            return $category->where('name', $request->input('name'))->get();
        }

        return $category->get();
    }
}
