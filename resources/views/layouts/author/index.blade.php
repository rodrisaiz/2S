<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>AUTHOR INDEX</h1>
    @forelse ( $authors as $author )
        <p>Name of the author: {{$author->name}}</p>
        <p>Title of the author: {{$author->title}}</p>
    @empty
        <p>No data!</p>
    @endforelse
</body>
</html>