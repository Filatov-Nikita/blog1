@extends('admin.base')
@section('right_column')

  <ul>
      @foreach($all_projects as $k)
      <li><a href="{{route('admin.getPostById', ['id' => $k->id])}}">{{$k->name}}</a></li>
    @endforeach
  </ul>
    @endsection