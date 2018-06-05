<div class="form">
	<form action="" method="POST" enctype="multipart/form-data">
		{{csrf_field()}}
		<label for="title">Название поста</label> @if(!$create) <input type="text" name="title" value="{{$article->title}}"> @else 
		<input type="text" name="title">
		@endif
		<label for="description">Описание поста</label> @if(!$create) <input type="text" name = "description" value="{{$article->description}}"> @else 
		<input type="text" name = "description">
		@endif
		<br>
		@if(!$create)
		<div>
			<img src="{{upload_path($article->image)}}" alt="">
		</div>
		@endif
		<input type="file" name = "file"><br>
		<textarea name="content" id = "content">
			@if(!$create)
				{{$article->content}}
			@endif
		</textarea><br>
		<label for="tag">Теги поста</label>
		<select name = "tag[]" multiple id = "tag" class = "multiSelect">
			@foreach ($tags as $tag)
				<option @if(!$create) @if(in_array($tag->id, $tagsArticle->pluck('id')->toArray())) selected disabled @endif @endif value="{{$tag->id}}">{{'@'}}{{$tag->name}}</option>
			@endforeach
		</select>
		<input type="submit" value="Сохранить"><br>
	</form>
</div>