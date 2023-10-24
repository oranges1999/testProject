@extends('admin.app')

@section('content')
<a href="/admin/tags/create"><button>Create a tag</button></a>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Index</th>
        <th scope="col">Name</th>
        <th scope="col">Status</th>
        <th scope="col">Created By</th>
        <th scope="col">Created At</th>
        <th scope="col">Updated At</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($tags as $tag)
            <tr>
            <td>{{$tag->id}}</td>
            <td>{{$tag->name}}</td>
            <td>{{$tag->status}}</td>
            <td>{{$tag->createBy}}</td>
            <td>{{$tag->created_at}}</td>
            <td>{{$tag->updated_at}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection