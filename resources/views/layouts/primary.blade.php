@extends('layouts.two-column')

@section('left-column')
    @include($page)
@endsection

@section('right-column')
	@include('widgets.default')
	@yield('widgets')
@endsection
