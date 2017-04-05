@extends('layouts.loja')

@section('htmlheader_title')
    Marinha do Brasil
@endsection

@section('contentheader')
    @include('site.partials.contentheader')
@endsection

@section('navbar-brand')
    <a class="navbar-brand" href="#">
        <i class="fa fa-envira" aria-hidden="true"></i>
        <b>e-DAbM</b></a>
@endsection

@section('main-content')
    @include('site.partials.thumbnail-name')
@endsection


