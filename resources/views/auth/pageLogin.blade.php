<div class="portfolio">
    <p>Авторизация / Регистрация</p>
</div>
<div class="auth_page">
    <div class="container">
        @section('login')
            @include('auth.login')
        @show

        @section('registration')
            @include('auth.registration')
        @show
    </div>
</div>