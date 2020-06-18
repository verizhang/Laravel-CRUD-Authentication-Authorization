<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{$project->title}}</h1>
    <h3>{{$project->description}}</h3>

    <form action="{{route('project.edit',$project->id)}}" method="get">
        <button type="submit">Edit</button>
    </form>

    <form action="{{route('project.destroy',$project->id)}}" method="post">
    @csrf
    @method('delete')
        <button type="submit">Delete</button>
    </form>

</body>
</html>