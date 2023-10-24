@extends('admin.app')

@section('content')

<form action="/admin/tags" method="POST">
  @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">name</label>
      <input type="text" class="form-control" id="name"  name="name" >
    </div>
    <div class="form-group">
        <label for="status">status</label>
        <select name="status" id="status" class="form-control">
            <option value="1">Active</option>
            <option value="0">Disable</option>
        </select>
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  @endsection