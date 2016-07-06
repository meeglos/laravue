<!DOCTYPE html>
<html>
<head>
    <title>LaraVue</title>
</head>
<body>
    <h2>Notes</h2>
    <hr>
    <ul>
        @foreach ($notes as $note)
        <li>
            {{ $note->note }}
        </li>
        @endforeach
    </ul>
</body>
</html>