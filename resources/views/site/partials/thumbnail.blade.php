<div class="row">
    @forelse ($products as $product)
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                <img class="img-responsive" src="{{ $product->image_path }}"
                     style="width:70%" alt="" >
                <div class="caption">
                    <h4 class="pull-right price">$ {{ $product->value }}</h4>
                    <h4><a href="#">{{ $product->title }}</a>
                    </h4>
                    <p>{{ $product->description }}</p>
                    <div class="clearfix">
                        <a href="#" class="btn btn-success pull-right" role="button">Adicionar</a>
                    </div>
                </div> <!-- caption -->
            </div>
        </div>
    @empty
        <p>Nenhum Produto</p>
    @endforelse
</div>