<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>BLog</title>
</head>
<body>
    <div class="container">
        <br>
        <h1>Publicaciones</h1>
        @foreach($posts as $post)
            <div>
                <div>
                    <hr>
                        <a href="post/{{$post->id}}">
                            {{$post->title}}                                   
                        </a>
                    <hr>
                </div>
            </div>
        @endforeach
    
    </div>
</body>
</html> 