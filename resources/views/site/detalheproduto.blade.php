@extends('layouts.loja')

@section('htmlheader_title')
    Marinha do Brasil
@endsection

@section('contentheader_title')
    {{--E-commerce DAbM - Marinha do Brasil--}}
@endsection

@section('navbar-brand')
    <a class="navbar-brand" href="#"><b>Marinha do Brasil</b></a>
@endsection

@section('main-content')
    @include('site.partials.produto')
@endsection
