@extends('admin.base')
@section('right_column')
    <div class="header">Добавление нового проекта</div>
    <div class="help_header">Внесите в форму данные для создания нового проекта,<br> все поля необходимы для заполнения !</div>
    <div class="form">
      @include('admin.forms.project')
    </div>
@endsection