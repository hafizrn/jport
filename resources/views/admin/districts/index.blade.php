@extends('layouts.admin.master')

@section('content')

    <h1 class="display-3">District</h1>    
    <a href="{{ route('admin.district.create')}}" class="btn btn-primary">Add District</a>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Division ID</td>
          <td>Name</td>
          <td>Slug</td>

          <td colspan = 3>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($districts as $district)
        <tr>
            <td>{{$district->id}}</td>
            <td>{{$district->division->name}}</td>
            <td>{{$district->name}}</td>
            <td>{{$district->slug}}</td>
            <td>
                <a href="{{ route('admin.district.edit',$district->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('admin.district.destroy',$district->id)}}" method="post">
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