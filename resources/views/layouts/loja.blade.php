<!DOCTYPE html>
<html lang="pt_BR">
@section('htmlheader')
    @include('layouts.partials.htmlheader')
@show

<body data-spy="scroll" data-offset="0" data-target="#navigation">

<div id="app">
    <div class="wrapper">
    @include('layouts.partials.menu')
        <div class="container"><!-- Content Wrapper. Contains page content -->
            @include('layouts.partials.contentheader')
            <!-- Main content -->
            <section class="content">
                <!-- Your Page Content Here -->
                @section('main-content')
                    <div class="row">
                        <!-- Categorias -->
                        @section('category')
                            @include('layouts.partials.category')
                        @show
                        <div class="col-md-9">
                            <!-- Fotos de Produtos em carousel -->
                            @include('layouts.partials.carousel')
                            <!-- thumbnail de Produtos -->
                            @section('produto')
                                @include('layouts.partials.thumbnail')
                            @show
                        </div>
                    </div>
                @show
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        @include('layouts.partials.footer')
    </div><!-- ./wrapper -->
</div><!--/#app -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
@section('scripts')
    @include('layouts.partials.scripts')
@show

</body>
</html>
