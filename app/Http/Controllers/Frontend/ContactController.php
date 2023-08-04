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
            'phone'                => 'required|numeric',
            'email'                => 'required|email:rfc,dns',
            'message'              => 'required|min:20',
            'g-recaptcha-response' => 'recaptcha',
        ],
        [
            'phone.required'                 => 'Phone number is required.',
            'phone.numeric'                  => 'Please enter valid phone number.',
            'email.required'                 => 'Email address is required.',
            'email.email'                    => 'Please enter valid email address.',
            'message.required'               => 'Message address is required.',
            'message.min'                    => 'Minimum message length should be 20.',
            'g-recaptcha-response.recaptcha' => 'Recaptcha validation required'
        ]);

        $validatedData['g-recaptcha-response'] = 'Recaptcha Passed';

        try{
            Mail::to('life@shanti.ph')->send(new ContactMail($validatedData));
            return redirect()->route('contact.contact-us')
                            ->with('successContactMessage', 'Thank you. Your message has been submitted successfully.');
        }catch(\Exception $ex)
        {
            return redirect()->route('contact.contact-us')->with('errorContactMessage', 'An error has occurred please try again later!');
        }
    }
}
