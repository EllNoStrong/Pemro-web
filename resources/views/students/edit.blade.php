<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<h2>Edit Student</h2>

<div class="table-container">
    <form method="POST" action="{{ route('students.update', $student) }}">
        @csrf @method('PUT')

        <label>Name:</label><br>
        <input type="text" name="name" value="{{ $student->name }}" required><br><br>

        <label>Class:</label><br>
        <input type="text" name="class" value="{{ $student->class }}" required><br><br>

        <label>Age:</label><br>
        <input type="number" name="age" value="{{ $student->age }}" required><br><br>

        <button class="btn">Update</button>
        <a class="btn" href="{{ route('students.index') }}">Back</a>
    </form>
</div>

</body>
</html>
