<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel Studenti</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <h1>Students</h1>
        <a href="{{route('students.create')}}" class="btn btn-dark text-white">Add a new student</a>
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>lastname</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->lastname}}</td>
                    <td>
                        <a href="{{route('students.show', ['student'=>$value->id])}}" class="btn btn-primary">View</a>
                        <a href="{{route('students.edit', ['student'=>$value->id])}}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('home') }}" class="btn btn-primary">Return</a>

        <script src="{{asset('js/app.js')}}" charset="utf-8"></script>
    </body>
</html>