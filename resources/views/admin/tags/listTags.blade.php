@foreach ($tags as $tag)
	<li>
		<a href="{{route('admin.tags.edit', ['id' => $tag->id])}}">{{$tag->name}}</a>
	</li>
@endforeach