@extends('admin.base')
@section('content')
    <div class="admin_line">Заполните поля для добавления поста</div>
    <div class="form">
        <form action="" method="POST">
            {{ csrf_field() }}
            <label>Тайтл поста</label><input type="text" name = "title"  value="{{old('title')}}">
            <label for="description">Описание поста</label><input type="text" name = "description" value="{{old('description')}}">

            <label>Содержимое поста</label>><textarea name="content" id="content"></textarea>
            <input type="submit" value = "Сохранить">
        </form>
    </div>
    @endsection