<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/dist/bootstrap-5.2.3/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Students</title>
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="loader">
                    <p class="text">
                        Students
                    </p>
                </div>

                    <a href="{{ route('student_create') }}" class="btn btn-success">Add Student</a>
                </div>
                <p>WELCOME | Simple Crud!!</p>

                <!-- Student List -->
                <div class="list-group">
                    @foreach($students as $key => $student)
                        <a class="list-group-item" href="{{ route('student_show', ['id' => $student['id']]) }}">{{ $student['first_name'] }} {{ $student['last_name'] }}</a>
                        </a>
                    @endforeach
                </div> 
                <div>
                <td> <a href="edit_record/{{$student->id}}" class="btn btn-primary">Edit</a>  </td> 
                <td> <a href="delete_record/{{$student->id}}" class="btn btn-danger">Delete</a> </td>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
