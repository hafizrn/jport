@extends('layouts.admin.master')

@section('content')
    <h1 class="display-3">Job Category</h1>    
    <a href="{{ route('admin.category.create')}}" class="btn btn-primary">Add Category</a>
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
        @foreach($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td>{{$category->slug}}</td>
            <td>
                <a href="{{ route('admin.category.edit',$category->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('admin.category.destroy',$category->id)}}" method="post">
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