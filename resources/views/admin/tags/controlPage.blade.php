@extends('admin.base')
  @section('right_column')
  <div class="namePage">Управление тегами</div>
  <div class="form">
	  	@include('admin.forms.tags')
  </div>
    <div class="list">
      <ul>
        @include('admin.tags.listTags')
    </ul>
    </div>
  @endsection