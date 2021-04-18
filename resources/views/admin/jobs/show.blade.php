@extends('layouts.app')

@section('content')

    <div class="card">
            @foreach($products->product_image as $images)
            <img class="card-img-top" src="{{asset('/images/product/'.$images->image_name)}}" width="650" />
        @endforeach
            <div class="card-body">
            <h4 class="card-title">Details of {{$products->name}}</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Product Type: {{$products->type->product_type}}</li>
                    <li class="list-group-item">Product category: {{$products->categories->cat_name}}</li>
                    <li class="list-group-item">Product Price: {{$products->price}}</li>
                </ul>
            <p class="card-text">Description : {{$products->description}}</p>
        </div>
    </div>


@endsection


