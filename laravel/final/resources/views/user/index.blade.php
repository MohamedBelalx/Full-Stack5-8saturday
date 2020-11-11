@extends('layouts.index')

@section('content')

<section class="latest">
        <div class="container">
            <h1 class='text-center'>Latest Product</h1>
            <div class="row justify-content-center">
            @foreach($latest as $l)
                <div class="col-lg-4 col-md-4 col-sm-6 col-8">
                    <div class="card">
                        <img src="{{asset($l->image)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$l->name}}</h5>
                            <p class="card-text">{{$l->description}}</p>
                            <a href="{{route('show',['id' => $l->id])}}" class="btn btn-primary">View Product</a>
                            <form action="{{route('cart.add')}}" method='POST'>
                                {{csrf_field()}}
                                <input type="hidden" name="id" value="{{$l->id}}">
                                <input type="submit" value="Add To cart" class='btn btn-light' >
                            </form>
                            
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
            
            <div class='text-center mt-3 pt-3'>
                <a href="{{route('show.all')}}" class='btn btn-light'>View All Product</a>

            </div>
        </div>
    </section>

    <!-- about section  -->

    <section class="about">
        <div class="container d-flex h-100 justify-content-center flex-column">
            <h1>Fast Devliver,PayOnline,Cancle AnyTime</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum nesciunt quo provident ipsum nam voluptatibus vitae amet, impedit eum tempora sint velit nobis vel quisquam minima commodi sit. Libero, iste.</p>
        </div>
    </section>

    <!-- about section  -->
    <!-- feedback section  -->
    <section class="feedback">
        <div class="container">
        <h1 class='text-center'>Our Customer FeedBack</h1>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                            <img src="{{asset('img/index/sample.png')}}" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                            <img src="{{asset('img/index/sample.png')}}" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                            <img src="{{asset('img/index/sample.png')}}" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                            <img src="{{asset('img/index/sample.png')}}" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- feedback section  -->


    <!-- sample section  -->
    <section class="sample">
        <div class="container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">TopProdcut</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Heights Price</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Lowest Price</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row">
                        @foreach($samples as $s)
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="card">
                                    <img src="{{asset($s->image)}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$s->name}}</h5>
                                        <p class="card-text">{{$s->description}}</p>
                                        <a href="{{route('show',['id' => $s->id])}}" class="btn btn-primary">View Product</a>
                                        <a href="#" class="btn btn-light">Add Cart</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row">
                        @foreach($highest as $h)
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="card">
                                    <img src="{{asset($h->image)}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$h->name}}</h5>
                                        <p class="card-text">{{$h->description}}</p>
                                        <a href="{{route('show',['id' => $h->id])}}" class="btn btn-primary">View Product</a>
                                        <a href="#" class="btn btn-light">Add Cart</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="row">
                        @foreach($lowest as $lw)
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="card">
                                    <img src="{{asset($lw->image)}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$lw->name}}</h5>
                                        <p class="card-text">{{$lw->description}}</p>
                                        <a href="#" class="btn btn-primary">View Product</a>
                                        <a href="{{route('show',['id' => $lw->id])}}" class="btn btn-light">Add Cart</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- sample section  -->



@endsection