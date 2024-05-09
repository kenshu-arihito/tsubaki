<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class ProductController extends Controller
{
    public function index()
    {
        // $collection = Product::where('category_id', '=', 1)->where('price', '>=', 10)->where(function ($q)
        // {
            //     $q->where('name', 'LIKE', '%チョコ%');
            //     $q->orWhere('description', 'LIKE', '%チョコ%');
            // })->get();

        return view('index', [
            'products'   => Product::all(),
            'categories' => Category::all()
        ]);
    }
}
