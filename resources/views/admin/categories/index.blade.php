@extends('admin.app')

@section('content')
  <a href="/admin/categories/create"><button class="btn btn-primary">Create a category</button></a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Index</th>
        <th scope="col">Name</th>
        <th scope="col">Image</th>
        <th scope="col">Status</th>
        <th scope="col">Created At</th>
        <th scope="col">Updated At</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($categories as $key => $category)
            <tr>
              <td>{{++$key}}</td>
              <td>{{$category->name}}</td>
              <td><img src="{{$category->imageUrl}}" alt=""></td>
              <td>{{$category->status}}</td>
              <td>{{$category->created_at}}</td>
              <td>{{$category->updated_at}}</td>
              <td>
                <div class="d-flex">
                  <form action="/admin/categories/{{$category->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                  <a href="/admin/categories/{{$category->id}}/edit"><button class="btn btn-warning">Changes</button></a>
                </div>
              </td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection