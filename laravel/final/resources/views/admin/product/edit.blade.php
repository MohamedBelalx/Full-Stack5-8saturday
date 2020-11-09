@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Create Product</div>

        <div class="panel-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form action="{{route('product.update',['id'=>$product->id])}}" method='POST' enctype='multipart/form-data'>
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" value='{{$product->name}}' name="pname" class="form-control" placeholder='Enter Product Name' required>
                </div>
                <div class="form-group">
                    <label for="">Price</label>
                    <input type="number" value='{{$product->price}}' name="price" class="form-control" placeholder='Enter Product Price' required>
                </div>

                <div class="form-group">
                {{csrf_field()}}
                    <label for="">Description</label>
                    <input type="text" value='{{$product->description}}' name="desc" class="form-control" placeholder='Enter Product Description' required>
                </div>
                <div class="form-group">
                    <label for="">Category</label>
                    <select name="cat" class="form-control">
                        @foreach($cats as $cat)
                            @if($cat->id == $product->category_id)   
                            <option value="{{$cat->id}}" selected>{{$cat->name}}</option>
                            @else
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                            @endif
                        @endforeach
                        
                    </select>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-block">
                </div>





            </form>
        </div>
    </div>
@endsection
