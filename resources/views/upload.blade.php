@extends('layouts.master')
@section('content')



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>document</title>


    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
      <div class="row">
          <form action="{{route('upload.file')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
            {{csrf_field()}}

           <input type="file" name="file">



               <input type="submit" name=" uploadfile" value="Upload file" class="btn btn-info">


          </form>


      </div>


    </div>

  </body>
</html>
@endsection
