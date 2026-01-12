<!DOCTYPE html>
<html>
<head>
    <title>Show Employee</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<h2>Employee Detail</h2>

<div class="table-container">
    <p><b>Name:</b> {{ $employee->name }}</p>
    <p><b>Position:</b> {{ $employee->position }}</p>
    <p><b>Salary:</b> {{ $employee->salary }}</p>

    <a class="btn" href="{{ route('employees.index') }}">Back</a>
</div>

</body>
</html>
