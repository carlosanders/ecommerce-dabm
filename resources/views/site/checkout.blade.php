@extends('layouts.loja')

@section('htmlheader_title')
    Marinha do Brasil
@endsection

@section('contentheader')

    @if (session()->has('not_logged'))
        <div class="alert alert-info">
            <strong>{{ session()->get('not_logged') }}</strong>
            <a href="{{ route('login') }}" class="alert-link">Clique aqui para entrar</a>.
        </div>
    @endif

    @if (Auth::check())
        <h4>Olá {{ Auth::user()->name }}, obrigado pelo compra, preencha os dados abaixo para prosseguir.</h4>
    @endif

@endsection

@section('navbar-brand')
    <a class="navbar-brand" href="#">
        <i class="fa fa-envira" aria-hidden="true"></i>
        <b>e-DAbM</b></a>
@endsection

@section('main-content')
    <div class="row">
        <div class="col-sm-6">
            <h4>Detalhes de Cobrança:</h4>
            <div class="featured-box align-left">
                <form>
                    <div class="form-group">
                        <label for="b_name">Nome:</label>
                        <input type="text" class="form-control" id="b_name" value="{{ Auth::user()->name }}" />
                    </div>
                    <div class="form-group">
                        <label for="b_sobrenome">Sobrenome:</label>
                        <input type="text" class="form-control" id="b_sobrenome">
                    </div>
                    <div class="form-group">
                        <label for="b_email">E-mail:</label>
                        <input type="email" class="form-control" id="b_email">
                    </div>
                    <div class="form-group">
                        <label for="b_tel">Telefone:</label>
                        <input type="text" class="form-control" id="b_tel">
                    </div>
                    <div class="form-group">
                        <label for="b_end">Endereço:</label>
                        <input type="text" class="form-control" id="b_end"
                               placeholder="Endereço" />
                        <br />
                        <input class="form-control" name="b_end_2"
                               id="b_end_2"
                               placeholder="Apartamento, conjunto, casa, etc. (opcional)"
                               autocomplete="address-line2"
                               value="" type="text">
                    </div>


                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>

        <div class="col-sm-6">
            coluna 2
        </div>
    </div>
    ...
@endsection
