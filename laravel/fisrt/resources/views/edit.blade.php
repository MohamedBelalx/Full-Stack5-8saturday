@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container mt-3">
                        <form action="{{route('update',['id' => $data->id])}}" method='POST'>
                            @csrf
                            <div class="form-group">
                                <label for="">Enter A Task</label>
                                <input type="text" value='{{$data->task}}' name="task" class="form-control" placeholder='Enter Task Value'>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Add" class="btn btn-dark">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
