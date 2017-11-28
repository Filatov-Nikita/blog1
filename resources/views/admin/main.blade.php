@extends('admin.base')
@section('content')
<div class="admin_line">Добро пожаловать Админ</div>
<div class="main_menu">
    <ul>
        <li><a href="{{url('/admin/post')}}">Посты</a></li>
        <li><a href="#">Портфолио</a></li>
    </ul>
</div>
    @endsection