<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<h2>Dashboard CRUD</h2>

<div class="top-menu">
    <div class="card"><a href="{{ route('books.index') }}">📚 Books</a></div>
    <div class="card"><a href="{{ route('students.index') }}">🎓 Students</a></div>
    <div class="card"><a href="{{ route('employees.index') }}">👔 Employees</a></div>
</div>

</body>
</html>
