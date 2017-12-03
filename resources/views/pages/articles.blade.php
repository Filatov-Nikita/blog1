<div class="portfolio">
    <p>Статьи</p>
</div>
<div class="state">
    <div class="container" data-next-page="{{ $articles->nextPageUrl() }}">
        @foreach($articles as $article)
            <div class="item">
                <div class="line"></div>

                <a class="foto" href="{{route('site.main.articlesById', ['id' => $article->id])}}">
                    <div class="dark"></div>
                    <img src="{{upload_path($article->image)}}" alt=""/>
                </a>
                <div class="name_post"><a href="{{route('site.main.articlesById', ['id' => $article->id])}}">{{$article->title}}</a></div>
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

<script>

    $(document).ready(function() {



        /*    $('body').on('click', '.pagination a', function(e){

                e.preventDefault();
                var url = $(this).attr('href');

                $.get(url, function(data){
                    $('.posts').html(data);
                });

            });*/

        $(window).scroll(fetchPosts);

        function fetchPosts() {

            var page = $('.state .container').data('next-page');

            if(page !== null) {

                clearTimeout( $.data( this, "scrollCheck" ) );

                $.data( this, "scrollCheck", setTimeout(function() {
                    var scroll_position_for_posts_load = $(window).height() + $(window).scrollTop() + 100;

                    if(scroll_position_for_posts_load >= $(document).height()) {
                        $.get(page, function(data){
                            $('.state .container').append(data.articles);
                            $('.state .container').data('next-page', data.next_page);
                        });
                    }
                }, 350))

            }
        }


    })

</script>