<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    public function index()
    {
        return view('pages.feedback');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'full_name' => 'required|string|max:255',
            'phone' => 'required|string|max:50',
            'email' => 'required|email|max:255',
            'position' => 'nullable|string|max:255',
            'satisfied' => 'required|string|in:yes,no,neutral',
            'feedback' => 'nullable|string|max:2000',
        ]);

        $to = config('mail.from.address', 'info@specstechafrica.com');

        $body = "New feedback received:\n\n" .
            "Name: {$data['full_name']}\n" .
            "Phone: {$data['phone']}\n" .
            "Email: {$data['email']}\n" .
            "Position: " . ($data['position'] ?? '-') . "\n" .
            "Satisfied: {$data['satisfied']}\n\n" .
            "Feedback:\n" . ($data['feedback'] ?? '-');

        Mail::raw($body, function ($message) use ($to) {
            $message->to($to)
                ->subject('Website Feedback Received');
        });

        return back()->with('status', 'Thank you for your feedback.');
    }
}
