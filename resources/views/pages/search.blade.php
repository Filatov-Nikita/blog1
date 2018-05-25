<div class="portfolio">
        <p>Найденные статьи</p>
    </div>
    <p class = "query">Поиск по запросу: {{$query}}</p>
    <div class="state">
            <div class="container">
                @forelse($results as $result)
                    <div class="item">
                        <div class="line"></div>
                        <a class="foto" href="{{route('site.main.articlesById', ['id' => $result->id])}}">
                            <div class="dark"></div>
                            <img src="{{upload_path($result->image)}}" alt=""/>
                        </a>
                        <div class="name_post"><a href="{{route('site.main.articlesById', ['id' => $result->id])}}">{{$result->title}}</a></div>
                        <div class="description">
                           {{$result->description}}
                        </div>
                        <div class="underline">
                            <p class="date">{{articlesForamDate($result->created_at)}}</p>
                        </div>
                    </div>
                    @empty
                    <p class = "no_result">Ваш запрос не содержит результата, попробуйте снова :)</p>
                @endforelse
            </div>
        
        </div>
