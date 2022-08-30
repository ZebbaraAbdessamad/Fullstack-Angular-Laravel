<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
        return ProductResource::collection($products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Product::create($request->all());
        return response()->json(['message'=>'product added successfully'],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_product(Request $request,$id)
    {
        $product=Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->status = $request->status;
        $product->save();
        return ['message'=>'product updated successfully',new ProductResource($product)];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_status(Request $request, $id)
    {
        $product=Product::find($id);
        $product->status = $request->status;
        $product->save();
        return new ProductResource($product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::find($id);
        $product->delete();
        return ['message'=>'product deleted successfully',new ProductResource($product)] ;
    }

    public function search($request)
    {
       return $products= Product::where('name', 'like', '%' .$request. '%')->get();
    }

    public function available()
    {
        $products= Product::where('status','=',1)->get();
        return ProductResource::collection($products);
    }

    public function unavailable()
    {
        $products= Product::where('status','=',0)->get();
        return ProductResource::collection($products);
    }


    public function show_product($id)
    {
        $product=Product::find($id);
        if($product!=null){
           return response()->json($product,200);
        }else{
            return null;
        }
    }



}
