<?php

namespace App\Http\Controllers;

use App\Http\Resources\Product\ProductCollection;
use App\Http\Resources\Product\ProductResource;
use App\Model\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return  Productcollection::collection(Product::paginate(5));
    }
    
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Product  $product
     * @return ProductResource
     */
    public function show(Product $product)
    {
        return new ProductResource($product);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Model\Product $product
     * @return void
     */
    public function update(Request $request, Product $product)
    {
        //
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Product $product
     * @return void
     */
    public function destroy(Product $product)
    {
        //
    }
}
