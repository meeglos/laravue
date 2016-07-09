<!DOCTYPE html>
<html>
<head>
    <title>LaraVue</title>
</head>
<body>
    <h2>Notes</h2>
    <hr>
    <ol>
        @foreach ($notes as $note)
        <li>
            {{ $note->note }}
        </li>
        @endforeach
    </ol>
</body>
</html>