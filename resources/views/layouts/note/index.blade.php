<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>NOTE INDEX</h1>
    @forelse ( $notes as $note )
        <p>Title: {{$note->title}}</p>
    @empty
        <p>No data!</p>
    @endforelse
</body>
</html>