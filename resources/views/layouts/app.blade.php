<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="images/kituki-icon.png" type="image/x-icon" />
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

        <title>{{config('app.name'),'TripToKitsuki'}}</title>
    </head>
    <body>
        @include('inc.navbar')
        @yield('content')
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    </body>
    <script>
        // laravel-ckeditors
        CKEDITOR.replace('test');
    </script>
    <script type="text/javascript">
        // Animation scroll by clicking span allow for page/index
        $(function() {
            $('a[href*=#]').on('click', function(e) {
                e.preventDefault();
                $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
            });
        });
    </script>

</html>
