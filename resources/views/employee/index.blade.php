<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Students List</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            padding: 20px;
        }
        h2 { text-align: center; }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: white;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        table th {
            background: #333;
            color: white;
        }

        .btn {
            padding: 8px 12px;
            background: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-danger {
            background: red;
        }

        .top-controls {
            display: flex;
            justify-content: start;
            gap: 10px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<h2>Students List</h2>

<div class="top-controls">
    <a class="btn" href="{{ route('students.create') }}">+ Add Student</a>
</div>

@if ($message = Session::get('success'))
    <div style="background:#d4ffd4;padding:10px;border:1px solid green;margin-bottom:20px;">
        {{ $message }}
    </div>
@endif

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>NIM</th>
        <th>Action</th>
    </tr>

    @forelse ($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->nim }}</td>
            <td>
                <a class="btn" href="{{ route('students.edit', $student->id) }}">Edit</a>

                <form action="{{ route('students.destroy', $student->id) }}"
                      method="POST"
                      style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"
                            onclick="return confirm('Hapus student ini?')">Delete</button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5">No students found.</td>
        </tr>
    @endforelse

</table>

</body>
</html>
