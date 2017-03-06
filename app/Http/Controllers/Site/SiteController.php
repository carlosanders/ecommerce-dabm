<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Repositories\ProductRepositoryEloquent;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{

    /**
     * @var \App\Repositories\ProductRepositoryEloquent
     */
    private $repository;

    public function __construct(ProductRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Show the application dashboard.
     *
     * @return Responsethumbnail.blade.php
     */
    //public function index(ProductRepositoryEloquent $repository)
    public function index()
    {
        //$categories = Category::all();
        //$products = Product::where('pg_init', 1)
            //->orderBy('title', 'description')
            //->take(10)
           // ->get();
        //relacionamento funcionando
        //$product = Product::find(1)->nameProduct;
        //dd($product);

        //$products = $this->repository->findAll();
        //$products = $this->repository->first();
        //$products = $this->repository->first(['pi']);
        $products = $this->repository->paginate(20);


        dd($products);

//        foreach ($products as $product) {
//            var_dump($products->nameProduct);
//        }
//
//        dd(1);

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

    public function getCheckout()
    {
        if (!Auth::check()) {
            //return redirect()->route('login');

            session()->flash('not_logged', ' Já está cadastrado?');
        }

        return view('site.checkout');
    }

//    public function getAddToCart(Request $request, $id)
//    {
//        $product = Product::find($id);
    //\Debugbar::warning('lista de categorias');
//    }
}
