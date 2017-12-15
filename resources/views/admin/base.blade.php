@extends('layouts.base')
@section('link')
    @parent
    <link href="{{url('css/admin.css')}}" rel="stylesheet">
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
                <div class="logo">N</div>
                <div class="name">Nikita522</div>
            </div>
            <div class="bookmark">
                <ul class = "outMenu">
                    <li><a href="">Посты</a>
                        <ul class = "innerMenu">
                            <li><a href="">Добавить</a></li>
                            <li><a href="">Редактировать</a></li>
                            <li><a href="">Удалить</a></li>
                        </ul>
                    </li>
                    <li><a href="">Порфтолио</a>
                        <ul class = "innerMenu">
                            <li><a href="">Добавить</a></li>
                            <li><a href="">Редактировать</a></li>
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