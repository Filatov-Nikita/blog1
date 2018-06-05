@extends('admin.base')
@section('right_column')
    <div class="header">Редактирование тега {{$tag->name}}</div>
	<div class="help_header">Внесите в форму данные для создания h проекта,<br> все поля необходимы для заполнения !</div>
	@if(isset($success) && $success)
		@include('admin.notifications.success', ['message' => 'Редактирование тега успешно завершено'])
	@endif
    <div class="form">
		@include('admin.forms.tags')
    </div>
@endsection