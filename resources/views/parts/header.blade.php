<div class = "menuS">
    <div class = "menu_btn"></div>
    <div class = "podl"></div>
    <div class = "container">
        <div class = "menu_btn"></div>
        <div class = "option">
            <form action="{{url('/search')}}" method="GET">
                <input type = "text" name = "query" placeholder="Search">
            </form>
            <ul>
                <li><a href = "{{ route('site.main.login') }}">Войти</a></li>
                <li><a href = "{{ route('site.main.index') }}">Главная</a></li>
                <li><a href = "{{ route('site.main.about') }}">Об авторе</a></li>
                <li><a href = "{{ route('site.main.portfolio') }}">Портфолио</a></li>
                <li><a href = "{{ route('site.main.articles') }}">Статьи</a></li>
                <li><a href="{{route('site.main.feedback')}}">Написать мне</a></li>
            </ul>
        </div>

    </div>
</div>
<header>
    <div class="line"></div>
    <div class="header_img">
        <div class="container">
            <div class="search">
                <form action="{{url('/search')}}" method="GET">
                    <label><input type = "text" name = "query"></label>
               </form>
            </div>
            @if(Auth::check())
            <div class="auth">Вы вошли как {{Auth::user()->name}}</div>
            @else
            <div class="auth"><a href="{{ route('site.main.login') }}">Войти</a></div>
            @endif
        </div>
        <span class = "name">Filatov&nbsp;Nikita</span>
    </div>
    <div class="wrapper">

    </div>
</header>
<nav>
    <div class="wrapper">
        <ul>
            <li><a href="{{ route('site.main.index') }}">Главная</a></li>
            <li><a href="{{ route('site.main.about') }}">Об авторе</a></li>
            <li><a href="{{ route('site.main.portfolio') }}">Портфолио</a></li>
            <li><a href="{{ route('site.main.articles') }}">Статьи</a></li>
            <li><a href="{{route('site.main.feedback')}}">Заказчикам</a></li>
        </ul>
    </div>
</nav>