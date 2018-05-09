<!DOCTYPE html> 
<html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Antonov Nikita">
        <meta name="description" content="На моем персональном блоге, можно ознакомиться с моими проектами, также почитать мои статьи и получить обратную связь если у вас возникли какие-либо вопросы">
        <meta name="keywords" content="Веб разработка, Филатов Никита, разработка сайтов, блог Филатова Никиты, блог">
        <meta name="robots" content="index, follow">
        <link rel="shortcut icon" href="{{url('favicon.ico')}}" type="image/x-icon">
        <title>Филатов Никита - {{$title}}</title>
        @section('link')
            <link href="{{url('css/style.css')}}" rel="stylesheet">
            <link href="{{url('css/app.css')}}" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,900&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Roboto:100,100i,300,300i,400,400i,500,500i,700,900&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=latin-ext" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Marck+Script&amp;subset=cyrillic" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Pacifico&amp;subset=latin-ext" rel="stylesheet">
            <script src="{{url('js/jquery-3.2.0.min.js')}}"></script>
            <meta name="viewport" content="width=device-width, initial-scale=1" >
        @show
    </head>
    <body>
        <!--
        <div class="debug">
            <div>
                <div>
                    <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
                </div>
            </div>
        </div>
        -->    
       @yield('header')   
        @yield('content', 'I`m content!')
         @yield('footer', 'I`m content!')
        <script src="{{url('js/fnmenu.jquery.js')}}"></script>
        <script src="{{url('js/scripts.js')}}"></script>
        <script src="{{ asset('/js/ckeditor/ckeditor.js') }}"
                type="text/javascript" charset="utf-8" ></script>
        <script>
            var editor = CKEDITOR.replace(
            'content',
             {  filebrowserImageBrowseUrl: '{{url('/laravel-filemanager?type=Images')}}',
                filebrowserImageUploadUrl: '{{url('/laravel-filemanager/upload?type=Images&_token=')}}',
                filebrowserBrowseUrl: '{{url('/laravel-filemanager?type=Files')}}',
                filebrowserUploadUrl: "{{url('/laravel-filemanager/upload?type=Files&_token=')}}" 
            } 
        );
        </script>
    </body>
</html>
