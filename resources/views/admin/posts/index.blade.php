@extends('layouts.admin')

@section('content')

    <h1>Posts Index</h1>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>PHOTO ID</th>
            <th>USER Name</th>
            <th>CATEGORY ID</th>
            <th>TITLE</th>
            <th>BODY</th>
            <th>CREATED</th>
            <th>UPDATED</th>
        </tr>
        </thead>

        <tbody>

        @if($posts)

            @foreach($posts as $post)

                <tr>
                    <td>{{$post->id}}</td>
                    <td><img height="50" src="{{$post->photo ? $post->photo->file : "http://placehold.it/400x400"}}" alt=""></td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->category_id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>{{$post->created_at->diffForhumans()}}</td>
                    <td>{{$post->updated_at->diffForhumans()}}</td>
                </tr>

            @endforeach

        @endif

        </tbody>
    </table>

@endsection