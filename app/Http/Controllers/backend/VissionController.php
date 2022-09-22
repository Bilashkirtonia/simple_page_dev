<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vision;
use Auth;
class VissionController extends Controller
{
    public function view_vision(){
        $data['users'] = Vision::all();
        $logo = count(Vision::all());
        return view('backend.admin.vision.user_view',compact('logo'),$data);
    }
    
    public function add_vision(){
        $logo = count(Vision::all());
        return view('backend.admin.vision.add_user');
    }

    public function store_vision(Request $request){
        

        $data = new Vision();
        $data->created_by = Auth::User()->id;
        $data->title = $request->title;
        

        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/vision/').$data->image);
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('upload/vision'), $fileName);
            $data->image = $fileName;
        }
        $data->save();
        return redirect()->route('view_vision')->with('success',"Logo update successfully!");
        

       
        
    }

    public function edit_vision($id){
        $data['editSlide'] = Vision::find($id);
        return view('backend.admin.vision.add_user',$data);
    }

    public function update_vision(Request $request,$id){

        $data = Vision::find($id);
        $data->upload_by = Auth::User()->id;
        $data->title = $request->title;

        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/vision/').$data->image);
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('upload/vision'), $fileName);
            $data->image = $fileName;
        }
        $data->save();
        return redirect()->route('view_vision')->with('success',"mission update successfully!");
        
    }

    public function delete_vision($id){

        $logo = Vision::find($id);
        if(file_exists('public/upload/vision/'. $logo->image) && !empty($logo->image)){
            unlink('public/upload/vision/' . $logo->image); 
        }
        $logo->delete();
        return redirect()->route('view_vision')->with('success','Delete successfully!');

    }


    
}
