<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mission;
use Auth;

class MissionController extends Controller
{
    public function view_mission(){
        $data['users'] = Mission::all();
        $logo = count(Mission::all());
        return view('backend.admin.mission.user_view',compact('logo'),$data);
    }
    
    public function add_mission(){
        $logo = count(Mission::all());
        return view('backend.admin.mission.add_user');
    }

    public function store_mission(Request $request){
        

        $data = new Mission();
        $data->created_by = Auth::User()->id;
        $data->title = $request->title;
        

        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/mission/').$data->image);
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('upload/mission'), $fileName);
            $data->image = $fileName;
        }
        $data->save();
        return redirect()->route('view_mission')->with('success',"Logo update successfully!");
        

       
        
    }

    public function edit_mission($id){
        $data['editSlide'] = Mission::find($id);
        return view('backend.admin.mission.add_user',$data);
    }

    public function update_mission(Request $request,$id){

        $data = Mission::find($id);
        $data->upload_by = Auth::User()->id;
        $data->title = $request->title;

        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/mission/').$data->image);
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('upload/mission'), $fileName);
            $data->image = $fileName;
        }
        $data->save();
        return redirect()->route('view_mission')->with('success',"mission update successfully!");
        
    }

    public function delete_mission($id){

        $logo = Mission::find($id);
        if(file_exists('public/upload/mission/'. $logo->image) && !empty($logo->image)){
            unlink('public/upload/mission/' . $logo->image); 
        }
        $logo->delete();
        return redirect()->route('view_mission')->with('success','Delete successfully!');

    }


    
}
