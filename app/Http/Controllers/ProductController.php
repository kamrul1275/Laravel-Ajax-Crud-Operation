<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{


    public function Index( $var = null)
    {
        $Products = Product::latest()->paginate(4);
       return view('home',compact('Products'));
    }
    //end method



    public function AddProduct(Request $request)
    {

        $request->validate([

            'product_name'=>'required',
            'product_price'=>'required',
        ],

    [
        'product_name'.'required'=> 'Product name is required',
        'product_price'.'required'=> 'Product price is required',
    ]


    );


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



public function DeleteProduct(Request $request)
{

Product::find($request->product_id)->delete();


    return response()->json([

        'status'=>'success',

        ]);
}




}
