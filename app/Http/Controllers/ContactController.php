<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;
use Log;

class ContactController extends Controller
{
    public function show(): View
    {
        return view('sites.contact');
    }

    public function emailSentSuccess(): View
    {
        return view('sites.email-sent', [
            'message' => "📨 Your email is on the way 📨"
        ]);
    }

    public function emailSentFailure(): View
    {
        return view('sites.email-sent', [
            'message' => "⛔ Please try again or send me a direct email ⛔"
        ]);
    }

    public function store(ContactRequest $request): RedirectResponse
    {
        // Validate recaptcha first
        $rules = [
            "g-recaptcha-response" => "required|recaptcha"
        ];

        try {
            $validation = $this->validate($request, $rules, [
                "g-recaptcha-response.recaptcha" => "Captcha verification failed",
                "g-recaptcha-response.required" => "Please complete the captcha"
            ]);
            \Log::info('Google recaptcha validation: ' . implode(',', $validation));
        } catch (ValidationException $e) {
            \Log::error('Error with validation: ' . $e->getMessage());
            return redirect("email-sent-failure")
                ->with("failure", "Captcha verification failed. Please try again.");
        }

        // Check for blocked names
        $namesToBlock = ["Robertcof"];
        if (in_array($request->name, $namesToBlock)) {
            return redirect("email-sent-failure")
                ->with("failure", "This name is not allowed.");
        }

        // Try to send the email
        try {
            $email_sending_result = Mail::to(config('constants.MY_EMAIL_ADDRESS'))->send(
                new ContactMail($request->name, $request->email, $request->message)
            );
            \Log::info('Email sent successfully from ' . $request->email);
            return redirect("email-sent-success")
                ->with("success", "Your message has been sent successfully!");
                
        } catch (\Exception $e) {
            // Log the error for debugging
            \Log::error('Email sending failed: ' . $e->getMessage());
            
            return redirect("email-sent-failure")
                ->with("failure", "An error occurred while sending your email. Please try again.");
        }
    }
}