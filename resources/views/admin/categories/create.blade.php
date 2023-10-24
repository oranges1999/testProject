@extends('admin.app')

@section( 'content')

<form action="/admin/category/create" method="POST" enctype="multipart/form-data">
  @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">name</label>
      <input type="text" class="form-control" id="name"  name="name" >
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">img</label>
      <input type="file" class="form-control" id="img"  name="imageUrl" >
    </div>
      <div class="form-group">
        <label for="status">status</label>
        <select name="status" id="status" class="form-control">
          <option value="">khong hien thi</option>
          <option value="">hien thi</option>

        </select>
      </div>
        <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  @endsection