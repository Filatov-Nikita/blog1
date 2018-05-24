@extends('admin.base')
  @section('right_column')
  <div class="namePage">{{$namePage}}</div>
    <div class="list">
      <ul>
        @include($listName)
    </ul>
    </div>
  @endsection