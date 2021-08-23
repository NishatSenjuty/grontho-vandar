<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

use App\Product;
class ProductController extends Controller
{
    public function indexx()
    {
      return view('index');
    }
    public function contact()
    {
      return view('contact');
    }
    public function view()
    {
      return view('viewAllDownloadFile');
    }

    public function about()
    {
      return view('about');
    }
    public function product_create1()
    {
      return view('create1');
    }
    public function products()
    {
      return view('pages.product.index');
    }
    public function product_store(Request $request)
    {
      // $product=new Product;
      // $product->title=$request->title;
      // $product->description=$request->description;
      // $product->price=$request->price;
      // $product->quantity=$request->quantity;
      // $product->slug= str_slug($request->title);
      // $product->author= 1;
      // $product->admin_id= 1;
      // $product->catagory_id= 1;

      $data=array();
        $data['title'] = $request->input('title');
        $data['description'] = $request->input('description');
        $data['price'] = $request->input('price');
        $data['quantity'] = $request->input('quantity');
          $data['slug'] = str_slug($request->title);
          $data['author'] = 1;
          $data['admin_id'] = 1;
          $data['catagory_id'] = 1;

          if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('image1');
            $image->move($destinationPath, $name);
            $data['image'] = $name;
            DB::table('products')->insert($data);
            return redirect ('product.create1');
        }
        else {
            dd("Image upload Failed!");
        }

      // $product->save();

      // return redirect()->route('product.create1');

    }
    public function seller()
    {
      return view('seller');
    }
    public function upload()
    {
      return view('uploadfile');
    }




    public function product()
    {
      $products= Product::orderBy('id', 'desc')->get();
      return view('pages.product.index')->with('products',$products);
    }
    public function search(Request  $request)
    {
      $search=$request->search;

      $products= Product:: orWhere('title','like','%'.$search.'%')
      ->orWhere('description','like','%'.$search.'%')
      ->orWhere('price','like','%'.$search.'%')
      ->orWhere('quantity','like','%'.$search.'%')
      ->orderBy('id', 'desc')
      ->paginate(8);


      return view('pages.product.search',compact('search','products'));
    }

    public function store(Request $request){
            dump($request->all());
            $this->validate($request,[
                'title'=>'required|max:255',
             //   'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'text'=>'required',
            ]);
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);
            dump($request);
            $data=$request->all();
            dump($data);
            $aticle=new Article;
            $aticle->fill($data);
        }




}
