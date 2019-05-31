<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\productImage;
use App\product;
use Image;

class adminpagescontroller extends Controller
{
    public function index()
    {
        return view('admin.pages.index');
    }

    //
    public function product_create()
    {
        return view('admin.pages.product.create');
    } 
    //
    public function product_manage()
    {
        $products=Product::orderBy('id', 'desc')->get();
        return view('admin.pages.product.manage')->with('products',$products);
    }  
    public function product_edit($id)
    {
        $product=Product::find($id);
        return view('admin.pages.product.edit')->with('product',$product);
    } 
    //

    public function product_store(Request $request)
    {
           $product=new product;
                $product->title= $request->title;
                $product->name= $request->name;
                $product->description= $request->description;
                $product->quantity= $request->quantity;
                $product->price= $request->price;
                $product->slug= str_slug($product->title);
                $product->category_id=1;
                $product->brand_id= 1;
                $product->admin_id= 1;
                $product->Save();
                //multiple image insert
                 if(count($request->image)>0){
                foreach($request->image as $image){
                //$image= $request->file('image');
                $img=time().'.'.$image->getClientOriginalExtension();
                $location= public_path('images/product/'.$img);
                Image::make($image)->save($location);

                $productImage= new productImage;
                $productImage->product_id= $product->id;
                $productImage->image=$img;
                $productImage->Save();
                }
            } 
            return redirect()->route('admin.product.manage');
            //single image insert
            /*if ($request->hasFile('image')){
               $image= $request->file('image');
               $img=time().'.'.$image->getClientOriginalExtension();
                $location= public_path('images/product/'.$img);
                Image::make($image)->save($location);

                $productImage= new productImage;
                $productImage->product_id= $product->id;
                $productImage->image=$img;
                $productImage->Save();

    }*/  
    }
    ///

    public function product_update(Request $request, $id)
    {
	       $product=product::find($id);
                $product->name= $request->name;
            	$product->title= $request->title;
            	$product->description= $request->description;
            	$product->quantity= $request->quantity;
            	$product->price= $request->price;
                $product->Save();

           if(count($request->image)>0){
                foreach($request->image as $image){
                //$image= $request->file('image');
                $img=time().'.'.$image->getClientOriginalExtension();
                $location= public_path('images/product/'.$img);
                Image::make($image)->save($location);

                $productImage= new productImage;
                $productImage->product_id= $product->id;
                $productImage->image=$img;
                $productImage->Save();
                }
            }
            
               
            return redirect()->route('admin.product.manage');
  
    }

    public function productDestroy($id)
    {
        $product=product::find($id);
        $product->delete();
        return redirect()->route('admin.product.manage');
    }
}
