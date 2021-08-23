@extends('layouts.master')



@section('content')

<h2> Cart Item </h2>

<table class="table table-bordered table stripe">
  <thead>
    <tr>
      <th>No.</th>

      

      <th>Product Title</th>
      <th>Product Quantity</th>

      <th>
        Delete
     </th>
   </tr>
  </thead>
  <tbody>

    @foreach(App\Models\Cart::totalCarts() as $cart)

    <tr>
      <td>
        {{ $loop->index + 1  }}
      </td>

      <td>
        {{  $cart->title  }}
      </td>
      <td>
        <form class="form-inline" action="" method="post">
      @csrf
      <input type="number" name="product_quantity" class="form-control" value="{{ $cart->product_quantity }}"/>
      <button type="submit" class="btn btn-success"> Update </button>
    </form>
      </td>
      <td>
        <form class="form-inline" action="{{ route('carts.delete', $cart->id) }}"  method="post">
      @csrf
      <input type="hidden" name="cart_id" />
      <button type="submit" class="btn btn-danger"> Delete </button>
    </form>

      </td>

    </tr>
    @endforeach

  </tbody>
</table>

<div class="float-right">
  <a href="{{ route('product')}} " class="btn btn-info btn-lg"  > Continue Shopping</a>
  <a href="{{ route('checkouts')}} " class="btn btn-warning btn-lg" > Checkout.</a>
</div>


@endsection
