<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
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

        // Save the information to database
        ContactMessage::create($data);
        
        $body = "Name: {$data['name']}\n" .
            "Email: {$data['email']}\n\n" .
            "Message:\n" . $data['message'];

        $to = 'your-email@example.com';
        Mail::raw($body, function ($message) use ($to) {
            $message->to($to)
                ->subject('Website Contact Message');
        });

        return back()->with('status', 'Message sent — we will get back to you shortly.');
    }
}
