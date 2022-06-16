<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\product;
use App\Models\cart;
use App\Models\order;
use Illuminate\Support\Facades\DB;
use Session;

class FrontendController extends Controller
{
    //
    public function home(){
       
        return view('frontend.index');
    } 
    public function product_detail($id){
        $product = product::find($id);
        return view ('frontend.detail_product')->with('product', $product);
    }
    public function add_to_cart(Request $request)
    {
        if (Auth::check()) {

            $cart = new cart;
            $cart->user_id = Auth::id();
            $cart->product_id = $request->product_id;
            $cart->save();
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }
    static function cartItem()
    {
        $userId = Auth::id();
        return cart::where('user_id', $userId)->count();
    }
    public function cartList()
    {
        $userId =Auth::id() ;
        $products = DB::table('carts')
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->where('carts.user_id', $userId)
            ->select('products.*', 'carts.id as cart_id')
            ->get();

        return view('frontend.cartlist', ['products' => $products]);
    }
    function orderPage()
    {
        $userId = Auth::id() ;
        $total = $products = DB::table('carts')
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->where('carts.user_id', $userId)
            ->sum('products.product_price');

        return view('frontend.orderPage', ['total' => $total]);
    }

    function orderPlace(Request $req)
    {
        $userId = Auth::id();
        $allCart = cart::where('user_id', $userId)->get();
        foreach ($allCart as $cart) {
            $order = new order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = "pending";
            $order->payment_status = "pending";
            $order->address = $req->address;
            $order->save();
            cart::where('user_id', $userId)->delete();
        }
        $req->input();
        return redirect('/');
    }

    function removecart($id)
    {
        cart::destroy($id);
        return redirect('/cartlist');
    }
  


}
