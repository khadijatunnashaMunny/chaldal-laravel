<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\product;
use App\Models\category;

class CompanyController extends Controller
{
    //
    public function Companyhome(){
        return view('Company.index');
    } 
    public function categorySubmit(Request $req)
    {
        $category['name'] = $req->name;
        $category['description'] = $req->description;

        $insert = DB::table('categories')->insert($category);
        return Redirect()->back();
    }
    public function product(){
        $category = category::get();
        return view('Company.product')->with('categories', $category);
    } 
    public function productSubmit(Request $request)
    {
        $product = new product;
        $product['product_name'] = $request->product_name;
        $product['product_id'] = $request->product_id;
        $product['product_price'] = $request->product_price;
        $product['product_description'] = $request->product_description;
        $product['product_qauntity'] = $request->product_qauntity;
        $product['cat_id'] = $request->cat_id;

        if ($request->hasfile('product_image')) {
            $file = $request->file('product_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/images/', $filename);
            $product->product_image = $filename;
        }
        $product->save();
        return redirect()->back();
    }
    
}
