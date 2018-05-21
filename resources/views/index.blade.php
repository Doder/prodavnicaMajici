<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prodavnica</title>
</head>
<body>
    <ul>
    @foreach ($majice as $majica)
        <li><a href="majice/{{$majica->id}}">{{ $majica->naziv }}</a></li>
    @endforeach
    </ul>
</body>
</html>