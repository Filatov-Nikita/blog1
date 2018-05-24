@extends('admin.base')
@section('right_column')
<div class="header">Изменение роли пользователя {{$user->name}}</div>
<div class="help_header">Выберите из списка роль и назначте ее пользователю !</div>
<div class="form">
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="info_user">
                <h2>Краткая информация о пользователе:</h2>
                <ul>
                    <li><span>email: </span>{{$user->email}}</li>
                    <li><span>Дата регистрации: </span>{{$user->created_at}}</li>
                    <li><span>Текущая роль пользователя: </span>{{$user->role->name}}</li>
                    <li><span>Статус регистрации: </span>@if($user->registration_status) Регистрация подтверждена @else Ожидает подтверждения @endif</li>
                </ul>
            </div>
        {{csrf_field()}}
        <label for="description">Список ролей пользователя</label> 
        <select name="rolesList" {{$user->registration_status ? '' : 'disabled'}}>
            @foreach($roles as $role) 
                <option value="{{$role->id}}">{{$role->name}}</option>
            @endforeach    
        </select>
        <input type="submit" value="Сохранить"><br>
    </form>
</div>
@endsection