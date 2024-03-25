<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>One To One Relationship</title>
</head>
<body>
    <h1>ONE TO ONE RELATIONSHIP</h1>

    <div>
        <h2>List of fathers</h2>

        @foreach ($fathers as $father)
            <li>
                {{ $father->name }}
            </li> 
        @endforeach
    </div>

    <div>
        <h2>List of children</h2>

        @foreach ($children as $child)
            <li>
                {{ $child->name }}
            </li>   
        @endforeach
    </div>

    <p>Father_1 ({{ $father_1_name->name }}) has {{ $father_1_child->child_name }}</p>
    <p>Father_2 ({{ $father_2_name->name }}) has {{ $father_2_child->child_name }}</p>
</body>
</html>