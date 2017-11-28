@extends('admin.base')
@section('content')

  <ul>
      @foreach($all_articles as $k)
      <li><a href="{{route('site.admin.getPostById', ['id' => $k->id])}}">{{$k->title}}</a></li>
    @endforeach
  </ul>
    @endsection