<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Movies</h1>
    @foreach ($movies as $item)
        <div class="card">
            <h2>{{$item->title}}</h2>
            <div>Original title: {{$item->original_title}}</div>
            <div>Nationality: {{$item->nationality}}</div>
            <div>Date: {{$item->date}}</div>
            <div>Vote: {{$item->vote}}</div>
        </div>
    @endforeach
</body>
</html>