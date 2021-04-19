@extends('layouts.admin.master')

@section('content')
    <h1 class="display-3">Upazila</h1>    
    <a href="{{ route('admin.upazila.create')}}" class="btn btn-primary">Add Upazila</a>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Division ID</td>
          <td>District ID</td>
          <td>Name</td>
          <td>Slug</td>

          <td colspan = 3>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($upazilas as $upazila)
        <tr>
            <td>{{$upazila->id}}</td>
            <td>{{$upazila->division->name}}</td>
            <td>{{$upazila->district->name}}</td>
            <td>{{$upazila->name}}</td>
            <td>{{$upazila->slug}}</td>
            <td>
                <a href="{{ route('admin.upazila.edit',$upazila->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('admin.upazila.destroy',$upazila->id)}}" method="post">
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