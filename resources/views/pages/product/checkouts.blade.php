@extends('layouts.master')

@section('content')
  <div class='container margin-top-20'>
    <div class="card card-body">

      <h2> Confirm Items</h2>
      <hr>
<?php $N = 0; ?>
  @foreach(App\Models\Cart::totalCarts() as $cart)
<?php
$price = $cart->price;
$quantity = $cart->product_quantity;
$total = ($price * $quantity );
$T = $total;
$N = $N + $T;

?>
@endforeach

  <div class="row">
          <div class="col-md-7">
            @foreach(App\Models\Cart::totalCarts() as $cart)
    <p> {{ $cart->title }} ( Quantity :{{ $cart->product_quantity }} x Price: {{ $cart->price}} )
            </p>
@endforeach
          </div>
          <div class="col-md-5">

            <p>Total Price: {{ $N }} </p>


          </div>
        </div>


  <p>
    <a href="{{ route('carts') }}">Change Carts</a>
  </p>
</div>
  <div class="card card-body mt-2">
    <h2>Shipping Address</h2>

    <form method="get" action="{{ route('checkouts.store')}}"

  @csrf
  <div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">Recevirer Name</label>
<div class="col-md-6">
  <input id="name" type="text" class="form-control" name="name" value=""required autofocus>
</div>
</div>

<div class="form-group row">
  <label for="Number" class="col-md-4 col-form-label text-md-right">Phone Number</label>
<div class="col-md-6">
<input id="number" type="number" class="form-control" name="phone_no" value=""required autofocus>
</div>
</div>

<div class="form-group row">
  <label for="address" class="col-md-4 col-form-label text-md-right">Address</label>
<div class="col-md-6">
<input id="address" type="text" class="form-control" name="shipping_address" value=""required autofocus>
</div>
</div>



<div class="form-group row">
  <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
<div class="col-md-6">
<input id="email" type="email" class="form-control" name="email" value=""required autofocus>
</div>
</div>

<div class="form-group row mb-0">

<div class="col-md-6 offset-md-4">
  <button type="submit" class="btn btn-primary">Order Now</button>
  <!--<a href="{{ route('last')}}" class="btn btn-primary">Order Now</a> -->

</div>
</div>
</form>
  </div>

@endsection
