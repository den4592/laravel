<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create Task</h1>
    <form action="/tasks" method="POST">
        @csrf
        @method('POST')
        <label for="title">Title</label>
        <input type="text" name="title" id="title" style="border:3px solid black"><br>

        <label for="body">Body</label>
        <textarea name="body" id="body" cols="30" rows="10" style="border:3px solid black"></textarea><br>
        <button>Submit</button>
    </form>
</body>
</html>