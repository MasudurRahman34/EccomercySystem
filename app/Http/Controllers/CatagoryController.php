<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\catagory;
use Image;
use File;

class CatagoryController extends Controller
{
    public function category_manage()
    {
        $catagory=catagory::orderBy('id', 'desc')->get();
        return view('admin.pages.category.manage', compact('catagory'));// compact or->with('products',$products);
    } 
      public function category_create()
    {
       $category=catagory::orderBy('id', 'desc')->where('parent_id', NULL)->get();
        return view('admin.pages.category.create', compact('category'));
    } 
 
	public function category_store(Request $request)

    {

    	$catagory=new catagory;
    	$catagory->name= $request->name;
    	$catagory->description= $request->description;
    	$catagory->parent_id= $request->parent_id;
      

       if($request->hasFile('image')){
               $image= $request->file('image');
               $img=time().'.'.$image->getClientOriginalExtension();
                $location= public_path('images/category/'.$img);
                Image::make($image)->save($location);

                $catagory->image=$img;
    }
     $catagory->save();
     //Session()->flash('success', 'A new catagory has added succesfully');
     return redirect()->route('admin.category.create');
}

      public function category_edit($id)
    {
        $parent=catagory::orderBy('id', 'desc')->where('parent_id', NULL)->get();
       $category=catagory::find($id);

        return view('admin.pages.category.edit', compact('category','parent'));
    }

    public function category_update(Request $request, $id)
    {
        $catagory=catagory::find($id);
        $catagory->name= $request->name;
        $catagory->description= $request->description;
        $catagory->parent_id= $request->parent_id;
      

    if($request->hasFile('image') > 0){

        if(FIle::exists('images/category/'.$catagory->image)){
            File::delete('images/category/'.$catagory->image);
        }
               $image= $request->file('image');
               $img=time().'.'.$image->getClientOriginalExtension();
                $location= public_path('images/category/'.$img);
                Image::make($image)->save($location);

                $catagory->image=$img;
    }
     $catagory->save();
     Session()->flash('success', 'catagory has been upadate succesfully');
     return redirect()->route('admin.category.manage');


       }

   }