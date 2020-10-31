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

                    <div class="container">
                        <h3>Tasks For Today</h3>
                        <ul class="list-group">
                            @foreach($data as $d)

                            @if($d->done == 0)
                                <li class="list-group-item">
                                    {{ $d->task }}
                                    <a href="{{route('done',['id' => $d->id])}}">Done</a>
                                    <a href="{{route('edit',['id' => $d->id])}}">edit</a>
                                    <a href="{{route('delete',['id' => $d->id])}}">Delete</a>
                                </li>
                            @else
                                <li class="list-group-item" style='text-decoration:line-through'>
                                    {{ $d->task }}
                                    <a href="{{route('delete',['id' => $d->id])}}">Delete</a>
                                </li>
                            @endif

                            @endforeach
                        </ul>
                    
                    </div>

                    <div class="container mt-3">
                        <form action="{{route('insert')}}" method='POST'>
                            @csrf
                            <div class="form-group">
                                <label for="">Enter A Task</label>
                                <input type="text" name="task" class="form-control" placeholder='Enter Task Value'>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Add" class="btn btn-dark">
                            </div>
                        </form>
                    </div>

                    <div class="container mt-3">
                        <h3>Trashed Tasks</h3>
                        <ul class="list-group">
                            @foreach($trashed as $t)

                            @if($t->done == 0)
                                <li class="list-group-item">
                                    {{ $t->task }}
                                    <a href="{{route('restore',['id' => $t->id])}}">Restore</a>
                                    <a href="{{route('destroy',['id' => $t->id])}}">Destroy</a>
                                </li>
                            @endif

                            @endforeach
                        </ul>

                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
