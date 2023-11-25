<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller {
    public function show(): View {
        return view('sites.contact');
    }
    
    public function emailSentSuccess(): View {
        return view('sites.email-sent', [
            'message' => "📨 Your email is on the way 📨"
        ]);
    }

    public function emailSentFailure(): View {
        return view('sites.email-sent', [
            'message' => "⛔ An error occured while sending your email ⛔"
        ]);
    }

    public function store(ContactRequest $request): RedirectResponse {
        try {
            Mail::to(
                config('constants.MY_EMAIL_ADDRESS')
            )->send(
                new ContactMail(
                    $request->name,
                    $request->email,
                    $request->message
                )
            );
            return redirect("email-sent-success")
                ->with("success","Your message has been sent successfully!");
        } catch (\Exception $e) {
            return redirect("email-sent-failure")
                ->with("failure","An error occured while sending your email");
        }
    }
}