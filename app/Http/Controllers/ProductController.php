<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function home(){
        return view('pages.home');
    }
    public function Add(){
        return view('pages.Products.ProductAdd');
    }
    public function AddSubmit(Request $request){
        
        
        $this->validate(
            $request,
            [ 
                'p_name' =>'required|min:2|max:10|regex:/^[A-Za-z]+$/',
                'p_code' =>'required',
                'p_desc' =>'required',
                'p_category' =>'required',
                'p_price' =>'required',
                'p_quantity' =>'required',
                'p_stock_date' =>'required',
                'p_rating' =>'required',
                'p_purchased' =>'required'
            ],
            [
                
                
                'p_name.required' =>'Please put your name',
                'p_code.required' =>'Product code required',
                'p_desc.required' =>'Product description required',
                'p_category.required' =>'Product category required',
                'p_price.required' =>'Product price required',
                'p_quantity.required' =>'Quantity required',
                'p_stock_date.required' =>'Date required',
                'p_rating.required' =>'Rating required',
                'p_purchased.required' =>'Fill Purchased text'
                
            ]
        );
          
        $var = new Product();
        $var->p_name= $request->p_name;
        $var->p_code = $request->p_code;
        $var->p_desc = $request->p_desc;
        $var->p_category = $request->p_category;
        $var->p_price = $request->p_price;
        $var->p_quantity = $request->p_quantity;
        $var->p_stock_date = $request->p_stock_date;
        $var->p_rating = $request->p_rating;
        $var->p_purchased = $request->p_purchased;
        $var->save();
       // return "OK";  
         return redirect()->route('Product.list');
             
    }
    public function list(){
       
        $products = Product::all();
        return view('pages.Products.ProductList')->with('products',$products);
    }
 
    public function details(Request $request)
    {
        $id= $request->id;
        $products= Product::where('id',$id)->first();
        return view('pages.Products.ProductDetails')->with('products',$products);
    }

 
    public function edit(Request $request){
        
        $id = $request->id;
        $products = Product::where('id',$id)->first();
        
        return view('pages.Products.ProductEdit')->with('products', $products);

    }

    public function editSubmit(Request $request){
        $var = Product::where('id',$request->id)->first();
        $var->p_name= $request->p_name;
        $var->p_code = $request->p_code;
        $var->p_desc = $request->p_desc;
        $var->p_category = $request->p_category;
        $var->p_price = $request->p_price;
        $var->p_quantity = $request->p_quantity;
        $var->p_stock_date = $request->p_stock_date;
        $var->p_rating = $request->p_rating;
        $var->p_purchased = $request->p_purchased;
        $var->save();
        //return redirect()->route('Products.ProductList');
        return redirect()->route('Product.list');
    
    }
    public function delete(Request $request){
        $var = Product::where('id',$request->id)->first();
        $var->delete();
        //return redirect()->route('pages.Products.ProductList');
        return redirect()->route('Product.list');

    }

    
}
