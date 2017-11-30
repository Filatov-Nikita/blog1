@extends('admin.base')
@section('right_column')
    <div class="header">Добавление нового поста</div>
    <div class="help_header">Внесите в форму данные для создания нового поста,<br> все поля необходимы для заполнения !</div>
    <div class="form">
        <form action="" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <label for="title">Название поста</label> <input type="text" name="title">
            <label for="description">Описание поста</label> <input type="text" name = "description">
            <input type="file" name = "file">
            <textarea name="content"></textarea>
            <input type="submit" value="Сохранить">
        </form>
    </div>
@endsection