@extends('layouts.index')

@section('content')

    <div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope='col'></th>
                <th scope="col">Price</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
        @foreach(Cart::content() as $data)
            <tr>
                <th scope="row">{{$data->id}}</th>
                <td>{{$data->name}}</td>
                <td>{{$data->price}}</td>
                <td>
                    <img style='width:100px' src="{{$data->options->image}}" alt="">
                </td>
                <td><a href="{{route('cart.delete',['rowId' => $data->rowId])}}">delete</a></td>
            </tr>
        @endforeach
            
        </tbody>
        </table>

        <a href="{{route('cart.reset')}}" class='btn btn-danger'>Reset Cart</a>
    </div>
@endsection