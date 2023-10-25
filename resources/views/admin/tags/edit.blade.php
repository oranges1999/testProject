@extends('admin.app')

@section('content')

<form action="/admin/tags/{{$tags->id}}" method="POST">
  @method('PUT')
  @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">name</label>
      <input type="text" class="form-control" id="name"  name="name" value="{{$tags->name}}">
    </div>
    <div class="form-group">
        <label for="status">status</label>
        <select name="status" id="status" class="form-control">
            <option value="1"{{$tags->status == 1? 'selected':''}}>Active</option>
            <option value="0"{{$tags->status == 0? 'selected':''}}>Disable</option>
        </select>
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  @endsection