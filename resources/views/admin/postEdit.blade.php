@extends('admin.base')
@section('right_column')

  <ul>
      @foreach($all_articles as $k)
      <li><a href="{{route('admin.getPostById', ['id' => $k->id])}}">{{$k->title}}</a></li>
    @endforeach
  </ul>
    @endsection