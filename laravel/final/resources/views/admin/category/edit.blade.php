@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Edit Category</div>

        <div class="panel-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form action="{{route('category.update',['id' => $cat->id])}}" method='POST'>
                {{csrf_field()}}
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="cname" value='{{$cat->name}}' class="form-control" placeholder='Enter Product Name' required>
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <input type="text" name="desc" value='{{$cat->description}}' class="form-control" placeholder='Enter Product Description' required>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-block">
                </div>





            </form>
        </div>
    </div>
@endsection
