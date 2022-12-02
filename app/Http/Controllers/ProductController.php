<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
class ProductController extends Controller
{
    public function view(){
        $data['users'] = Product::all();
        $logo = count(Product::all());
        return view('backend.admin.product.view_category',compact('logo'),$data);
    }
    
    public function add(){
        
        $data['categorys'] = Category::all();
        $data['brands'] = Brand::all();
        return view('backend.admin.product.add_category',$data);
    }

    public function store(Request $request){
        DB::transaction(function() use($request){
            

            $data = new Product();
            $data->name = $request->product;
            $data->category_id = $request->category_id;
            $data->brand_id = $request->brand_id;
            $data->short_desc = $request->short_title;
            $data->long_desc = $request->long_title;
            $data->price = $request->price;
            $image = $request->file('image');
            if($image){
                $imageName = time().'.'.$image->getClientOriginalName();
                $image->move(public_path('upload/product_img'),$imageName);
                $data->image = $imageName;
            }  
            $data->save();
        });
       
       return redirect()->route('view_product')->with('success',"Product update successfully!");
    
        
    }

    public function edit($id){
        $data['editSlide'] = Product::find($id);
        $data['categorys'] = Category::all();
        $data['brands'] = Brand::all();
        return view('backend.admin.product.add_category',$data);
    }

    public function update(Request $request,$id){
        DB::transaction(function() use($request,$id){
            
            $data = Product::find($id);
            $data->name = $request->product;
            $data->category_id = $request->category_id;
            $data->brand_id = $request->brand_id;
            $data->short_desc = $request->short_title;
            $data->long_desc = $request->long_title;
            $data->price = $request->price;
            $image = $request->file('image');
            if($image){

                @unlink(public_path('upload/product_img/').$data->image);
                $imageName = time().'.'.$image->getClientOriginalName();
                $image->move(public_path('upload/product_img/'),$imageName);
                $data->image = $imageName;
            }  
            $data->save();
        });
       
       return redirect()->route('view_product')->with('success',"Product update successfully!");
    
        
    }

    public function delete($id){
        Product::find($id)->delete();
        ProductColor::where('product_id',$id)->delete();
        ProductSize::where('product_id',$id)->delete();
        ProductSubImage::where('product_id',$id)->delete();
        return redirect()->route('view_product')->with('success','Delete successfully!');

    }

    public function details($id){
        $data['details'] = Product::find($id);
        return view('backend.admin.product.details',$data);
    }


    
}
