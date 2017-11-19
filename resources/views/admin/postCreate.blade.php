@extends('admin.base')
@section('content')
    <div class="admin_line">Заполните поля для добавления поста</div>
    <div class="form">
        <form action="" method="POST">
            <label>Тайтл поста<input type="text" name = "title"></label>
            <label for="description">Описание поста</label><input type="text" name = "description">
            <label for="image">Загрузите миниатюру</label><input type="file" name = "image">
            <label>Содержимое поста</label>><textarea name="content" id="content"></textarea>
        </form>
    </div>
    @endsection