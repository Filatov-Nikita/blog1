@section('widgets')
	@include('widgets.tags')
@endsection
<div class="portfolio">
    <p>Статьи</p>
</div>
<div class="state">
    <div class="container" data-next-page="{{ $articles->nextPageUrl() }}">
        @include('blocks.article')
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

            if(page !== null && page !== '') {

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