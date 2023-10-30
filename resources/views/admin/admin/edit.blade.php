@extends('admin.app')

@section('content')

<form action="{{ route('admin.update',$admin->id)}}" method="POST">
  @method('PUT')
  @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input type="text" class="form-control" id="name"  name="name" value="{{$admin->name}}">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input type="text" class="form-control" id="name"  name="email" value="{{$admin->email}}">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Password</label>
      <input type="text" class="form-control" id="name"  name="password">
    </div>
    <div class="form-group">
      <label for="avatar">Avatar</label>
      <input type="file" class="form-control" id="name"  name="avatar" >
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  @endsection