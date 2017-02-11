<div class="col-md-3">
    <p class="lead">Categorias</p>
    <div class="list-group">
        @forelse ($categories as $category)
            <a href="#" class="list-group-item">{{ $category->name }}</a>
        @empty
            <p>Nenhuma Categoria</p>
        @endforelse
    </div>
</div>