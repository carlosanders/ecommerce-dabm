@extends('layouts.loja')

@section('htmlheader_title')
    Marinha do Brasil
@endsection

@section('contentheader_title')
@endsection

@section('navbar-brand')
    <a class="navbar-brand" href="#"><b>Marinha do Brasil</b></a>
@endsection

@section('main-content')

    @if (sizeof(Cart::instance('wishlist')->content()) > 0)
        <table class="table">
            <thead>
            <tr>
                <th class="table-image"></th>
                <th>Produto</th>

                <th>Preço</th>
                <th class="column-spacer"></th>
                <th></th>
            </tr>
            </thead>

            <tbody>
            @foreach (Cart::instance('wishlist')->content() as $item)
                <tr>
                    <td class="table-image">
                        <div style="width:145px;height:100px;overflow:hidden;margin-left:5px;">
                            <a href="{{ url('shop', [$item->model->pi]) }}"><img
                                    src="{{ asset('img_farda/' . $item->model->images->first()->image_path) }}"
                                    alt="product"
                                    class="img-responsive cart-image"></a>
                        </div>
                    </td>
                    <td><a href="{{ url('shop', [$item->model->pi]) }}">
                            {{ $item->name }}</a></td>

                    <td>$ {{ $item->subtotal }}</td>
                    <td class=""></td>
                    <td>
                        <form action="{{ url('wishlist', [$item->rowId]) }}"
                              method="POST" class="side-by-side">
                            {!! csrf_field() !!}
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fa fa-eraser" aria-hidden="true"></i>
                                Remover
                            </button>
                        </form>

                        <form action="{{ url('switchToCart', [$item->rowId]) }}"
                              method="POST" class="side-by-side">
                            {!! csrf_field() !!}

                            <button type="submit" class="btn btn-success btn-sm">
                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                Enviar para Carrinho
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>

        <div class="spacer"></div>

        <a href="/shop" class="btn btn-primary btn-lg">Continue Comprando</a> &nbsp;

        <div style="float:right">
            <form action="{{ url('/emptyWishlist') }}" method="POST">
                {!! csrf_field() !!}
                <input type="hidden" name="_method" value="DELETE">

                <button type="submit" class="btn btn-danger btn-lg">
                    <i class="fa fa-eraser" aria-hidden="true"></i>
                    Limpar Wishlist
                </button>
            </form>
        </div>

    @else

        <h3>Você não possui itens na sua Lista de Desejos</h3>
        <a href="/shop" class="btn btn-primary btn-lg">Continue Comprando</a>

    @endif

    <div class="spacer"></div>

@endsection
