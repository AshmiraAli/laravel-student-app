<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit page</title>
</head>
<body>
    <form method="POST" action="/update/{{ $student->id }}">
        @csrf
        @method('PUT')
        Name: <input type="text" name="student_name" value="{{ $student->name }}"><br>
        Course: <input type="text" name="student_course" value="{{ $student->course }}"><br>
        Marks: <input type="number" name="student_marks" value="{{ $student->marks }}"><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>