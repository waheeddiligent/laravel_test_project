<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LARAVEL X11</title>
</head>
<body>
second page

<a href=./ >HOME</a>

@foreach ($blogs->chunk(10) as $posts)
    @foreach ($posts as $key => $post)
        <li>
            <h2>{{$post->title}}</h2>
            <p>{{$post->description}}</p>
        </li>
    @endforeach
    
    <h1>======================================================================================================================</h1>

@endforeach
</body>
</html>