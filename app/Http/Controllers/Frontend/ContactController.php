<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function contactSubmit(Request $request)
    {
        $validatedData = $request->validate([
            'name'                 => 'required',
            'subject'              => 'required',
            'phone'                => 'required',
            'message'              => 'required',
            'g-recaptcha-response' => 'recaptcha',
        ],
        [
            'g-recaptcha-response.recaptcha' => 'Recaptcha validation required'
        ]);

        $validatedData['g-recaptcha-response'] = 'Recaptcha Passed';

        try{
            Mail::to('life@shanti.ph')->send(new ContactMail($validatedData));
            return redirect()->route('contact.contact-us')
                            ->with('successContactMessage', 'Message successfully sent!');
        }catch(\Exception $ex)
        {
            return redirect()->route('contact.contact-us')->with('errorContactMessage', 'An error has occurred please try again later!');
        }
    }
}
