<div class="form">
	<form action="" method="POST" enctype="multipart/form-data">
		{{csrf_field()}}
		<label for="title">Название поста</label> 
		<input type="text" name="title" @if ($errors->has('title')) class = "error-input" @endif @if(!$create) value="{{$article->title}}" @else value="{{old('title')}}" @endif>
		@if ($errors->has('title'))
			<span class="error-message"><strong>{{ $errors->first('title') }}</strong></span>
		@endif
		<label for="description">Описание поста</label> <input type="text" name = "description" @if ($errors->has('description')) class = "error-input" @endif @if(!$create) value="{{$article->description}}" @else value="{{old('description')}}" @endif>
		@if ($errors->has('description'))
			<span class="error-message"><strong>{{ $errors->first('description') }}</strong></span>
		@endif
		<br>
		@if(!$create) <div><img src="{{upload_path($article->image)}}" alt=""></div> @endif
		<input type="file" name = "file"><br>
		@if ($errors->has('file'))
		<span class="error-message"><strong>Пожалуйста выберите изображение</strong></span>
	@endif
		<textarea name="content" id = "content">
			@if(!$create) {{$article->content}} @else {{old('content')}} @endif
		</textarea><br>
		@if ($errors->has('content'))
			<span class="error-message"><strong>{{ $errors->first('content') }}</strong></span>
		@endif
		<label for="tag">Теги поста</label>
		<select name = "tag[]" multiple id = "tag" class = "multiSelect">
			@foreach ($tags as $tag)
				<option @if(!$create) @if(in_array($tag->id, $tagsArticle->pluck('id')->toArray())) selected disabled @endif @endif value="{{$tag->id}}">{{'@'}}{{$tag->name}}</option>
			@endforeach
		</select>
		<input type="submit" value="Сохранить"><br>
	</form>
</div>