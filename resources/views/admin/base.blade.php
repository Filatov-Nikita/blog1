@extends('layouts.base')
@section('link')
    @parent
    <link href="{{url('css/admin.css')}}" rel="stylesheet">
    <link href="{{url('css/app.css')}}" rel="stylesheet">
@endsection

@section('content')
    {{--<div class="top_line">--}}
        {{--<div class="menu">--}}
            {{--<ul>--}}
                {{--<li><a href="{{route('site.main.about')}}">Главная</a></li>--}}
                {{--<li><a href="">Посты</a></li>--}}
                {{--<li><a href="">Портфолио</a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
        {{--<div class="version_prog">Админ панель Филатова Никиты версия 1.0</div>--}}
    {{--</div>--}}
    <div class="main">
        <div class="menu">
            <div class="top">
                <div class="logo"><div class="word">{{mb_substr(ucfirst($userName), 0, 1)}}</div></div>
                <div class="name">{{$userName}}</div>
            </div>
            <div class="bookmark">
                <ul class = "outMenu">
                    <li><a href="">Посты</a>
                        <ul class = "innerMenu">
                            @can('create', \App\Models\Article::class)
                            <li><a href="{{url('/admin/post/create')}}">Добавить</a></li>
                            @endcan
                                @can('edit', \App\Models\Article::class)
                            <li><a href="{{url('/admin/post/edit')}}">Редактировать</a></li>
                                @endcan
                                @can('delete', \App\Models\Article::class)
                            <li><a href="">Удалить</a></li>
                                @endcan
                        </ul>
                    </li>
                    <li><a href="">Порфтолио</a>
                        <ul class = "innerMenu">
                            <li><a href="{{url('/admin/project/create')}}">Добавить</a></li>
                            <li><a href="{{url('/admin/project/edit')}}">Редактировать</a></li>
                            <li><a href="">Удалить</a></li>
                        </ul></li>
                    <li><a href="">Пользователи</a></li>
                    <li><a href="">Меню</a></li>
                    <li><a href="">Страницы</a></li>
                    <li><a href="">Настройки</a></li>
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