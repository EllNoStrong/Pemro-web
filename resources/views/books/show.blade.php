<!DOCTYPE html>
<html>
<head>
    <title>Show Book</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<h2>Detail Book</h2>

<div class="table-container">
    <p><b>Title:</b> {{ $book->title }}</p>
    <p><b>Author:</b> {{ $book->author }}</p>
    <p><b>Year:</b> {{ $book->year }}</p>

    <a class="btn" href="{{ route('books.index') }}">Back</a>
</div>

</body>
</html>
