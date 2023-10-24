@extends('admin.app')

@section('content')
  <a href="/admin/categories/create"><button>Create a category</button></a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Index</th>
        <th scope="col">Name</th>
        <th scope="col">Image</th>
        <th scope="col">Status</th>
        <th scope="col">Created At</th>
        <th scope="col">Updated At</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
            <tr>
              <td>{{$category->id}}</td>
              <td>{{$category->name}}</td>
              <td>{{$category->imageUrl}}</td>
              <td>{{$category->status}}</td>
              <td>{{$category->created_at}}</td>
              <td>{{$category->updated_at}}</td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection