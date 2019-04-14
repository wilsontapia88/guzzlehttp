<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Posts</title>
</head>
<body>
    <div class="container"><br>
        <h1>Post </h1><br>
            <h3>{{$post->title}}</h3>       
            <div>
                <hr>
                {{$post->body}}
                <hr>
                <a href="/">Retornar</a>
            </div>
    </div>
</body>
</html> 