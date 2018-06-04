@extends('admin.base')
@section('right_column')
    <div class="header">Добавление нового поста</div>
    <div class="help_header">Внесите в форму данные для создания нового поста,<br> все поля необходимы для заполнения !</div>
    @if(session('successPostCreate'))
        <style>
            .success {
                background: #158c25b8;
                color:#fff;
                text-align: center;
                padding: 5px 0;
                margin: 0 15px;
                font:18px lora;
            }
        </style>
        <div class = "success">{{session('successPostCreate')}}</div>
    @endif
   @include('admin.forms.post')
@endsection