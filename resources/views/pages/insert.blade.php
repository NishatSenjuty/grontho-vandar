@extends('layouts.master')
@section('content')
<form action="{{url('newssave')}}" method="POST" enctype="multipart/form-data">
              <input type="hidden" class="form-control" id="pwd" name="_token" value='{{csrf_token()}}'>
              <div class="form-group">
                <label for="pwd">Date:</label>
                <input type="date" class="form-control" id="pwd" name="date">
              </div>
              <div class="form-group">
                <label for="pwd">Page No::</label>
                <select class="form-control" id="sel1" name="pageno">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                  <option>9</option>
                  <option>10</option>
                </select>
              </div>
              <div class="form-group">
                <label for="pwd">Category::</label>
                <select class="form-control" id="sel1" name="category">
                  <option>Sports</option>
                  <option>Business</option>
                  <option>Political</option>
                  <option>Bangladesh</option>
                  <option>International</option>
                  <option>Entertinement</option>
                  <option>Advertisement</option>
                  <option>Agricultur</option>
                  <option>City</option>
                  <option>Campus</option>
                </select>
              </div>
              <div class="form-group">
                <label for="pwd">News Image::</label>
                <div class="row">
                  <div class="col-md-4">
                    <input type="file" class="form-control" id="pwd" name="image">
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-default">Post</button>
            </form>

            @endsection
