<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use Auth;

class NewsEventController extends Controller
{
    public function view_news(){
        $data['users'] = News::all();
        $logo = count(News::all());
        return view('backend.admin.news.user_view',compact('logo'),$data);
    }
    
    public function add_news(){
        $logo = count(News::all());
        return view('backend.admin.news.add_user');
    }

    public function store_news(Request $request){
        

        $data = new News();
        $data->created_by = Auth::User()->id;
        $data->title = $request->title;
        $data->date = $request->date;

        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/news/').$data->image);
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('upload/news'), $fileName);
            $data->image = $fileName;
        }
        $data->save();
        return redirect()->route('view_news')->with('success',"Logo update successfully!");
        

       
        
    }

    public function edit_news($id){
        $data['editSlide'] = News::find($id);
        return view('backend.admin.news.add_user',$data);
    }

    public function update_news(Request $request,$id){

        $data = News::find($id);
        $data->upload_by = Auth::User()->id;
        $data->title = $request->title;
        $data->date = $request->date;

        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/news/').$data->image);
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('upload/news'), $fileName);
            $data->image = $fileName;
        }
        $data->save();
        return redirect()->route('view_news')->with('success',"mission update successfully!");
        
    }

    public function delete_news($id){

        $logo = News::find($id);
        if(file_exists('public/upload/news/'. $logo->image) && !empty($logo->image)){
            unlink('public/upload/news/' . $logo->image); 
        }
        $logo->delete();
        return redirect()->route('view_news')->with('success','Delete successfully!');

    }


    
}
