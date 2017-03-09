<div class="row">
    @forelse ($products as $product)
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                <div style="width:245px;height:200px;overflow:hidden;margin-left:5px;">
                    <a href="{{ url('shop', [$product->pi]) }}">
                        <img class="img-responsive"
                             src="{{ asset('img_farda/' . $product->images->first()->image_path) }}" id="preview"/>
                    </a>
                </div>
                <div class="caption">
                    <h4 class="pull-right price">R$ {{ $product->preco }}</h4>
                    <h5><a href="{{ url('shop', [$product->pi]) }}">
                            {{ $product->pi }}</a>
                    </h5>
                    <p class="text-muted">{{ $product->nameProduct->nome_item }}</p>
                    <p class="text-muted">Tamanho: <span class="badge">{{ $product->tamanho }}</span></p>
                    <div class="clearfix">

                        <form action="{{ url('/cart') }}" method="POST" class="side-by-side form-inline">
                            {!! csrf_field() !!}
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="hidden" name="name" value="{{ $product->nameProduct->nome_item }}">
                            <input type="hidden" name="price" value="{{ $product->preco }}">
                            <button type="submit" class="btn btn-success pull-right">
                                <i class="fa fa-cart-plus fa-lg" aria-hidden="true"></i>
                                Add to Cart</button>
                        </form>

                    </div>
                </div> <!-- caption -->
            </div>
        </div>
    @empty
        <p>Nenhum Produto</p>
    @endforelse
</div>
