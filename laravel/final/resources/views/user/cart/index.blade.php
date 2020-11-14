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

        <h3>Total Pay : ${{Cart::subtotal()}}</h3>

        <a href="{{route('cart.reset')}}" class='btn btn-danger'>Reset Cart</a>
        <form action="{{route('payment')}}" method="POST">
                  {{ csrf_field() }}
                  <script
                  src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                  data-key="pk_test_vfgfZwHWaFjjcB4YJ36c7isy00CsoHSMt0"
                  data-amount="{{ Cart::subtotal() * 100 }}"
                  data-name="CheckOut From WatchShop"
                  data-description="Buy Watch"
                  data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                  data-locale="auto">
                  </script>
        </form>

    </div>
@endsection