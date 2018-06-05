@extends('admin.base')
@section('right_column')
    <div class="header">Редактирование поста</div>
    <div class="help_header">Внесите в форму данные для создания нового поста,<br> все поля необходимы для заполнения !</div>
	@include('admin.forms.post', ['tagsArticle' => $article->tags])
    @endsection
