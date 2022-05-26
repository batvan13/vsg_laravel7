<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\About;
use App\Conditions;
use App\Profile;
use App\Apartment;
use App\Extra;
use App\CodeExtra;
use App\ApartmentImage;
use App\Event;
use Illuminate\Support\Facades\DB;
use Mail;

class FrontController extends Controller
{
    public function home()
        {
            $apartments = Apartment::with('latestImage')->paginate(5);

            return view('Frontend.home',compact('apartments'));
        }
    public function shared()
            {
                $posts = Post::orderBy('id', 'DESC')->paginate(10);

                return view('Frontend.shared',compact('posts'));
            }

    public function apartment($slug)
            {

                $apartment = Apartment::with('images')->with('extras')->where('slug', $slug)->first();
                $code_extra = CodeExtra::find(1);

                $image_keys = $apartment->images->keys();
                $events = Event::where('apart_id',$apartment->id)->get();
            //dd($apartment);
                return view('Frontend.apartment',compact('apartment','image_keys','code_extra','events'));
            }

    public function about()
        {
            $about = About::find(1);

            return view('Frontend.about',compact('about'));
        }

    public function conditions()
            {
                $con = Conditions::find(1);

                return view('Frontend.conditions',compact('con'));
            }
    public function contact()
                {
                    $contact = Profile::find(1);

                    return view('Frontend.contact',compact('contact'));
                }

    public function contactSubmit(Request $request)
        {
           Mail::send('Frontend.contactmail',[
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'msg' => $request->msg
           ],function($mail) use($request){

            $mail->from(env('MAIL_FROM_ADDRESS'),$request->name);
            $mail->to("vsg.apartments@gmail.com")->subject('Contact Us Message');

           });
        //return "Message has been sen successfull!";
        return redirect()->back()->with('message','Message sent successfully');
        }
}
