<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Laravel</h1>

    @foreach ($students as $data)
    <p>{{ $data->id . '. ' . $data->name}}</p>
    @endforeach
</body>
</html>
