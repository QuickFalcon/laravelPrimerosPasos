@extends('dashboard.layout')

@section('content')

    <table>
        <tr>
            <th>Title</th>
            <th>Category</th>
            <th>Posted</th>
            <th>Actions</th>
        </tr>
        @foreach ($posts as $post)
            <tr>
                <td> {{$post->title}}</td>
                <td>Category</td>
                <td>{{$post->posted}}</td>
                <td>Actions</td>
            </tr>
        @endforeach
    </table>
    
@endsection