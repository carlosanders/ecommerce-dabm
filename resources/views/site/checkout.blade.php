@extends('layouts.loja')

@section('htmlheader_title')
    Marinha do Brasil
@endsection

@section('contentheader')

    @if (session()->has('not_logged'))
        <div class="alert alert-info">
            <strong>{{ session()->get('not_logged') }}</strong>
            <a href="{{ route('login') }}" class="alert-link">
                Clique aqui para entrar
                <span class="glyphicon glyphicon-log-in"></span>
            </a>.
        </div>
    @endif

    @if (Auth::check())
        <h4 class="text-warning">Olá <strong>{{ Auth::user()->name }}</strong>,
            obrigado pelo compra, preencha os dados abaixo
            para finalizar o processo.
            <span class="glyphicon glyphicon-ok"></span>
        </h4>
    @endif

@endsection

@section('navbar-brand')
    <a class="navbar-brand" href="#">
        <i class="fa fa-envira" aria-hidden="true"></i>
        <b>e-DAbM</b></a>
@endsection

@section('main-content')
    <div class="row">
        @if (Auth::check())
            <br/> <br/>
            <div class="stepwizard">
                <div class="stepwizard-row setup-panel">
                    <div class="stepwizard-step">
                        <a href="#VerifyEmail-step" type="button" class="btn btn-success btn-circle"
                           id="VerifyEmail-step-1">
                            <span class="glyphicon glyphicon-envelope"></span>
                        </a>
                        <p>Verify Email</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#ProfileSetup-step" type="button" class="btn btn-primary btn-circle"
                           id="ProfileSetup-step-2" disabled="disabled">
                            <span class="glyphicon glyphicon-user"></span>
                        </a>
                        <p>Profile Setup</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#Security-Setup-step" type="button" class="btn btn-success-2 btn-circle"
                           disabled="disabled" id="Security-Setup-step-3">
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
                                        <legend>Enter Your Email Information</legend>
                                        <br/>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="card-holder-name">Your
                                                Email</label>
                                            <div class="col-sm-9">
                                                <input maxlength="100" type="email" required="required"
                                                       class="form-control" placeholder="Enter Email"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="card-number">Password</label>
                                            <div class="col-sm-9">
                                                <input maxlength="100" type="password" required="required"
                                                       class="form-control" placeholder="Enter Password"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="card-number">Re-enter
                                                Password</label>
                                            <div class="col-sm-9">
                                                <input maxlength="100" type="password" required="required"
                                                       class="form-control" placeholder="Enter Password"/>
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
            ...
        @endif
    </div>
@endsection
