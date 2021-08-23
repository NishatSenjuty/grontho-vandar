@extends('layouts.master')
@section('content')


  <link rel="stylesheet" href="{{asset('css/style.css')}}">
<!--Start sidebar-->

<div class="container margin-top-20">
  <div class="row">
    <div class="col-md-4">
      <div class="list-group">

   <a class="nav-link" href="{{ route('contact')}}">Contact Us <span class="sr-only"  <a class="nav-link" href="{{ route('seller')}}">Top Seller <span class="sr-only">(current)</span></a>
   <a class="nav-link" href="{{ route('seller')}}">Top Seller <span class="sr-only">(current)</span></a>
   <a class="nav-link" href="#">Gift Finder <span class="sr-only">(current)</span></a>
   <a class="nav-link" href="{{ route('about')}}">About Us <span class="sr-only">(current)</span></a>
   <a class="nav-link" href="#">Feedback<span class="sr-only">(current)</span></a>

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
             <div class="col-md-3">
               <div class="card ">
              <img class="card-img-top book " src="{{asset('image/'.'book1.jpg')}}" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">Engineering</h4>
                <p class="card-text">TK. 500</p>
                <a href="#" class="btn btn-primary">Add To Cart</a>
              </div>
              </div>
              </div>


              <div class="col-md-3">
                <div class="card ">
               <img class="card-img-top book " src="{{asset('image/'.'book1.jpg')}}" alt="Card image">
               <div class="card-body">
                 <h4 class="card-title">Engineering</h4>
                 <p class="card-text">TK. 500</p>
                 <a href="#" class="btn btn-primary">Add To Cart</a>
               </div>
               </div>
               </div>
             </div>


<!--Start Another Div-->

  <div class="row margin-top-20">
    <div class="col-md-3">
      <div class="card ">
        <img class="card-img-top book " src="{{asset('image/'.'book1.jpg')}}" alt="Card image">
          <div class="card-body">
             <h4 class="card-title">Engineering</h4>
               <p class="card-text">TK. 500</p>
                  <a href="#" class="btn btn-primary">Add To Cart</a>
          </div>
        </div>
      </div>

            s<div class="col-md-3">
              <div class="card ">
             <img class="card-img-top book " src="{{asset('image/'.'book1.jpg')}}" alt="Card image">
             <div class="card-body">
               <h4 class="card-title">Engineering</h4>
               <p class="card-text">TK. 500</p>
               <a href="#" class="btn btn-primary">Add To Cart</a>
             </div>
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
