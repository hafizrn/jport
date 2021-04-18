@extends('layouts.app')

@section('content')

    <div class="card">
        <img class="card-img-top" src="{{asset('/images/package/'.$package->package_image)}}" width="650" />
        <div class="card-body">
            <h4 class="card-title">Details of {{$package->package_name}}</h4>
            
            <b>Items</b>
            <?php
                $items = json_decode($package->items);
                foreach ($items as $key => $value) {
                    $data = explode(':',$value);
                    $product_id = $data[0];
                    $quantity = $data[1];

                    foreach($products as $product){
                        if($product_id == $product->id){
                            echo "<li>".$product->name." (".$quantity.")</li>";
                        }
                    }
                }
            ?>
            <h4>Price : {{$package->price}}</h4>
            <p class="card-text">Description : {{$package->description}}</p>
            <a href="{{ route('package.edit',$package->id)}}" class="btn btn-primary">Edit Details</a>
        </div>
    </div>


@endsection


