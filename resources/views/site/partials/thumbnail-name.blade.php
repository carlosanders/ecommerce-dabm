{{--{{ dd($products) }}--}}
<div class="row">
    @forelse ($products as $product)

        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                {{--<div style="width:245px;height:200px;overflow:hidden;margin-left:5px;">--}}
                <div style="height:200px;overflow:hidden;">
                    <a href="{{ url('shop', [$product->id]) }}">
                        <img class="img-responsive"
                             src="{{ asset('img_farda/' . $product->products->first()->images->first()->image_path)
                             }}" id="preview"/>
                    </a>
                </div>
                <div class="caption">
                    <h4 class="pull-right price">
                        <span id="preco-{{$loop->iteration}}">
                           R$ {{ $product->products->first()->preco }}
                        </span>
                    </h4>
                    <h5 id="pi-{{$loop->iteration}}">
                        <a
                           href="{{ url('shop', [$product->products->first()->pi]) }}">
                            {{ $product->products->first()->pi }}</a>
                    </h5>
                    <p class="text-muted">
                        {{ $product->nome_item }}
                    </p>
                    <div class="form-inline">
                        <div class="form-group">
                            <label for="tamanho">Tamanho:</label>
                            <select id="tam-{{$loop->iteration}}"
                                    name="tam-{{$loop->iteration}}"
                                    onchange="mudarItem(event, {{$loop->iteration}})"
                                    class="form-control">'
                                @foreach ($product->products->all() as $t)
                                    <option value="{{ $t->pi }}/{{$t->preco}}/{{$t->tamanho}}"
                                        {{ ($t->id == $product->products->first()->id) ? 'selected':'' }}>
                                        {{ $t->tamanho }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <br/>
                    <div class="clearfix">

                        <form action="{{ url('/cart') }}" method="POST" class="side-by-side form-inline">
                            {!! csrf_field() !!}
                            <input type="hidden" id="id-{{$loop->iteration}}" name="id" value="{{ $product->products->first()->id }}">
                            <input type="hidden" id="name-{{$loop->iteration}}" name="name" value="{{ $product->nome_item }}">
                            <input type="hidden" id="price-{{$loop->iteration}}" name="price" value="{{ $product->products->first()->preco
                            }}">
                            <button type="submit" class="btn btn-success pull-right">
                                <i class="fa fa-cart-plus fa-lg" aria-hidden="true"></i>
                                Add to Cart
                            </button>
                        </form>

                    </div>
                </div> <!-- caption -->
            </div>
        </div>
    @empty
        <p>Nenhum Produto</p>
    @endforelse
</div>
<div class="row text-center">
    {{ $links }}
</div>
@push('scripts')
<script type="text/javascript">
//    $(document).ready(function () {
//        $('select').change(function() {
//            var valor = $('option:selected').text();
//            alert('O valor selecionado: '+ valor);
//        });
//    });
function mudarItem(event, id) {
    //console.log(event);

    var valorRaw = event.target.value;
    var valorArray = valorRaw.split('/');
    var pi = valorArray[0];
    var preco = valorArray[1];
    var tam = valorArray[2];

    $('#preco-'+id)
        .html('R$ '+ preco);
        //.addClass("bg-info");

    var link = '<a href="/shop/'+ pi +'">'+ pi +'</a>'

    $('#pi-'+id)
        .html(link);

    //console.log(pr);

//    alert('O PI selecionado: ' + pi
//        + '\n'+ 'O Preco selecionado: ' + preco
//        + '\n'+ 'O Tamanho selecionado: ' + tam
//    );


}

</script>
@endpush
