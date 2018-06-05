<form action="" method="POST" enctype="multipart/form-data">
	{{csrf_field()}}
	<label for="addTag">Название тега</label> <input type="text" name = "name" id="addTag" @if($edit) value = "{{$tag->name}}" @endif>
	<label for="editTag">Описание тега</label> <input type="text" name = "description" id="editTag" @if($edit) value = "{{$tag->description}}" @endif>
	<input type="submit" value="Сохранить"><br>
</form>