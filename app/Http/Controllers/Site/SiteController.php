<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\PDU;
use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Repositories\NameProductsRepositoryEloquent;

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
        //\Debugbar::warning('url: ');
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
        //$products = $this->repository->simplePaginate(5);
        //$products = $this->repository->with(['nameProduct', 'images']);
        //$products = $products->all();
        //$products = $products->where('pg_init', 1)->get();

        //faz um relacionamento com nomeProduto e Foto
        $stmt = $this->repository->with(['nameProduct', 'images']);
        //aplica a condicao depois que fizer o relacionamento
        $products = $stmt->findWhere([
            'pg_init' => '1',//page initial active
        ]);
        //dd($products);

//        $images = Product::find(1)->images->first();
//        dd($images->image_path);

//        foreach ($products->all() as $product) {
//            var_dump($product->nameProduct->slug);
//            var_dump($product->images->first()->image_path);
//        }
//        dd(1);

        return view('site.site')->with(compact('categories', 'products'));
    }

    public function indexNamesProducts(NameProductsRepositoryEloquent $repository)
    {
        //$categories = Category::all();

        //faz um relacionamento com nomeProduto e Foto
        $stmt = $repository->with(['products']);
        //aplica a condicao depois que fizer o relacionamento
//        $products = $stmt->findWhere([
//            'pg_init' => '1',//page initial active
//        ]);

        $products = $stmt->paginate();

        $links = $products->links();

        //dd($products->links());

        return view('site.site-name')->with(compact('products', 'links'));
    }

    public function getProductsAll()
    {
        $stmt = $this->repository->with(['nameProduct', 'images']);
        //$products = Product::all();
        $products = $stmt->all();

        return view('site.productsall')->with(compact('products'));
    }

    /**
     * Display the specified resource.
     *
     * @param  string $pi
     * @return \Illuminate\Http\Response
     */
    public function show($pi)
    {

        //faz um relacionamento com nomeProduto e Foto
        $stmt = $this->repository->with(['nameProduct', 'images']);

        $product = $stmt->findByField('pi', $pi);
        //dd($product);

        $where = [
            ['pi', '!=', $pi],
        ];

        $interested = $stmt->getRandom($where, 4, ['nameProduct', 'images']);
        //dd($interested);

        // teste 1
//        $stmt = $this->repository->with([
//            'nameProduct' => function ($query) use ($slug) {
//                $query->where('slug', $slug);
//            },
//            'images',
//        ]);
//        dd($stmt->first());

        // teste 2
//        $stmt = $this->repository->scopeQuery(function($query){
//            //return $query->orderBy('pi','asc');
//
//        })->all();

        //teste 3
//        $p = $stmt->whereHasGet('nameProduct', function ($query) use ($slug) {
//            $query->where('slug', $slug);
//        });
//        dd($p);

        //$product = Product::where('slug', $slug)->firstOrFail();
        //$interested = Product::where('slug', '!=', $slug)->get()->random(4);

        return view('site.detalheproduto')->with([
            'product' => $product->first(),
            'interested' => $interested,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  string $id
     * @return \Illuminate\Http\Response
     */
    public function getProduct($id = 0)
    {
        dd($id);
        //faz um relacionamento com nomeProduto e Foto
        //$stmt = $this->repository->with(['products']);

        //$product = $stmt->findByField('id', $id);
        //dd($product);

        return view('site.productsall')->with(compact('products'));
    }

    public function getCheckout()
    {
//        if (!Auth::check()) {
//            //return redirect()->route('login');
//
//            session()->flash('not_logged', ' Já está cadastrado?');
//        }

        $listaPDU = PDU::all();

        return view('site.checkout')->with(compact('listaPDU'));
    }

//    public function getAddToCart(Request $request, $id)
//    {
//        $product = Product::find($id);
    //\Debugbar::warning('lista de categorias');
//    }
}
