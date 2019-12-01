<?php

namespace App\Http\Controllers;
use\App\Newsletter;
use Illuminate\Http\Request;
use App\Http\Validation\NewsletterValidation;
use App\Mail\newsletterMail;

class NewsletterController extends Controller
{
	use NewsletterValidation;
	
    public function show(){
    	return view('frontend.news.index');
    }

    public function store(Request $request){
    	$this->NewsletterFormValidation($request->all());

    	$email = $request->email;
    	$username = strstr($email, '@', true);
    	\Mail::to($request->email)->send(new newsletterMail($username));

    	Newsletter::create($request->all());
    	\Session::flash('message' , 'Thanks For Joining Us');
    	return redirect(route('newsletter'));
    }
}

