<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:2000',
        ]);

        $to = config('mail.from.address', 'info@specstechafrica.com');

        $body = "New contact message:\n\n" .
            "Name: {$data['name']}\n" .
            "Email: {$data['email']}\n\n" .
            "Message:\n" . $data['message'];

        Mail::raw($body, function ($message) use ($to) {
            $message->to($to)
                ->subject('Website Contact Message');
        });

        return back()->with('status', 'Message sent — we will get back to you shortly.');
    }
}
