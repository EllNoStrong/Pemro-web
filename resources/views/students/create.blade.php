<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Student</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            padding: 30px;
        }
        .container {
            width: 400px;
            margin: 0 auto;
            background: #fff;
            padding: 25px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        h2 { text-align: center; margin-bottom: 20px; }
        label { font-weight: bold; margin-top: 10px; display: block; }
        input {
            width: 100%; padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 15px;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        a { display: block; text-align: center; margin-top: 15px; color: #333; }
    </style>
</head>
<body>

<div class="container">
    <h2>Add Student</h2>

    @if ($errors->any())
        <div style="background:#ffdddd;padding:10px;border:1px solid red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color:red;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <label>Name:</label>
        <input type="text" name="name" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>NIM:</label>
        <input type="text" name="nim" required>

        <button type="submit">Save Student</button>
    </form>

    <a href="{{ route('students.index') }}">← Back</a>
</div>

</body>
</html>
