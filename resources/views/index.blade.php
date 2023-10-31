<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>LANDING</h1>
    <h2>Notes: </h2>
    @foreach ($notes as $note )
    <h3>Note</h3>
        <p>{{$note->title}}</p>
        <p>{{$note->date}}</p>
        <p>{{$note->content_A}}</p>
        <p>{{$note->content_B}}</p>
    @endforeach
    <br>
    <h2>Categories: </h2>
    @foreach ($categories as $category )
    <h3>Category</h3>
        <p>{{$category->name}}</p>
        <p>{{$category->description}}</p>
        
    @endforeach
    <br>
    <h2>Authors: </h2>
    @foreach ($authors as $author )
    <h3>Author</h3>
        <p>{{$author->name}}</p>
        <p>{{$author->title}}</p>
        <p>{{$author->description}}</p>
        
    @endforeach


</body>
</html>