@extends('admin.base')
  @section('right_column')
  <div class="namePage">Управление пунктами меню</div>
    <div class="list">
        <ul>
            <li><a href="{{url('/')}}">Главная<br> Адрес: '/'</a></li>
            <li><a href="{{url('/articles')}}">Статьи<br> Адрес: '/articles'</a></li>
            <li><a href="{{url('/portfolio')}}">Проекты<br> Адрес: '/portfolio'</a></li>
            <li><a href="{{url('/about')}}">Об авторе<br> Адрес: '/about'</a></li>
            <li><a href="{{url('/feedback')}}">Написать мне<br> Адрес: '/feedback'</a></li>
            <li><a href="{{url('/supportme')}}">Поддержать<br> Адрес: '/supportme'</a></li>
        </ul>
    </div>
  @endsection