@extends('layouts.loja')

@section('htmlheader_title')
    Marinha do Brasil
@endsection

@section('navbar-brand')
    <a class="navbar-brand" href="#">
        <i class="fa fa-envira" aria-hidden="true"></i>
        <b>e-DAbM</b></a>
@endsection

@section('contentheader')

    <h4 class="text-warning">Olá <strong>{{ (!Auth::check()) ? 'Visitante' : Auth::user()->name }}</strong>,
        obrigado pelo compra, preencha os dados abaixo
        para finalizar o processo.
        <span class="glyphicon glyphicon-ok"></span>
    </h4>
    <br>
    <h5>Total do Carrinho: <span class="text-danger">R$ {{ Cart::total() }}</span></h5>

    @if (!Auth::check())
        <div class="alert alert-info">
            <strong>{{ session()->get('not_logged') }}</strong>
            <a href="{{ route('login') }}" class="alert-link">
                Clique aqui para entrar
                <span class="glyphicon glyphicon-log-in"></span>
            </a>
            <p class="text-danger">Não tem uma conta? <a href="{{ route('register') }}">Clique para Registrar</a></p>
        </div>
    @else
        {{--@if (session()->has('not_logged'))--}}

        {{----}}
        {{--</div>--}}
        {{--@endif--}}
        {{--@if (Auth::check())--}}
        {{--<h4 class="text-warning">Olá <strong>{{ Auth::user()->name }}</strong>,--}}
        {{--obrigado pelo compra, preencha os dados abaixo--}}
        {{--para finalizar o processo.--}}
        {{--<span class="glyphicon glyphicon-ok"></span>--}}
        {{--</h4>--}}
    @endif

@endsection

@section('main-content')
    <div class="row">
        @if (Auth::check())
            <br/> <br/>
            <div class="stepwizard">
                <div class="stepwizard-row setup-panel">
                    <div class="stepwizard-step">
                        <a href="#VerifyEmail-step" type="button"
                           class="btn btn-primary btn-circle"
                           id="ProfileSetup-step-1">
                            <i class="fa fa-truck" aria-hidden="true"></i>
                        </a>
                        <p>PDU/PEU</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#ProfileSetup-step" type="button"
                           class="btn btn-success btn-circle"
                           disabled="disabled"
                           id="ProfileSetup-step-2">
                            <span class="glyphicon glyphicon-user"></span>
                        </a>

                        <p>Dados Pessoais</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#Security-Setup-step" type="button"
                           class="btn btn-success-2 btn-circle"
                           disabled="disabled"
                           id="Security-Setup-step-3">
                            <i class="fa fa-money" aria-hidden="true" style="font-size:30px;"></i>
                        </a>
                        <p>Pagamento</p>
                    </div>
                </div>
            </div>

            <form role="form" id="frm-pedido" action="{{ route('salvar.pedido') }}" method="POST">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
                <div class="row setup-content" id="VerifyEmail-step">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <br/>
                            <div class="form-horizontal">
                                {{--<form role="form">--}}
                                    <fieldset>
                                        <legend>Escolha o PDU para entrega</legend>
                                        <br/>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label"
                                                   for="card-number">PDU</label>
                                            <div class="col-sm-9">
                                                <select required="required" class="form-control">
                                                    <option value="0">Selecione</option>
                                                    @foreach ($listaPDU as $pdu)
                                                        <option value="{{ $pdu->id }}">
                                                            {{ $pdu->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        {{-- Teste jQuery easyUI --}}
                                        {{--<div class="form-group">--}}
                                        {{--<label class="col-sm-3 control-label"--}}
                                        {{--for="card-number">PDU</label>--}}
                                        {{--<div class="col-sm-9">--}}
                                        {{--<select required="required"--}}
                                        {{--class="easyui-combobox form-control"--}}
                                        {{-->--}}
                                        {{--<option value="0">Selecione</option>--}}
                                        {{--@foreach ($listaPDU as $pdu)--}}
                                        {{--<option value="{{ $pdu->id }}">{{ $pdu->name }}</option>--}}
                                        {{--@endforeach--}}
                                        {{--</select>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}

                                    </fieldset>
                                {{--</form>--}}
                            </div>
                            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">
                                Dados Pessoais
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row setup-content" id="ProfileSetup-step">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <br/>
                            <div class="form-horizontal">
                                {{--<form role="form">--}}
                                    <fieldset>

                                        <legend>Dados Pessoais</legend>
                                        <br/>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="email">
                                                Email</label>
                                            <div class="col-sm-9">
                                                <input maxlength="100" type="text"
                                                       {{--required="required"--}}
                                                       class="form-control"
                                                       name="email"
                                                       id="email"
                                                       placeholder="Entre com o Email"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="nome">Nome</label>
                                            <div class="col-sm-9">
                                                <input maxlength="100" type="text"
                                                       {{--required="required"--}}
                                                       class="form-control"
                                                       name="nome"
                                                       id="nome"
                                                       placeholder="Entre com o Nome"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="telefone">
                                                Telefone Principal</label>
                                            <div class="col-sm-9">
                                                <input maxlength="100" type="text"
                                                       {{--required="required"--}}
                                                       class="form-control"
                                                       name="telefone"
                                                       id="telefone"
                                                       placeholder="Telefone Principal"/>
                                            </div>
                                        </div>

                                        <legend>Dados do Endereço</legend>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="cep">CEP</label>
                                            <div class="col-sm-3">
                                                <input maxlength="100" type="text"
                                                       {{--required="required"--}}
                                                       class="form-control"
                                                       name="cep"
                                                       id="cep"
                                                       placeholder="Pesquise o CEP"/>
                                            </div>
                                            <img src="{{ asset('img/loading.gif') }}" border="0"
                                                 id="imgLoading" style="width:30px;border:0;display:none;"/>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="rua">Rua</label>
                                            <div class="col-md-6">
                                                <input id="rua" name="rua"
                                                       placeholder="Digite o logradouro"
                                                       class="form-control input-md" type="text">
                                            </div>

                                            <!-- Multiple Radios (inline) -->
                                            <label class="col-md-1 control-label"
                                                   for="nro">Número</label>
                                            <div class="col-md-2">
                                                <input id="nro" name="nro" placeholder="Número"
                                                       class="form-control input-md" type="text">
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="complemento">Complemento</label>
                                            <div class="col-sm-9">
                                                <input maxlength="100" type="text"
                                                       class="form-control"
                                                       name="complemento"
                                                       id="complemento"
                                                       placeholder="Complemento"/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="bairro">Bairro</label>
                                            <div class="col-sm-9">
                                                <input maxlength="100" type="text"
                                                       {{--required="required"--}}
                                                       class="form-control"
                                                       name="bairro"
                                                       id="bairro"
                                                       placeholder="Digite o Bairro"/>
                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="cidade">Cidade</label>
                                            <div class="col-md-6">
                                                <input name="cidade"
                                                       id="cidade"
                                                       maxlength="100"
                                                       placeholder="Digite a cidade"
                                                       class="form-control input-md" type="text">
                                            </div>

                                            <!-- Multiple Radios (inline) -->
                                            <label class="col-md-1 control-label"
                                                   for="uf">Estado</label>
                                            <div class="col-md-2">
                                                <input id="uf" name="uf"
                                                       placeholder="Digite o Estado"
                                                       class="form-control input-md" type="text">
                                            </div>

                                        </div>


                                        {{--<div class="form-group">--}}
                                        {{--<label class="col-sm-3 control-label" for="card-number">País</label>--}}
                                        {{--<div class="col-sm-9">--}}
                                        {{--<select required="required" class="form-control">--}}
                                        {{--<option value="0">Select Country</option>--}}
                                        {{--<option value="pakistan">Pakistan</option>--}}
                                        {{--<option value="usa">USA</option>--}}
                                        {{--</select>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                    </fieldset>
                                {{--</form>--}}
                            </div>
                            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">
                                Pagamento
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row setup-content" id="Security-Setup-step">

                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <div class="form-horizontal">
                                {{--<form role="form">--}}
                                    <fieldset>
                                        <br/>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="card-holder-name">
                                                Forma de Pagamento
                                            </label>
                                            <div class="col-sm-9">
                                                <select required="required" class="form-control">
                                                    <option value="0">:: Selecione ::</option>
                                                    <option value="gru">GRU</option>
                                                    <option value="cred">CREDFARDA</option>
                                                </select>
                                            </div>
                                        </div>

                                    </fieldset>
                                {{--</form>--}}
                            </div>
                            <!--h3> You are all set!</h3>
                            <p>Welcome to MetroPago. We are glade to have you here.</p-->
                            <button class="btn btn-primary btn-lg pull-right nextBtn"
                                    id="enviar"
                                    {{--onclick="document.forms['frm-pedido'].submit();"--}}
                                    onclick="$(this).closest('frm-pedido').submit();"
                                    type="submit">
                                Gerar Fatura
                            </button>
                        </div>
                    </div>
                </div>

            </form>
        @endif
    </div>
@endsection
