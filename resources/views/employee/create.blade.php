<!DOCTYPE html>
<html>
<head>
    <title>Add Employee</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<h2>Add New Employee</h2>

<div class="table-container">
    <form method="POST" action="{{ route('employees.store') }}">
        @csrf

        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Position:</label><br>
        <input type="text" name="position" required><br><br>

        <label>Salary:</label><br>
        <input type="number" name="salary" required><br><br>

        <button class="btn" type="submit">Save</button>
        <a class="btn" href="{{ route('employees.index') }}">Back</a>
    </form>
</div>

</body>
</html>
