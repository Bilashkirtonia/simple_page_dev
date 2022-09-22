<?php

namespace App\Http\Controllers\Fronted;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\Models\Logo;
use App\Models\Slider;
use App\Models\Contact;
use App\Models\Mission;
use App\Models\Vision;
use App\Models\News;
use App\Models\Service;
use App\Models\{About,Communication};
use Mail;
class FrontedController extends Controller
{
    public function index(){
        $data['logo'] = Logo::first();
        $data['slider'] = Slider::all();
        $data['contact'] = Contact::first();
        $data['mission'] = Mission::first();
        $data['vision'] = Vision::first();
        $data['news'] = News::all();
        $data['service'] = Service::all();
        return view('fronted.home',$data);
    }
    public function about_us(){
        $data['logo'] = Logo::first();
        $data['contact'] = Contact::first();
        $data['about'] = About::first();
        return view('fronted.singlepage.about_us',$data);
    }
    public function contact_us(){
        $data['logo'] = Logo::first();
        $data['contact'] = Contact::first();
        return view('fronted.singlepage.contact_us',$data);
    }
    public function admin(){
        return view('admin.index');
    }

    public function message(Request $request){
        $data = new Communication();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->address = $request->address;
        $data->message = $request->message;
        $data->save();

        $mail = array(
            'name' =>$request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'address' => $request->address,
            'msg' => $request->message
        );
        Mail::send('fronted.mail.index',$mail,function($message) use($mail){
            $message->from('rahulshimg329033@gmail.com','bilashkirtonia');
            $message->to($mail['email']);
            $message->subject('Thank you for contact us');
        });
        return redirect()->back();
    }


}
