@extends('layouts.admin.master')

@section('content')

    <h1 class="display-3">Division</h1>    
    <a href="{{ route('admin.division.create')}}" class="btn btn-lg btn-primary mb-3">Add divisions</a>
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
        @foreach($divisions as $division)
        <tr>
            <td>{{$division->id}}</td>
            <td>{{$division->name}}</td>
            <td>{{$division->slug}}</td>
            <td>
                <a href="{{ route('admin.division.edit',$division->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('admin.division.destroy',$division->id)}}" method="post">
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