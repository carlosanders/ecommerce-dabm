@extends('layouts.loja')

@section('htmlheader_title')
    Marinha do Brasil
@endsection

@section('contentheader')
    @include('site.partials.contentheader')
@endsection

@section('navbar-brand')
    <a class="navbar-brand" href="#">
        <i class="fa fa-envira" aria-hidden="true"></i>
        <b>e-DAbM</b></a>
@endsection

@section('main-content')
    <p><a href="{{ url('shop') }}">Home</a> / Cart</p>
    <h1>Seu Carrinho</h1>

    <hr>


    @if (sizeof(Cart::content()) > 0)
        <table class="table">
            <thead>
            <tr>
                <th class="table-image"></th>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Preço</th>
                <th class="column-spacer"></th>
                <th></th>
            </tr>
            </thead>

            <tbody>
            @foreach (Cart::content() as $item)
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
                    <td>
                        <select class="quantity" data-id="{{ $item->rowId }}">
                            <option {{ $item->qty == 1 ? 'selected' : '' }}>1</option>
                            <option {{ $item->qty == 2 ? 'selected' : '' }}>2</option>
                            <option {{ $item->qty == 3 ? 'selected' : '' }}>3</option>
                            <option {{ $item->qty == 4 ? 'selected' : '' }}>4</option>
                            <option {{ $item->qty == 5 ? 'selected' : '' }}>5</option>
                        </select>
                    </td>
                    <td>$ {{ $item->subtotal }}</td>
                    <td class=""></td>
                    <td>
                        <form action="{{ url('cart', [$item->rowId]) }}"
                              method="POST" class="side-by-side">
                            {!! csrf_field() !!}
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fa fa-eraser" aria-hidden="true"></i>
                                Remover
                            </button>

                        </form>

                        <form action="{{ url('switchToWishlist', [$item->rowId]) }}"
                              method="POST" class="side-by-side">
                            {!! csrf_field() !!}


                            <button type="submit" class="btn btn-success btn-sm">
                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                Enviar para Wishlist
                            </button>

                        </form>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td class="table-image"></td>
                <td></td>
                <td class="small-caps table-bg" style="text-align: right">Subtotal</td>
                <td>$ {{ Cart::instance('default')->subtotal() }}</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="table-image"></td>
                <td></td>
                <td class="small-caps table-bg" style="text-align: right">Desconto (10%)</td>
                <td>$ {{ Cart::instance('default')->tax() }}</td>
                <td></td>
                <td></td>
            </tr>

            <tr class="border-bottom">
                <td class="table-image"></td>
                <td style="padding: 40px;"></td>
                <td class="small-caps table-bg"
                    style="text-align: right">Total
                </td>
                <td class="table-bg">$ {{ Cart::total() }}$ {{ Cart::total() }}</td>
                <td class="column-spacer"></td>
                <td></td>
            </tr>
            </tbody>

        </table>

        <a href="{{ url('/shop') }}" class="btn btn-primary btn-lg">
            <i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i> Continue Comprando</a> &nbsp;
        <a href="{{ url('/checkout') }}" class="btn btn-success btn-lg">
            Checkout <span class="fa fa-play"></span></a>

        <div style="float:right">
            <form action="{{ url('/emptyCart') }}" method="POST">
                {!! csrf_field() !!}
                <input type="hidden" name="_method" value="DELETE">


                <button type="submit" class="btn btn-danger btn-lg">
                    <i class="fa fa-eraser" aria-hidden="true"></i>
                    Limpar Carrinho
                </button>

            </form>
        </div>
    @else
        <h3>Você não tem itens no seu carrinho de compras</h3>
        <a href="{{ url('/shop') }}" class="btn btn-primary btn-lg">Continue Comprando</a>
    @endif

    <br/>

@section('extra-js')
    <script type="text/javascript">
        (function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.quantity').on('change', function () {
                var id = $(this).attr('data-id')
                $.ajax({
                    type: "GET",
                    url: '{{ url("/cart") }}' + '/' + id,
                    data: {
                        'quantity': this.value,
                    },
                    success: function (data) {
                        window.location.href = '{{ url('/cart') }}';
                    }
                });
            });
        })();
    </script>
@endsection

@endsection
