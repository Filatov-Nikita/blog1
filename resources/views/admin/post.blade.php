@extends('admin.base')
@section('content')
    <div class="admin_line">Выберите действие</div>
    @if(session('success'))
        <p>{{session('success')}}</p>
    @endif
    <div class="main_menu">
        <ul>
            @can('create')
                <li><a href="{{url('admin/post/create')}}">Добавить</a></li>
            @endcan
                @can('edit')
            <li><a href="{{url('admin/post/edit')}}">Редактировать</a></li>
                @endcan
                @can('delete')
            <li><a href="#">Удалить</a></li>
                @endcan
        </ul>
    </div>
@endsection