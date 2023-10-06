<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Scopes\CategoryScope;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $categories = Product::all();
        return view('test', compact('categories'));
    }
}
