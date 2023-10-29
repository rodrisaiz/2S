<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CATEGORY INDEX</h1>
    @forelse ( $categories as $category )
        <p>Name of the category: {{$category->name}}</p>
    @empty
        <p>No data!</p>
    @endforelse
</body>
</html>