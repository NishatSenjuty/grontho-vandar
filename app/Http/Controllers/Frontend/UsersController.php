<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

use Auth;


class UsersController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

    public function dashboard()
    {
      $user = Auth::user();
      return view('dashboard',compact('user'));

    }
}
