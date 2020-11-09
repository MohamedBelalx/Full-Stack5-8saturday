@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Trashed Product</div>

        <div class="panel-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">price</th>
                        <th scope="col">Category</th>
                        <th scope="col">Restore</th>
                        <th scope="col">Destroy</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                    <th scope="row">{{$product->id}}</th>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->cname}}</td>
                        <td><a href="{{route('restore',['id'=>$product->id])}}">Restore</a></td>
                        <td><a href="{{route('destroy',['id'=>$product->id])}}">Destroy</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
