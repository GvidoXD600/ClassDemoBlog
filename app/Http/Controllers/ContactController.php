<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessageReceived;

class ContactController extends Controller
{
    /**
     * Handle contact form submission.
     */
    public function submit(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Log the message for now
        Log::info('Contact form submitted', $data);

        // Optionally send an email to site admin
        // Mail::to(config('mail.from.address'))->send(new ContactMessageReceived($data));

        return redirect()->route('contact')->with('status', 'Your message has been sent. Thank you!');
    }
}
