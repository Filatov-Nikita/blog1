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
                <div class="logo"><div class="word"><a style="color:#fff; text-decoration:none" href="{{url('/admin')}}">{{mb_substr(ucfirst(Auth::user()->name), 0, 1)}}</a></div></div>
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
                        <li><a href="">Пользователи</a>
                            <ul class = "innerMenu">
                                @can('user_role_change')
                                <li><a href="{{url('/admin/users/rolechange')}}">Назначить роль</a></li>
                               @endcan
                            </ul>
						</li>
						<li><a href="">Теги</a>
                            <ul class = "innerMenu">
                                @can('user_role_change')
                                <li><a href="{{url('/admin/tags/control')}}">Управление тегами</a></li>
                               @endcan
                            </ul>
                        </li>
                    <li><a href="">Меню</a>
                        <ul class = "innerMenu">
                           
                            <li><a href="{{url('/admin/menu/control')}}">Управление пунктами меню</a></li>

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