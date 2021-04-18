@extends('layouts.admin.master')

@section('content')
    <h1 class="display-3">level</h1>    
    <a href="{{ route('admin.level.create')}}" class="btn btn-primary">Add level</a>
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
        @foreach($levels as $level)
        <tr>
            <td>{{$level->id}}</td>
            <td>{{$level->name}}</td>
            <td>{{$level->slug}}</td>
            <td>
                <a href="{{ route('admin.level.edit',$level->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('admin.level.destroy',$level->id)}}" method="post">
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