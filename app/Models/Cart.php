<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;



use Auth;
use DB;

class Cart extends Model
{
  public $fillable = [
    'user_id',
    'ip_address',
    'product_id',
    'product_quantity',
    'order_id'

];

public function user()
{

  return $this->belongsTo(User::class);

}
public function Order()
{

  return $this->belongsTo(Order::class);

}
public function product()
{

  return $this->belongsTo(product::class);

}

public static function totalItems()
{
    if (Auth::check()) {
      $carts = Cart::orWhere('user_id',Auth::id())
      ->orWhere('ip_address',request()->ip())
      ->get();

    } else{
        $carts = Cart::orWhere('ip_address',request()->ip())->get();
          }
          $total_item = 0;

          foreach ($carts as $cart) {
            $total_item += $cart->product_quantity;

         }
          return $total_item;

}

public static function totalCarts()
{



    if (Auth::check()) {
      $carts = Cart::orWhere('user_id',Auth::id())
      ->orWhere('ip_address',request()->ip())
      ->get();

    } else{
      $carts =  DB::table('carts')->select('carts.*','products.*')->join('products','products.id','carts.product_id')->Where('carts.ip_address',request()->ip())
      ->get();


          }

          return $carts;

}



}
