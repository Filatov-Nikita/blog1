@extends('layouts.base')

@section('header')
    @include('parts.header')
@endsection

@section('content')
     <div class="columns">
            <div class="wrapper">
                <div class="main">
                    <div class="one_column">
                @yield('left-column')
            </div>
              <div class="two_column">
                @yield('right-column')
            </div>
        </div>
    </div>
         </div>
@endsection

@section('footer')
    @include('blocks.footer')
@endsection
