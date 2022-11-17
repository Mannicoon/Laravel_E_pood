<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function index()
    {
        

        return Inertia::render('Product/Product', [
            'products' => Product::all(),
        ]);

        
    }
}
