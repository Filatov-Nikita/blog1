@extends('layouts.two-column')

@section('left-column')
    @include($page)
@endsection

@section('right-column')
    <div class="line">Добро пожаловать</div>
                        <div class="links">
                            <ul>
                                @if(!Auth::check())
                                     <li><a href="{{ route('site.main.login') }}">Регистрация</a></li>
                                     @else 
                                      <li><a href="{{ route('site.main.logout') }}">Выйти</a></li>
                                    @endif
                                <li><a href="{{route('site.main.feedback')}}">Написать мне</a></li>
                                <li><a href="">Поддержать меня</a></li>
                            </ul>
                        </div>
@endsection
