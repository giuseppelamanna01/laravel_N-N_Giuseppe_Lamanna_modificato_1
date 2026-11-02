<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class PublicController extends Controller
{
    public function homepage() {
    return view('welcome');
    }

    public function contactUs(){
        return view('contattaci');
    }

    public function submit(Request $request){
        $name = $request->input('name');
        $surname = $request->input('surname');
        $email = $request->input('email');
        Mail::to($email)->send(new ContactMail());
        return redirect()->route('contattaci.invio.success')->with('status', 'Complimenti, la tua email è stata inviata con successo!');
    }

    public function success(){
        return view('success');
    }

    public function profile(){
        return view('profile');
    }
}
