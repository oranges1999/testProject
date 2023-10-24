@extends('admin.app')

@section('content')
<table class="table">
    <thead>
    <tr>
        <th scope="col">Index</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Created At</th>
        <th scope="col">Updated At</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection