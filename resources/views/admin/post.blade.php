@extends('admin.base')
@section('content')
<div class="admin_line">Выберите действие</div>
<div class="main_menu">
    <ul>
        <li><a href="{{url('admin/post/create')}}">Добавить</a></li>
        <li><a href="#">Редактировать</a></li>
        <li><a href="#">Удалить</a></li>
    </ul>
</div>
    @endsection