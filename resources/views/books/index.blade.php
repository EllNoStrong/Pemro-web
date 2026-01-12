<!DOCTYPE html>
<html>
<head>
    <title>Books</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<h2>Books List</h2>

<div class="table-container">
    <a class="btn" href="{{ route('books.create') }}">➕ Add Book</a>
    <a class="btn" href="{{ route('dashboard') }}">⬅ Back</a>

    <table>
        <tr>
            <th>ID</th><th>Title</th><th>Author</th><th>Year</th><th>Action</th>
        </tr>
        @foreach ($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->year }}</td>
            <td>
                <a class="btn" href="{{ route('books.show', $book) }}">Show</a>
                <a class="btn" href="{{ route('books.edit', $book) }}">Edit</a>
                <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button class="btn" onclick="return confirm('Hapus?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

</body>
</html>
