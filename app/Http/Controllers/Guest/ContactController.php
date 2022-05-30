<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\SendNewMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact () {
        return view ('guest.contact');
    }

    public function contactMailSender(Request $request) {
       /*  dd($request->all()); */

        Mail::to('account@mail.it')->send(new SendNewMail());
        return redirect('admin')->with('message', 'Mail inviata correttamenre'); 
    }

/*     public function contactStore () {
        return redirect ('guest.home')->with('message', 'Mail inviata');
    } */
}