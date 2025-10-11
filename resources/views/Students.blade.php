<!DOCTYPE html>
<html>
<head>
    <title>Students List</title>
</head>
<body>
    <h1>Students List</h1>

    @if($students->count() > 0)
        <ul>
            @foreach($students as $student)
                <li>
                    ID: {{ $student->id }}, 
                    Name: {{ $student->name }}, 
                    Email: {{ $student->email }}, 
<<<<<<< HEAD
                    Age: {{ $student->age }},
                    Admission Date: {{ $student->admission_date }}

=======
                    Age: {{ $student->age }}
                    Admission Date: {{ $student->admission_date }}
                    
>>>>>>> 224f9dc144ebac9b69aa16da99ef0847ed7ac5af
                </li>
            @endforeach
        </ul>
    @else
        <p>No students found.</p>
    @endif
</body>
</html>
