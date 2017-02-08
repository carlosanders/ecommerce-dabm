<!DOCTYPE html>
<html lang="pt_BR">
@section('htmlheader')
    @include('layouts.partials.htmlheader')
@show

<body data-spy="scroll" data-offset="0" data-target="#navigation">

<div id="app">
    <div class="wrapper">
    @include('layouts.partials.menu')
        <!-- Content Wrapper. Contains page content -->
        <div class="container">
            @include('layouts.partials.contentheader')
            <!-- Main content -->
            <section class="content">
                <!-- Your Page Content Here -->
                @section('main-content')
                    <div class="row">
                        <!-- Categorias -->
                        @include('layouts.partials.category')
                        <div class="col-md-9">
                            <!-- Fotos de Produtos em carousel -->
                            @include('layouts.partials.carousel')
                            <!-- thumbnail de Produtos -->
                            @include('layouts.partials.thumbnail')
                        </div>
                    </div>
                @show
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
    </div>
</div><!--/#app -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
@section('scripts')
    @include('layouts.partials.scripts')
@show

</body>
</html>
