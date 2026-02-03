<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index page</title>
</head>
<body>
    <table border="1">
        <tr>
        <th>Name</th>
        <th>Course</th>
        <th>Marks</th>
        <th>Actions</th>
        </tr>
        @foreach($students as $student)
        <tr>
        <td>{{ $student->name }}</td>
        <td>{{ $student->course }}</td>
        <td>{{ $student->marks }}</td>
        <td>
        <a href="/edit/{{ $student->id }}">Edit</a>
        <form action="/delete/{{ $student->id }}" method="POST" >
            @csrf
            @method('DELETE')
            <button onclick="return confirm('Are you sure?')">Delete</button>
        </form>
        </td>
        </tr>
        @endforeach
    </table>
</body>
</html>