<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png">
    <title>Model Teacher</title>
</head>
<body>
    <h1>Laravel is The Best</h1>

    @foreach ($teacher as $data)
        <p>{{ $data->id . '. ' . $data->name.'. '.$data->birth_date.'. '.$data->phone }}</p>
    @endforeach
</body>
</html>
