<div class="row">
    @forelse ($products as $product)
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                <div style="width:245px;height:200px;overflow:hidden;margin-left:5px;">
                    <a href="{{ url('shop', [$product->slug]) }}">
                        <img class="img-responsive"
                             src="{{ $product->image_path }}" id="preview"/>
                    </a>
                </div>
                <div class="caption">
                    <h4 class="pull-right price">$ {{ $product->value }}</h4>
                    <h5><a href="{{ url('shop', [$product->slug]) }}">
                            {{ $product->title }}</a>
                    </h5>
                    <p>{{ $product->description }}</p>
                    <div class="clearfix">

                        <form action="{{ url('/cart') }}" method="POST" class="side-by-side form-inline">
                            {!! csrf_field() !!}
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="hidden" name="name" value="{{ $product->title }}">
                            <input type="hidden" name="price" value="{{ $product->value }}">
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
