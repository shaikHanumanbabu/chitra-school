<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function submit(Request $request)
    {
        // Validate inputs
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'phone'   => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $validated['body'] = $validated['message'];
        unset($validated['message']);


        // Send email
        Mail::send('emails.contact', $validated, function ($message) use ($validated) {
            $message->to('shaikhanuman@yopmail.com') // replace with your target email
                ->subject($validated['subject']);
        });

        return back()->with('success', 'Message sent successfully!');
    }
}
