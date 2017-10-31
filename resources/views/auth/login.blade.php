<div class="one_port">
    <p>Авторизация / Регистрация</p>
</div>
<div class="auth_page">
    <div class="container">
        <div class="auth">
            <div class="name">Авторизация</div>

            <div class="form" name = "login">
                <form action="" method = "POST">
                    {{ csrf_field() }}
                    <label>Логин*<input type="text" name = "email" value = "{{old('email')}}"></label>
                    <label>Пароль <input type="password" name = "password"></label>
                    <input type="submit" value = "Войти" class = "btn" name = "one_btn">
                </form>
                @if(session('authError'))
                <div>{{session('authError')}}</div>
                @endif
            </div>
        </div>
        <div class="auth">
            <div class="name">Регистрация</div>
            @if(isset($errors) && count($errors) > 0) 
            <div class="">
                <ul>
                    @foreach ($errors->all() as $err)
                    <li>{{$err}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="form">
                <form action="" method = "POST">
                    {{ csrf_field() }}
                    <label>Имя*<input type="text" name = "name" value = "{{old('name')}}"></label>
                    <label>Email*<input type="text" name = "email" value = "{{old('email')}}"></label>
                    <label>Пароль <input type="password" name = "password"></label>
                    <label>Повтор пароля <input type="password" name = "password_confirmation"></label>
                    <input type="submit" value = "Регистрация" class = "btn" name = "registr">
                </form>
            </div>
        </div>
    </div>
</div>