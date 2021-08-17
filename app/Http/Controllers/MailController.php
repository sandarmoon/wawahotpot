<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function basic_email(Request $request) {
      $data = array('name'=>request('username'));
   
      Mail::send(['text'=>'mail.mail'], $data, function($message) {
         $message->to(request('mail'), 'Sending Access Account')->subject
            ('Allowing to access Wa Wa Hotpot System');
         $message->from('ayechanooaco23@gmail.com','Aye chan oo');
      });
     return response()->json(['success'=>'Please Check your Email and Access the Account!']);
   }
}
