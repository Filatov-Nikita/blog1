<form action="" method="POST" enctype="multipart/form-data">
	{{csrf_field()}}
	<label for="name">Название проекта</label> <input @if ($errors->has('name')) class = "error-input" @endif type="text" name="name" value="{{old('name')}}">
	@if ($errors->has('name'))
		<span class="error-message"><strong>{{ $errors->first('name') }}</strong></span>
	@endif
	<label for="description">Описание проекта</label> <input @if ($errors->has('description')) class = "error-input" @endif type="text" name = "description" value="{{old('description')}}">
	@if ($errors->has('description'))
		<span class="error-message"><strong>{{ $errors->first('description') }}</strong></span>
	@endif
	<label for="term">Срок создания проекта</label> <input @if ($errors->has('term')) class = "error-input" @endif type="text" name = "term" value="{{old('term')}}">
	@if ($errors->has('description'))
		<span class="error-message"><strong>{{ $errors->first('term') }}</strong></span>
	@endif
	<label for="logo">Логотип компании</label><input type="file" name = "logo"><br>
	<label for="image">Thumbnail проекта</label><input type="file" name = "image"><br>
	<textarea name="content" id = "content">{{old('content')}}</textarea><br>
	@if ($errors->has('content'))
		<span class="error-message"><strong>{{ $errors->first('content') }}</strong></span>
	@endif
	<input type="submit" value="Сохранить"><br>
</form>