<form action="" method="POST" enctype="multipart/form-data">
	{{csrf_field()}}
	<label for="addTag">Название тега</label> <input @if ($errors->has('name')) class = "error-input" @endif type="text" name = "name" id="addTag" @if($edit) value = "{{$tag->name}}" @else value = "{{old('name')}}" @endif>
	@if ($errors->has('name'))
		<span class="error-message"><strong>{{ $errors->first('name') }}</strong></span>
	@endif
	<label for="editTag">Описание тега</label> <input @if ($errors->has('description')) class = "error-input" @endif type="text" name = "description" id="editTag" @if($edit) value = "{{$tag->description}}" @else value = "{{old('description')}}" @endif>
	@if ($errors->has('name'))
		<span class="error-message"><strong>{{ $errors->first('description') }}</strong></span>
	@endif
	<input type="submit" value="Сохранить"><br>
</form>