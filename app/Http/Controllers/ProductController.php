<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    Public function product()
    {
        $product=product::paginate(5);
            return view('backend.pages.product',compact('product'));
    }
     
    public function add_product()
    {

        return view('backend.pages.add_product');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        product::create([
            // clm name=>$request->inpt field
            'name'=>$request->productname,
            'category'=>$request->category,
            'brand'=>$request->brand,
            'price'=>$request->price,  
            'quantity'=>$request->quantity,    
        ]);
        return to_route('product');
        
          
    }
}
