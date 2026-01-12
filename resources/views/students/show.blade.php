<!DOCTYPE html>
<html>
<head>
    <title>Show Student</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<h2>Student Detail</h2>

<div class="table-container">
    <p><b>Name:</b> {{ $student->name }}</p>
    <p><b>Class:</b> {{ $student->class }}</p>
    <p><b>Age:</b> {{ $student->age }}</p>

    <a class="btn" href="{{ route('students.index') }}">Back</a>
</div>

</body>
</html>
