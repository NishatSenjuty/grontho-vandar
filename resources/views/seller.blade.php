@extends('layouts.master')

@section('content')


  <link rel="stylesheet" href="{{asset('css/style.css')}}">
<div class="col-md-8">
  <div class="widget top ">
    <h3>Top Selling Book Lists</h3>
     <div class="row top">
         <div class="col-md-3">
           <div class="card ">
          <img class="card-img-top book " src="{{asset('image/'.'book.jpg')}}" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Business Studies</h4>
            <p class="card-text">TK. 1000 (15%)</p>
            <a href="#" class="btn btn-primary">Add To Cart</a>
          </div>
          </div>
         </div>
         <div class="col-md-3">
           <div class="card ">
          <img class="card-img-top book " src="{{asset('image/'.'book1.jpg')}}" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Engineering</h4>
            <p class="card-text">TK. 500 (10%)</p>
            <a href="#" class="btn btn-primary">Add To Cart</a>
          </div>
          </div>
         </div>
         <div class="col-md-3">
           <div class="card ">
          <img class="card-img-top book " src="{{asset('image/'.'book3.jpg')}}" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Security</h4>
            <p class="card-text">TK. 450 (20%)</p>
            <a href="#" class="btn btn-primary">Add To Cart</a>
          </div>
          </div>
         </div>


       </div>
  </div>

</div>

</div>
</div>

















@endsection
