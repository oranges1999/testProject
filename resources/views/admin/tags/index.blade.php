@extends('admin.app')

@section('content')
<a href="/admin/tags/create"><button class="btn btn-primary">Create a tag</button></a>
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
        @foreach ($tags as $key => $tag)
            <tr>
            <td>{{++$key}}</td>
            <td>{{$tag->name}}</td>
            <td>{{$tag->status}}</td>
            <td>{{$tag->createBy}}</td>
            <td>{{$tag->created_at}}</td>
            <td>{{$tag->updated_at}}</td>
            <td>
                <div class="d-flex">
                  <form action="/admin/tags/{{$tag->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                  <a href="/admin/tags/{{$tag->id}}/edit"><button class="btn btn-warning">Changes</button></a>
                </div>
              </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection