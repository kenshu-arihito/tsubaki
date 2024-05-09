<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class ProductController extends Controller
{
    public function index()
    {
        return view('index', [
            'products'   => Product::with('category')->paginate(9),
            'categories' => Category::all()
        ]);
    }
}
