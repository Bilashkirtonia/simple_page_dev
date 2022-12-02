<?php

namespace App\Http\Controllers\Fronted;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\Models\Logo;
use App\Models\Slider;
use App\Models\Contact;
use App\Models\About;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use Mail;
class FrontedController extends Controller
{
    public function index(){
        $data['logo'] = Logo::first();
        $data['slider'] = Slider::first();
        $data['contact'] = Contact::first();
        $data['about'] = About::first();
        $data['contact'] = Contact::first();
        $data['Products'] = Product::all();
        $data['categories'] = Category::all();
        return view('fronted.home',$data);
    }

    public function product_details($id){
        $data['logo'] = Logo::first();
        $data['slider'] = Slider::first();
        $data['contact'] = Contact::first();
        $data['about'] = About::first();
        $data['contact'] = Contact::first();
        $data['Product'] = Product::find($id);
        $brand = $data['Product']['brand_id'];
        $data['brands'] = Product::where('brand_id',$brand)->get();
        
        return view('fronted.product',$data);
    }

    public function product_details_list($id){
        $data['logo'] = Logo::first();
        $data['slider'] = Slider::first();
        $data['contact'] = Contact::first();
        $data['about'] = About::first();
        $data['contact'] = Contact::first();
        $data['categories'] = Category::all();
        $data['Products'] = Product::where('category_id',$id)->get();
        
        return view('fronted.product_list',$data);
    }
    
    public function admin(){
        return view('admin.index');
    }
    

    

}
