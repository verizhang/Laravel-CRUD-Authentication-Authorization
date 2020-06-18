@extends('layouts.app')

@section('content')
    <a href="{{route('project.create')}}">+ Tambahkan Project</a>
    <table width="100%" border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
        @foreach($project as $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->title}}</td>
                <td>{{$value->description}}</td>
                <td><a href="{{route('project.show',$value->id)}}">Detail</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
