@extends('layouts.master')
@section('content')



<!--Insert Item-->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-header">
        Add Book
      </div>
      <div class="card-body">
    <form  action="{{ route('store')}}"   method="post" enctype="multipart/form-data">
      <input type="hidden" class="form-control" name="_token" value="">
      {{ csrf_field()}}
      <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter book name">

      </div>
      <label for="exampleInputPassword1">Description</label>
      <div class="form-group">
      <textarea name="description" rows="8" cols="80" class="form-controller"></textarea>
      </div>


     <input type="file" name="image" />

      <div class="form-group">
        <label for="exampleInputEmail1">Price</label>
        <input type="number" class="form-control" name="price" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Quantity</label>
        <input type="number" class="form-control" name="quantity" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
      </div>








      <button type="submit" class="btn btn-primary">Add Book</button>
      <a class="nav-link" href="{{ route('product')}}">Show <span class="sr-only">(current)</span></a>

    </form>

 </div>
</div>
  </div>
</div>


@endsection






<!--End sidebar-->
