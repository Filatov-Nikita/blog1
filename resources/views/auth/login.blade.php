
        <div class="auth">
            <div class="name">Авторизация</div>
           
            <div class="form" name = "login">
                <form action="{{ action('LoginController@login') }}" method = "POST">
                    {{ csrf_field() }}
                    <label>Логин*<input type="text" name = "email" value = "{{old('email')}}"></label>
                    <label>Пароль <input type="password" name = "password"></label>
                    <input type="submit" value = "Войти" class = "btn" name = "one_btn">
                    <div class="resetPassword">
                        <a href="#">Забыли пароль</a>
                    </div>
                </form>
                 @if(session('authError'))
            <div>{{session('authError')}}</div>
            @endif
            </div>
        </div>
