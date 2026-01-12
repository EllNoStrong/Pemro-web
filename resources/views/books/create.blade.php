<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<h2>Add New Book</h2>

<div class="table-container">
    <form method="POST" action="{{ route('books.store') }}">
        @csrf
        <label>Title:</label><br>
        <input type="text" name="title" required><br><br>

        <label>Author:</label><br>
        <input type="text" name="author" required><br><br>

        <label>Year:</label><br>
        <input type="number" name="year" required><br><br>

        <button class="btn" type="submit">Save</button>
        <a class="btn" href="{{ route('books.index') }}">Back</a>
    </form>
</div>

</body>
</html>
