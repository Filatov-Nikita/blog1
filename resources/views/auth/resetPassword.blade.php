<form method="post" action="{{route('password.email')}}">
    {{csrf_field()}}
    <label>Email*<input type="text" name = "email" value = "{{old('email')}}"></label><br>
    <input type="submit" value = "Отправить" class = "btn">
</form>