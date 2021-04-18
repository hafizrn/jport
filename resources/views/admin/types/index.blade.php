@extends('layouts.admin.master')

@section('content')
    <h1 class="display-3">type</h1>    
    <a href="{{ route('admin.type.create')}}" class="btn btn-primary">Add type</a>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Slug</td>

          <td colspan = 3>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($types as $type)
        <tr>
            <td>{{$type->id}}</td>
            <td>{{$type->name}}</td>
            <td>{{$type->slug}}</td>
            <td>
                <a href="{{ route('admin.type.edit',$type->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('admin.type.destroy',$type->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection