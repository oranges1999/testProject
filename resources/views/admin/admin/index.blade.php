@extends('admin.app')

@section('content')
<a href="{{ route('admin.create')}}"><button class="btn btn-primary">Create an admin</button></a>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Index</th>
        <th scope="col">Avatar</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Created At</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($admins as $key => $value)
            <tr>
            <td>{{++$key}}</td>
            <td><img height="100px" src="{{asset(str_replace("public","storage",$value->avatar))}}" alt=""></td>
            <td>{{$value->name}}</td>
            <td>{{$value->email}}</td>
            <td>{{$value->created_at}}</td>
            <td>
                <div class="d-flex">
                  <form action="{{ route('admin.destroy',$value->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                  <a href="{{ route('admin.edit', $value->id)}}"><button class="btn btn-warning">Changes</button></a>
                </div>
              </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$admins->links()}}

@endsection