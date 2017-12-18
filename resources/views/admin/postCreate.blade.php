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
    <div class="form">
        <form action="" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <label for="title">Название поста</label> <input type="text" name="title">
            <label for="description">Описание поста</label> <input type="text" name = "description">
            <input type="file" name = "file"><br>
            <textarea name="content" id = "content"></textarea><br>
            <input type="submit" value="Сохранить"><br>
        </form>
    </div>
@endsection