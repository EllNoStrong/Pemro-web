<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<h2>Students List</h2>

<div class="table-container">
    <a class="btn" href="{{ route('students.create') }}">➕ Add Student</a>
    <a class="btn" href="{{ route('dashboard') }}">⬅ Back</a>

    <table>
        <tr>
            <th>ID</th><th>Name</th><th>Class</th><th>Age</th><th>Action</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->class }}</td>
            <td>{{ $student->age }}</td>
            <td>
                <a class="btn" href="{{ route('students.show', $student) }}">Show</a>
                <a class="btn" href="{{ route('students.edit', $student) }}">Edit</a>
                <form action="{{ route('students.destroy', $student) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button class="btn" onclick="return confirm('Yakin hapus?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

</body>
</html>
