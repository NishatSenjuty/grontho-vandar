@extends('layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</head>
  </head>
  <body>
    <div class="wrapper">
      <section class="panel panel-primary">
        <div class="panel-heading">
          Download Files
          </div>
          <div class="panel-body">
            <table class="table table-boardered">
              <thead>
                <th>Title</th>
                <th>Upload date</th>
                <th>Action</th>
              </thead>



              <tbody>
                @foreach($downloads as $down)

                <tr>
                  <td>{{$down->name}}</td>
                    <td>{{$down->created_at}}</td>
                      <td>
                        <a href="storage/uploads/{{$down->name}}" download="{{$down->name}}">
                        <button type="button" class="btn btn-primary">
                          <i class="glyphicon glyphicon-download">

                          Download</i>
                        </button>
                        </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </section>
          </div>


          </fieldset>

  </body>
</html>
@endsection
