
<div class="portfolio">
    <p>Написать мне</p>
</div>
<div class="feedback">
    <div class="wrapper">
        <div class="form">
            <form action="" method="POST">
                {{csrf_field()}}
                <label for="name">Ваше имя</label><input type="text" name = "name">
                <label for="email">Ваше email</label><input type="text" name = "email">
                <textarea name="text" id="" placeholder="Текст сообщения"></textarea>
                <input type="submit" class = "btn" name = "btn_feedback" value="Отправить">
                <div class="btn show"><img class = "rolling" src="{{asset('img/Rolling.svg')}}" alt=""></div>
            </form>
        </div>
    </div>
</div>
<div class="message">
    Ваше сообщение успешно отправлено
</div>
<style>
.message {
    position: fixed;
    right: 0;
    top:15px;
    background: #1ac73fad;
    color: #fff;
    font:24px roboto;
    padding: 10px 20px;
    display: none;
}
.rolling {
    width: 5%;
}
.feedback .wrapper .form form .btn {
    text-align: center;
    padding: 5px;
}
    .show {
       box-sizing: border-box;
        display: none;
        background: #8a4141 !important;
    }
</style>
<script>
    $(function(){
        var that = this;
        $('.form .btn').on('click',  function(e){
            e.preventDefault();
            if(that.click) {
                return;
            }
            that.click = true;
            $(this).hide();
            $('.show').show();
            var form = $(this).parent('.form form');
            $.post('{{url('/ajax/feedback')}}',
                form.serialize(),
                function(data){
                if(data.res){
                    $('.form .btn').show();
                    $('.form .show').hide();
                    $('.message').fadeIn(800);
                    setTimeout(function () {
                        $('.message').fadeOut(800);
                    }, 4000);
                    that.click = false;
                }
            });
        });
    });
</script>