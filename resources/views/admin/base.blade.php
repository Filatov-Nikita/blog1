@extends('layouts.base')
@section('link')
    @parent
    <link href="{{url('css/admin.css')}}" rel="stylesheet">
    <link href="{{url('css/app.css')}}" rel="stylesheet">
@endsection

@section('content')
    <div class="top_line">
        <div></div>
        <div class="version">Админ панель Филатова Никиты version 1.0</div>
    </div>
    <div class="main">
        <div class="menu">
            <div class="top">
                <div class="logo"><div class="word">{{mb_substr(ucfirst(Auth::user()->name), 0, 1)}}</div></div>
                <div class="name">{{Auth::user()->name}}</div>
            </div>
            <div class="bookmark">
                <ul class = "outMenu">
                    <li><a href="">Посты</a>
                        <ul class = "innerMenu">
                            @can('post_create')
                            <li><a href="{{url('/admin/post/create')}}">Добавить</a></li>
                            @endcan
                                @can('post_edit')
                            <li><a href="{{url('/admin/post/edit')}}">Редактировать</a></li>
                                @endcan
                                @can('post_delete')
                                     <li><a href="{{url('/admin/post/delete')}}">Удалить</a></li>
                                @endcan
                        </ul>
                    </li>
                    <li><a href="">Порфтолио</a>
                        <ul class = "innerMenu">
                            @can('project_create')
                            <li><a href="{{url('/admin/project/create')}}">Добавить</a></li>
                            @endcan
                                @can('project_edit')
                            <li><a href="{{url('/admin/project/edit')}}">Редактировать</a></li>
                                @endcan
                                @can('project_delete')
                                  <li><a href="{{url('/admin/project/delete')}}">Удалить</a></li>
                                @endcan
                        </ul></li>
                    <li><a href="">Пользователи</a></li>
                    <li><a href="">Меню</a></li>
                    {{-- <li><a href="">Страницы</a></li>
                    <li><a href="">Настройки</a></li> --}}
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