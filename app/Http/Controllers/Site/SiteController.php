<?php

namespace App\Http\Controllers\Site;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Responsethumbnail.blade.php
     */
    public function index()
    {
        $categories = Category::all();
        $products = Product::all();
        \Debugbar::warning('lista de categorias');

        return view('site.site')->with(compact('categories', 'products'));
    }
}
