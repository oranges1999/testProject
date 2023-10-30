@extends('admin.app')

@section('content')
<table class="table">
    <thead>
    <tr>
        <th scope="col">Index</th>
        <th scope="col">Category</th>
        <th scope="col">Title</th>
        <th scope="col">Image</th>
        <th scope="col">Content</th>
        <th scope="col">Created By</th>
        <th scope="col">Confirm By</th>
        <th scope="col">View</th>
        <th scope="col">Created At</th>
        <th scope="col">Updated At</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->categoryId}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->imageUrl}}</td>
            <td>{{$post->content}}</td>
            <td>{{$post->createdBy}}</td>
            <td>{{$post->confirmedBy}}</td>
            <td>{{$post->view}}</td>
            <td>{{$post->created_at}}</td>
            <td>{{$post->updated_at}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection