<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class DownloadController extends Controller
{
    public function downfunc(){
      $downloads=DB::table('files')->get();
      return view('download.viewAllDownloadFile',compact('downloads'));
    }
}
