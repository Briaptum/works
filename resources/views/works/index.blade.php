<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title>Document</title>
</head>
<body class="min-h-screen bg-gray-100">
    <a href="works/create">Add Stories</a>
    @foreach ($works as $work)
    <div>
        <tr>
            <td><a href="works/{{ $work->id }}">{{ $work->title }} <a href="works/delete/{{ $work->id }}"><i class="fas fa-trash-alt"></i></a></td>
            </a></br></td>
        </tr>
    </div>
    @endforeach
</body>
</html>