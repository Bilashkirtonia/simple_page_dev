<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function inser_user_info(Request $request){
        $data = new Order();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->number = $request->number;
        $data->save();
        return redirect()->back();
    }
    
    public function view(){
        $data['users'] = Order::all();
        return view('backend.admin.order.view_category',$data);
    }

    public function delete($id){

        $order = Order::find($id);
        $order->delete();
        return redirect()->route('view_order')->with('success','Delete successfully!');

    }


}
