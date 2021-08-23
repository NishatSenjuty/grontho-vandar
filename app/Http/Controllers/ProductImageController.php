<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ProductImageController extends Controller
{
    //

    public function adProduct()
    {
      // code...
      return view('insert_product');
    }
    public function saveProduct(Request $request) {
      // code...
      $data=array();
        $data['title'] = $request->input('title');
        $data['description'] = $request->input('description');
        $data['price'] = $request->input('price');
        $data['quantity'] = $request->input('quantity');
        if ($request->hasFile('image')) {
	        $image = $request->file('image');
	        $name = time().'.'.$image->getClientOriginalExtension();
	        $destinationPath = public_path('image1');
	        $image->move($destinationPath, $name);
	        $data['image'] = $name;
	        DB::table('insert_product')->insert($data);
	        return redirect ('adproduct');
	    }
	    else {
	        dd("Image upload Failed!");
	    }
    }
}
