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
                        <p>Entrega</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#ProfileSetup-step" type="button"
                           class="btn btn-success btn-circle"
                           disabled="disabled"
                           id="ProfileSetup-step-2">
                            <span class="glyphicon glyphicon-user"></span>
                        </a>

                        <p>Credenciais</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#Security-Setup-step" type="button"
                           class="btn btn-success-2 btn-circle"
                           disabled="disabled"
                           id="Security-Setup-step-3">
                            <span class="glyphicon glyphicon-ok"></span>
                        </a>
                        <p>Security Setup</p>
                    </div>
                </div>
            </div>

            <form role="form">
                <div class="row setup-content" id="VerifyEmail-step">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <br/>
                            <div class="form-horizontal">
                                <form role="form">
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
                                </form>
                            </div>
                            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Setup Profile
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row setup-content" id="ProfileSetup-step">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <br/>
                            <div class="form-horizontal">
                                <form role="form">
                                    <fieldset>

                                        <legend>Entre com os seus Dados</legend>
                                        <br/>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="card-holder-name">Your
                                                Email</label>
                                            <div class="col-sm-9">
                                                <input maxlength="100" type="text" required="required"
                                                       class="form-control"
                                                       placeholder="Enter Email"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="card-number">Name</label>
                                            <div class="col-sm-9">
                                                <input maxlength="100" type="text" required="required"
                                                       class="form-control"
                                                       placeholder="Enter Name"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="card-number">Primary Phone
                                                Number</label>
                                            <div class="col-sm-9">
                                                <input maxlength="100" type="text" required="required"
                                                       class="form-control"
                                                       placeholder="Enter Primary Phone Number"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="card-number">Address</label>
                                            <div class="col-sm-9">
                                                <input maxlength="100" type="text" required="required"
                                                       class="form-control"
                                                       placeholder="Enter Address"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-sm-6 control-label" for="card-number">City</label>
                                                <div class="col-sm-6" style="padding-left:8px">
                                                    <input maxlength="100" type="text" required="required"
                                                           class="form-control" placeholder="Enter City"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-sm-6 control-label"
                                                       for="card-number">State/Province</label>
                                                <div class="col-sm-6" style="padding:0px">
                                                    <input maxlength="100" type="text" required="required"
                                                           class="form-control" placeholder="Enter State/Province"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="card-number">Country</label>
                                            <div class="col-sm-9">
                                                <select required="required" class="form-control">
                                                    <option value="0">Select Country</option>
                                                    <option value="pakistan">Pakistan</option>
                                                    <option value="usa">USA</option>
                                                </select>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Setup Profile
                            </button>
                        </div>
                    </div>
                </div>


            </form>
        @endif
    </div>
@endsection
