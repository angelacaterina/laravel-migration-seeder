<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel Studenti</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <h1>Student info</h1>
        <h3> Name: {{ $student->name }}</h3>
        <h3>Surname: {{ $student->lastname }}</h3>

        <a href="{{ route('students.index') }}" class="btn btn-primary">Return</a>
    </body>
</html>