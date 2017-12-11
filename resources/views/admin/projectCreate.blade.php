@extends('admin.base')
@section('right_column')
    <div class="header">Добавление нового проекта</div>
    <div class="help_header">Внесите в форму данные для создания нового проекта,<br> все поля необходимы для заполнения !</div>
    <div class="form">
        <form action="" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <label for="name">Название проекта</label> <input type="text" name="name">
            <label for="description">Описание проекта</label> <input type="text" name = "description">
            <label for="term">Срок создания проекта</label> <input type="text" name = "term">
            <label for="logo">Логотип компании</label><input type="file" name = "logo"><br>
            <label for="image">Thumbnail проекта</label><input type="file" name = "image"><br>
            <textarea name="content" id = "content"></textarea><br>
            <input type="submit" value="Сохранить"><br>
        </form>
    </div>
@endsection