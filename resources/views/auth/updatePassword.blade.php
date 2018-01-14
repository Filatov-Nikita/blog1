<form method="post">
    {{csrf_field()}}
    <label>Новый пароль*<input type="text" name = "password"></label><br>
    <label>Подтвердите новый пароль*<input type="text" name = "password_confirmed"></label><br>
    <input type="submit" value = "Отправить" class = "btn">
</form>