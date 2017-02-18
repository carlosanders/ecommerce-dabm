<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

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
        $products = Product::where('pg_init', 1)
            ->orderBy('title', 'description')
            //->take(10)
            ->get();


        return view('site.site')->with(compact('categories', 'products'));
    }

    public function getProductsAll()
    {
        $products = Product::all();

        return view('site.productsall')->with(compact('products'));
    }

    /**
     * Display the specified resource.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $interested = Product::where('slug', '!=', $slug)->get()->random(4);

        return view('site.detalheproduto')->with([
            'product' => $product,
            'interested' => $interested,
        ]);
    }

//    public function getAddToCart(Request $request, $id)
//    {
//        $product = Product::find($id);
    //\Debugbar::warning('lista de categorias');
//    }
}
