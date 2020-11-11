@extends('layouts.index')



@section('content')

<div class="container pt-3">
    <div class="row pt-3">
        <div class="col-lg-4 col-12">
            <img src="{{asset($product->image)}}" alt="">
        </div>
        <div class="col-lg-8 col-12">
            <h1>{{$product->name}}</h1>
            <p>{{$product->description}}</p>
            <form action="{{route('cart.add')}}" method='POST'>
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$product->id}}">
                <input type="submit" value="Add To cart" class='btn btn-light' >
            </form>
            <b>price is : ${{$product->price}}</b> 
        </div>

    </div>
</div>

@endsection