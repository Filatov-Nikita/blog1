<div>Здравствуйте {{$data['name']}} !</div><br>
<div>Вы только что зарегистрировались на сайте ваш логин является ваш email - {{$data['email']}}</div>
<div>Для продолжения работы на нашем сайте вам необходимо подтвердить регистрацию <a href = "{{route('confirmed', ['hash' => $data['hash']])}}">Нажмите сюда</a></div>
<div>Если это письмо попало к вам по ошибке то сообщите нам !</div>