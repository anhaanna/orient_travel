<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Message;
use Mail;

class PagesController extends Controller
{

  public $countries=["armenia", "georgia", "iran", "kyrgyzstan", "mongolia", "tajikistan", "turkmenistan", "kazakhstan", "uzbekistan", "privacy_policy", "terms"];
  public $languages = ["en", "fr", "de"];

    public function index($locale='en',Request $request){
      if (in_array($locale,$this->languages)) {
        \App::setLocale($locale);
        return view('welcome');
      }
       return redirect()->action('PagesController@error');

    }

    public function error(){
        return response()->view('errors.404',[],404);

    }

    public function getLanguage(){
        return \App::getLocale();
    }


    public function getCountry($locale,$countryName,Request $request){

          if(in_array($countryName,$this->countries) && in_array($locale,$this->languages)){

           \App::setLocale($locale);
           return view('index',compact('locale', 'countryName'));
          }
          else{
            \App::setLocale($locale);
            return redirect()->action('PagesController@error');
          }
  
    }



      public function htmlmail(Request $request){

        $data = array();
        print_r($request->name);
        // Path or name to the blade template to be rendered
        $template_path = 'email';
        $answer_path = 'answer';


        Mail::send($template_path, $data, function($message) {
            // Set the sender
            $message->from($_POST["email"],$_POST["name"]);
            // Set the receiver and subject of the mail.
            $message->to('anna.hakobyan@aratours.travel', 'anna.hakobyan@aratours.travel')->subject('Orient Travel Request');
            
        });

        Mail::send($answer_path, $data, function($answer) {
            // Set the receiver and subject of the mail.
            $answer->from('anna.hakobyan@aratours.travel', 'Orient Travel')->subject('Orient Travel Request');

            // Set the sender
            $answer->to($_POST["email"],$_POST["name"]);

            
        });

        return "success";
      }


  
}
