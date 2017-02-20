<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Cart as Cart;
use Illuminate\Http\Request;
use Validator;

class CartController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.cart');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $duplicates = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->id;
        });

        if (!$duplicates->isEmpty()) {
            return redirect('cart')
                ->withSuccessMessage('O Item já existe no seu carrrinho!');
        }

        Cart::add($request->id, $request->name, 1, $request->price)
            ->associate('App\Models\Product');

        return redirect('cart')
            ->withSuccessMessage('O Item foi adicionado ao seu carrinho!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        //\Debugbar::warning($request->all());
        // Validation on max quantity
        $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric|between:1,5',
        ]);

        if ($validator->fails()) {
            session()->flash('error_message', 'A quantidade deve estar entre 1 e 5.');

            return response()->json(['success' => false]);
        }

        Cart::update($id, $request->quantity);
        session()->flash('success_message', 'Quantidade foi atualizada com sucesso!');

        return response()->json(['success' => true]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);

        return redirect('cart')->withSuccessMessage('O item foi removido!');
    }

    /**
     * Remove the resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function emptyCart()
    {
        Cart::destroy();

        return redirect('cart')->withSuccessMessage('Seu carrinho foi cancelado!');
    }

    /**
     * Switch item from shopping cart to wishlist.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function switchToWishlist($id)
    {
        $item = Cart::get($id);

        Cart::remove($id);

        $duplicates = Cart::instance('wishlist')
            ->search(function ($cartItem, $rowId) use ($id) {
                return $cartItem->id === $id;
            });

        if (!$duplicates->isEmpty()) {
            return redirect('cart')
                ->withSuccessMessage('O item já está na sua lista de desejos!');
        }

        Cart::instance('wishlist')->add($item->id, $item->name, 1, $item->price)
            ->associate('App\Models\Product');

        return redirect('cart')
            ->withSuccessMessage('O Item foi movido para a sua lista de desejos!');

    }

}
