<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\photo;
use App\Models\Contact;
use DB;

class ContactController extends Controller
{
    public function page(){
        return view('page');
    }
    public function aboutus(){
        return view('aboutus');
    } 
    public function services(){
        return view('services');
    }
    public function team(){
        return view('team');
    }
    public function detail(){
        return view('detail');
    }
    public function web(){
        return view('website');
    }
    public function app(){
        return view('app');
    }
    public function design(){
        return view('design');
    }
    public function contact(){
        return view('contact');
    }
    public function SaveNewContact(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->number = $request->number;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        $contact->save();
         return redirect('contact');
 
    }
    
    public function project(){
        $photo = DB::select('select * from photos');
        return view('project',['photo'=>$photo]);
    }
    public function SaveNewPhoto(Request $request)
    {
        $photo = new Photo();
        if($request->hasfile('photos')){
            $file = $request->file('photos');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('images'), $filename);
            $photo->photos = $filename;

        }else{
            
            $photo->photos = '';
        }
        $photo->save();
         return redirect()->route('home')->with('success','Project uploaded successfully') ;
    }
    
}
