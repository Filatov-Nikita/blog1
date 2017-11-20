<div class="portfolio">
    <p>Статьи</p>
</div>
<div class="state">
    <div class="container">
        @foreach($articles as $article)
            <div class="item">
                <div class="line"></div>

                <a class="foto" href="#">
                    <div class="dark"></div>
                    <img src="img/Blog-intro.jpg" alt=""/>
                </a>
                <div class="name_post"><a href="#">{{$article->title}}</a></div>
                <div class="description">
                   {{$article->description}}
                </div>
                <div class="underline">
                    <p class="date">{{articlesForamDate($article->created_at)}}</p>
                </div>

            </div>
        @endforeach
    </div>
</div>
                  
