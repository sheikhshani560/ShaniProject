<?php

namespace App\Http\Controllers;

use App\Mail\Customer;
use App\Models\ContactsModel;
use App\Models\EventsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
  public function Gallery(Request $request){
      $link = $request->link;
      $Event = EventsModel::find($link);
      $images = json_decode($Event->Image);
      // dd($images);
          return view('frontend.Gallery', [
              'Event'=>$Event,
              'images'=>$images
          ]);
  }
  public function Contactsubmit(Request $request){
      // dd($request->all());
      $Save = ContactsModel::create([
          'firstname'=>$request->c_fname,
          'lastname'=>$request->c_lname,
          'email'=>$request->c_email,
          'subject'=>$request->c_subject,
          'message'=>$request->c_message,
      ]);

      $details =  $Save ;
      Mail::to('info@gennechealth.com')->send(new Customer($details));

      $Message = $Save ? 'Your Message Is Received' : 'Error';
      return redirect()->back()->with('Message', $Message);

  }
}
