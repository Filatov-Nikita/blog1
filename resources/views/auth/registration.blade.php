<div class="auth">
    <div class="name">Регистрация</div>
    <div class="form">
        <form action="{{ action('LoginController@registration') }}" method = "POST">
            {{ csrf_field() }}
            <label>Имя*<input type="text" name = "name" value = "{{old('name')}}"></label>
            @if ($errors->has('name'))
            <div>лвлвал</div>
            @endif
            <label>Email*<input type="text" name = "email" value = "{{old('email')}}"></label>
            <label>Пароль <input type="password" name = "password"></label>
            <label>Повтор пароля <input type="password" name = "password_confirmation"></label>
            <input type="submit" value = "Регистрация" class = "btn">
        </form>
    </div>
</div>