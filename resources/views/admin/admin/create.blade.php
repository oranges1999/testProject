@extends('admin.app')

@section('content')

<form action="{{route('admin.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" class="form-control" id="name"  name="name" >
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input type="text" class="form-control" id="email"  name="email" >
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Password</label>
      <input type="password" class="form-control" id="password"  name="password" >
    </div>
    <div class="form-group">
      <label for="avatar">Avatar</label>
      <input type="file" class="form-control" id="avatar"  name="avatar" >
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  @endsection