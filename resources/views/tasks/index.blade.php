<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($tasks as $task)
        <h3>Task Title : {{$task->title}}</h3>
        <h3>Task Body : {{$task->body}}</h3>
    @endforeach
</body>
</html>