@foreach($all_articles as $article)
<li><a href="{{route($routeName, ['id' => $article->id])}}">{{$article->title}}</a></li>
@endforeach