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
                    Age: {{ $student->age }},
                    Admission Date: {{ $student->admission_date }}

                </li>
            @endforeach
        </ul>
    @else
        <p>No students found.</p>
    @endif
</body>
</html>
