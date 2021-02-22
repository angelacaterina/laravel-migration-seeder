<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel Studenti</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <h1>Add a new student</h1>
        <!-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif -->

        <form action="{{route('students.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name" id="name" value="{{ old('name')}}">
            </div>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="lastname">Surname</label>
                <input class="form-control" type="text" name="lastname" id="lastname" value="{{ old('lastname')}}">
            </div>
            @error('lastname')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </body>
</html>