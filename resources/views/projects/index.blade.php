<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Projects List</h1>
    @foreach ($projects as $project)
        <h3>Title: {{$project->title}}</h3>
        <h3>Description: {{$project->description}}</h3>
        
    @endforeach
</body>
</html>