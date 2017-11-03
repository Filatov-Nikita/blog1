@extends('layouts.base')

@section('header')
    @include('parts.header')
@endsection

@section('content')
@yield('content')
@endsection

@section('footer')
    @include('blocks.footer')
@endsection




