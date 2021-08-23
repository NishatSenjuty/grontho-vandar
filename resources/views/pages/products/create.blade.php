@extends('layouts.master')
@section('content')



<!--Start sidebar-->

<div class="container margin-top-20">
  <div class="row">
    <div class="col-md-4">
      <div class="list-group">




        <a href="#" class="list-group-item">Top Seller</a>
        <a href="#" class="list-group-item">Gift Finder</a>
        <a href="#" class="list-group-item">Blog</a>
        <a href="#" class="list-group-item">Contact Us</a>
        <a href="#" class="list-group-item">About Us</a>
 </div>
  </div>
    <div class="col-md-8">
      <div class="widget">
        <h3> Featured Books</h3>
         <div class="row">
             <div class="col-md-3">
               <div class="card ">
              <img class="card-img-top book " src="{{asset('image/'.'book.jpg')}}" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">Business Studies</h4>
                <p class="card-text">TK. 1000</p>
                <a href="#" class="btn btn-primary">Add To Cart</a>
              </div>
              </div>
             </div>
             <div class="col-md-3">
               <div class="card ">
              <img class="card-img-top book " src="{{asset('image/'.'book.jpg')}}" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">Business Studies</h4>
                <p class="card-text">TK. 1000</p>
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






<!--End sidebar-->
