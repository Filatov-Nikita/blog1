@extends('admin.base')
@section('right_column')
    <div class="welcome">
        <p> Добро пожаловать {{Auth::user()->name}}</p>
    </div>
@endsection