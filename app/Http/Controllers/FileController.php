<?php


namespace App\Http\Controllers;
use App\file;

use Illuminate\Http\Request;

class FileController extends Controller
{
  public function showUploadForm(){

   return view('upload');


  //  return $request->all();
  }

  public function storeFile(request $request){
         if($request->hasFile('file')){


           $filename= $request->file->getClientOriginalName();
           $filesize= $request->file->getClientSize();


            $request->file->storeAs('public/uploads',$filename);



            $file =new file;
            $file->name=$filename;
            $file->size=$filesize;

//  dd($file);  //
 $file->save();
        return 'Successfully Done';
         }

    return $request->all();
  }



}
