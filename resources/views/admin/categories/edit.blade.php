@extends('admin.app')

@section('content')
{{-- Có thể dùng {{(name đã đặt ở file web), {{$category->id}}}} Thay cho đường link phía dưới --}}
<form action="/admin/categories/{{$category->id}}" method="POST" enctype="multipart/form-data"> 
    @method('PUT')
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">name</label>
      <input type="text" class="form-control" id="name"  name="name" value="{{$category->name}}">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">img</label>
      <img src="{{ $category->imageUrl}}" alt="">
    </div>
      <div class="form-group">
        <label for="status">status</label>
        <select name="status" id="status" class="form-control">
          <option value="1"{{$category->status == 1? 'selected':''}}>Hiển thị</option>
          <option value="0"{{$category->status == 0? 'selected':''}}>Không hiển thị</option>
        </select>
      </div>
        <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  @endsection