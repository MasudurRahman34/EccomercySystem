<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class pagescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.index');
    }
  public function product()
    {
        $products=Product::orderBy('id', 'desc')->get();
        return view('pages.product.index')->with('products',$products);
    }
//
   public function search(Request $request)
        {
            $search= $request->search;
            $products=Product::orWhere('title', 'like', '%'.$search.'%')
            ->orWhere('description', 'like', '%'.$search.'%')
            ->orderBy('id', 'desc');
            return view('pages.product.search', compact('search', 'products'));
        }

     public function show($slug)
    {
       $product= Product::where('slug', $slug)->first();
       if(!is_null($product)) {
            return view('pages.product.show', compact('product'));

       }else{
        return redirect()->route('products');
       }
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
