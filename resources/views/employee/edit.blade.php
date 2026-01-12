<!DOCTYPE html>
<html>
<head>
    <title>Edit Employee</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<h2>Edit Employee</h2>

<div class="table-container">
    <form method="POST" action="{{ route('employees.update', $employee) }}">
        @csrf @method('PUT')

        <label>Name:</label><br>
        <input type="text" name="name" value="{{ $employee->name }}" required><br><br>

        <label>Position:</label><br>
        <input type="text" name="position" value="{{ $employee->position }}" required><br><br>

        <label>Salary:</label><br>
        <input type="number" name="salary" value="{{ $employee->salary }}" required><br><br>

        <button class="btn">Update</button>
        <a class="btn" href="{{ route('employees.index') }}">Back</a>
    </form>
</div>

</body>
</html>
