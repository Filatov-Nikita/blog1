@extends('admin.base')
@section('content')
    <div class="admin_line">Заполните поля для добавления поста</div>
    <div class="form">
        <form action="" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <label>Тайтл поста</label><input type="text" name = "title"  value="{{$article->title}}">
            <label for="description">Описание поста</label><input type="text" name = "description" value="{{$article->description}}">
            <label>Добавить миниатюру к посту</label><input type="file" name="file" />
            <label>Содержимое поста</label><textarea name="content" id="content">{{$article->content}}</textarea>
            <input type="submit" value = "Сохранить">
        </form>
    </div>
    @endsection