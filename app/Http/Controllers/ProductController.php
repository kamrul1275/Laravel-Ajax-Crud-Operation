<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{


    public function Index( $var = null)
    {
        $Products = Product::latest()->paginate(5);
       return view('home',compact('Products'));
    }
    //end method



    public function AddProduct(Request $request)
    {


       $ProductData = new Product();
       $ProductData->product_name=$request->product_name;

       $ProductData->product_price=$request->product_price;

       $ProductData->save();

       return response()->json([

       'status'=>'success',

       ]);

    }
    //end method





    public function EditProduct( $id = null)
    {

        $productEdit= Product::find($id);
       return view('edit',compact('productEdit'));
    }
    //end method





    public function UpdateProduct(Request $request)
    {


       $ProductData =  Product::where('id',$request->update_id)->update([

        'product_name'=> $request->update_name,

        'product_price'=> $request->update_name,




       ]);



       return response()->json([

       'status'=>'success',

       ]);

    }
    //end method








}
