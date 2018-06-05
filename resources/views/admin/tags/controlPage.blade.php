@extends('admin.base')
  @section('right_column')
  <div class="namePage">Управление тегами</div>
	<div class="form">
		
	</div>
    <div class="list">
      <ul>
        @include('admin.tags.listTags')
    </ul>
    </div>
  @endsection