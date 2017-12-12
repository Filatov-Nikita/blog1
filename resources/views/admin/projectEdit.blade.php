@extends('admin.base')
@section('right_column')
    <div class="header">Добавление нового проекта</div>
    <div class="help_header">Внесите в форму данные для создания нового проекта,<br> все поля необходимы для заполнения !</div>
    @if(session('successEditProject'))
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
        <div class = "success">{{session('successEditProject')}}</div>
        @endif
    <div class="form">
        <form action="" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <label for="name">Название проекта</label> <input type="text" name="name" value="{{$project->name}}">
            <label for="description">Описание проекта</label> <input type="text" name = "description" value="{{$project->description}}">
            <label for="term">Срок создания проекта</label> <input type="text" name = "term" value="{{$project->term}}">
            <div>
                <img src="{{upload_path($project->logo)}}" alt="">
            </div>
            <label for="logo">Логотип компании</label><input type="file" name = "logo"><br>
            <div>
                <img src="{{upload_path($project->image)}}" alt="">
            </div>
            <label for="image">Thumbnail проекта</label><input type="file" name = "image"><br>
            <textarea name="content" id = "content">
                {{$project->content}}
            </textarea><br>
            <input type="submit" value="Сохранить"><br>
        </form>
    </div>
@endsection