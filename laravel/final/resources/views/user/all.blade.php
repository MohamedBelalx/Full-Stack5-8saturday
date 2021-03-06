@extends('layouts.index')



@section('content')
    <div class="container">
        <div class="row justify-content-center">
        @foreach($products as $product)
            <div class="col-lg-4 col-md-4 col-sm-6 col-8">
                <div class="card">
                    <img src="{{asset($product->image)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <p class="card-text">{{$product->description}}</p>
                        <a href="{{route('show',['id' => $product->id])}}" class="btn btn-primary">View Product</a>
                        <a href="#" class="btn btn-light">Add Cart</a>
                    </div>
                </div>
            </div>
        @endforeach

        <div>
            {{$products->links()}}
        </div>
    </div>
@endsection