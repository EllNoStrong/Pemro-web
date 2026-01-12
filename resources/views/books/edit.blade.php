<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<h2>Edit Book</h2>

<div class="table-container">
    <form method="POST" action="{{ route('books.update', $book) }}">
        @csrf @method('PUT')

        <label>Title:</label><br>
        <input type="text" name="title" value="{{ $book->title }}" required><br><br>

        <label>Author:</label><br>
        <input type="text" name="author" value="{{ $book->author }}" required><br><br>

        <label>Year:</label><br>
        <input type="number" name="year" value="{{ $book->year }}" required><br><br>

        <button class="btn">Update</button>
        <a class="btn" href="{{ route('books.index') }}">Back</a>
    </form>
</div>

</body>
</html>
