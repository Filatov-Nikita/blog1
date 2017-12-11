@extends('layouts.base')
@section('link')
    @parent
    <link href="{{url('css/admin.css')}}" rel="stylesheet">
@endsection

@section('content')
    <div class="top_line">
        <div class="menu">
            <ul>
                <li><a href="{{route('site.main.about')}}">Главная</a></li>
                <li><a href="">Посты</a></li>
                <li><a href="">Портфолио</a></li>
            </ul>
        </div>
        <div class="version_prog">Админ панель Филатова Никиты версия 1.0</div>
    </div>
    <div class="main">
        <div class="left_panel">
            <div class="user">
                <div class="name">{{$userName}}</div>
            </div>
            <div class="menu">
                <ul class = "master">
                    <li class = "hover">
                        Посты
                        <ul class = "slave">
                            @can('create')
                            <li><a href="{{url('admin/post/create')}}">Добавить</a></li>
                            @endcan
                                @can('edit')
                            <li><a href="{{route('admin.editPost')}}">Редактировать</a></li>
                                @endcan
                                @can('delete')
                            <li><a href="">Удалить</a></li>
                                    @endcan
                        </ul>
                    </li>
                    <li class = "hover">
                        Портфолио
                        <ul class = "slave">
                            <li><a href="{{url('admin/project/create')}}">Добавить</a></li>
                            <li><a href="">Редактировать</a></li>
                            <li><a href="">Удалить</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="right_panel">
            @yield('right_column')
        </div>
    </div>
@endsection

@section('footer')
@endsection