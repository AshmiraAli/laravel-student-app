<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add form</title>
</head>
<body>
    <h1>Add Student Information</h1>
    <!-- success -->
    @if(session('success'))
    <div style="color: green; font-weight: bold;">
    {{ session('success') }}
    </div>
    @endif

    <!-- error -->
    @if($errors->any())
    <div style="color: red;">
    <ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
    </div>
    @endif
    
    <form method="POST" action="/store">
    @csrf
    Name: <input type="text" name="student_name"><br><br>
    Course: <input type="text" name="student_course"><br><br>
    Marks: <input type="number" name="student_marks"><br><br>
    <button type="submit">Save</button><br><br>
    <!-- <a href="/">return to student info....</a>   insted of use a Route mtd -->
    <a href="{{ route('students.index') }}">return to student info....</a> 
      <!-- need to set route for this -->
</form>
</body>
</html>