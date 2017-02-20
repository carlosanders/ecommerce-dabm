<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Cart as Cart;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.wishlist');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $duplicates = Cart::instance('wishlist')
            ->search(function ($cartItem, $rowId) use ($request) {
                return $cartItem->id === $request->id;
            });
        if (!$duplicates->isEmpty()) {
            return redirect('shop')
                ->withSuccessMessage('O Item já existe na sua lista de desejos!');
        }
        Cart::instance('wishlist')
            ->add($request->id, $request->name, 1, $request->price)
            ->associate('App\Models\Product');

        return redirect('shop')
            ->withSuccessMessage('Item foi adicionado à sua lista de desejos!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::instance('wishlist')->remove($id);

        return redirect('wishlist')
            ->withSuccessMessage('O item foi removido da sua lista de desejos!');
    }

    /**
     * Remove the resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function emptyWishlist()
    {
        Cart::instance('wishlist')->destroy();

        return redirect('wishlist')
            ->withSuccessMessage('Sua lista de desejos foi cancelada!');
    }

    /**
     * Switch item from wishlist to shopping cart.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function switchToCart($id)
    {
        $item = Cart::instance('wishlist')->get($id);
        Cart::instance('wishlist')->remove($id);

        $duplicates = Cart::instance('default')
            ->search(function ($cartItem, $rowId) use ($id) {
                return $cartItem->id === $id;
            });
        if (!$duplicates->isEmpty()) {
            return redirect('cart')
                ->withSuccessMessage('O Item já está no seu carrinho de compras!');
        }
        Cart::instance('default')
            ->add($item->id, $item->name, 1, $item->price)
            ->associate('App\Models\Product');

        return redirect('wishlist')
            ->withSuccessMessage('O Item foi movido para o seu carrinho de compras!');
    }
}
