<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\models\Service;

class ServiceController extends Controller
{
    public function view_service(){
        $data['users'] = Service::all();
        $logo = count(Service::all());
        return view('backend.admin.service.user_view',compact('logo'),$data);
    }
    
    public function add_service(){
        $logo = count(Service::all());
        return view('backend.admin.service.add_user');
    }

    public function store_service(Request $request){
        

        $data = new Service();
        $data->created_by = Auth::User()->id;
        $data->short_title = $request->short_title;
        $data->long_title = $request->long_title;
        $data->save();
        return redirect()->route('view_service')->with('success',"Logo update successfully!");
        

       
        
    }

    public function edit_service($id){
        $data['editSlide'] = Service::find($id);
        return view('backend.admin.service.add_user',$data);
    }

    public function update_service(Request $request,$id){

        $data = Service::find($id);
        $data->upload_by = Auth::User()->id;
        $data->short_title = $request->short_title;
        $data->long_title = $request->long_title;
        $data->save();
        return redirect()->route('view_service')->with('success',"mission update successfully!");
        
    }

    public function delete_service($id){

        $logo = Service::find($id);
        $logo->delete();
        return redirect()->route('view_service')->with('success','Delete successfully!');

    }


    
}
