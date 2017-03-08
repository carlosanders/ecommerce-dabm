<p><a href="{{ url('/shop') }}">Shop</a> / PI: {{ $product->pi }}</p>
<h1>{{ $product->nameProduct->nome_item }}</h1>

<hr>

<div class="row">
    <div class="col-md-4">
        <img src="{{ asset('img_farda/' . $product->images->first()->image_path) }}"
             alt="product" class="img-responsive">
    </div>

    <div class="col-md-8">
        <h3>R$ {{ $product->preco }}</h3>
        <form action="{{ url('/cart') }}" method="POST" class="side-by-side form-inline">
            {!! csrf_field() !!}
            <input type="hidden" name="id" value="{{ $product->id }}">
            <input type="hidden" name="name" value="{{ $product->nameProduct->nome_item }}">
            <input type="hidden" name="price" value="{{ $product->preco }}">
            <button type="submit" class="btn btn-success btn-lg">
                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                Add to Cart</button>
        </form>

        <form action="{{ url('/wishlist') }}" method="POST" class="side-by-side form-inline">
            {!! csrf_field() !!}
            <input type="hidden" name="id" value="{{ $product->id }}">
            <input type="hidden" name="name" value="{{ $product->nameProduct->nome_item }}">
            <input type="hidden" name="price" value="{{ $product->preco }}">


            <button type="submit" class="btn btn-primary btn-lg">
                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                Add to Wishlist</button>
        </form>

        <br /><br />
        Tamanho: {{ $product->tamanho }}
        <br />
        REF PI: {{ $product->pi }}
        <br />
        Descrição:
        <br>

        {{ $product->nameProduct->description }}
    </div> <!-- end col-md-8 -->
</div> <!-- end row -->

<div class="spacer"></div>

<div class="row">
    <h3>Você também pode gostar...</h3>

    @foreach ($interested as $product)
        <div class="col-md-3">
            <div class="thumbnail">
                <div class="caption text-center">
                    <a href="{{ url('shop', [$product->pi]) }}">
                        <img src="{{ asset('img_farda/' . $product->images->first()->image_path) }}"
                             alt="product" class="img-responsive"></a>
                    <a href="{{ url('shop', [$product->pi]) }}">
                        <h3>{{ $product->nameProduct->nome_item }}</h3>
                        <p>{{ $product->preco }}</p>
                    </a>
                </div> <!-- end caption -->

            </div> <!-- end thumbnail -->
        </div> <!-- end col-md-3 -->
    @endforeach

</div> <!-- end row -->

<div class="spacer"></div>
