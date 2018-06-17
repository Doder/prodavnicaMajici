<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Tondo</title>
    <link rel="icon" href="/img/icon.png">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script>
        
        function obrisiIzKorpe(id){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/korpa/'+id+'/delete',
                type: 'POST',
                success: function(response) {
                    location.reload();
                }
            });
        }
    </script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
</body>
</html>