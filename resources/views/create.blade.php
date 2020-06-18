<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if($errors->any())
        <ul>
        @foreach($errors->all() as $err)
            <li>{{$err}}</li>
        @endforeach
        </ul>
    @endif
    <form action="{{route('project.store')}}" method="post">
    @csrf
        <h1>Tambahkan Project</h1>
        <p>
            <label>Title</label>
            <input type="text" name="title" require>
        </p>
        <p>
            <label>Description</label>
            <textarea name="description" id="description" cols="30" rows="10" require></textarea>
        </p>
        <p>
            <button type="submit">Add</button>
        </p>
    </form>
</body>
</html>