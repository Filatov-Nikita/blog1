@extends('admin.base')
@section('right_column')

  <ul>
      @foreach($list_projects as $project)
      <li><a href="{{route('admin.editProject', ['id' => $project->id])}}">{{$project->name}}</a></li>
    @endforeach
  </ul>
    @endsection