<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

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
            'message' => "⛔ Please try again or send me a direct email to \n " . config('constants.MY_EMAIL_ADDRESS') . " ⛔"
        ]);
    }

    public function store(ContactRequest $request): RedirectResponse
    {
        try {
            $rules = [
                "g-recaptcha-response" => "required|recaptcha"
            ];

            $validation = $this->validate($request, $rules, [
                "g-recaptcha-response.recaptcha" => "Captcha verification failed",
                "g-recaptcha-response.required" => "Please complete the captcha"
            ]);

            $namesToBlock = ["Robertcof"];

            if (in_array($request->name, $namesToBlock)) {
                throw new \RuntimeException("name is not allowed");
            } else {
                $recaptchaResponse = $request->input('g-recaptcha-response');
                $recaptchaScore = $this->verifyRecaptcha($recaptchaResponse);

                if ($recaptchaScore >= 0.8) {
                    Mail::to(config('constants.MY_EMAIL_ADDRESS'))->send(
                        new ContactMail($request->name, $request->email, $request->message)
                    );
                    return redirect("email-sent-success")
                        ->with("success", "Your message has been sent successfully!");
                } else {
                    return redirect("email-sent-failure")
                        ->with("failure", "Captcha verification failed. Please try again.");
                }
            }
        } catch (\Exception $e) {
            return redirect("email-sent-failure")
                ->with("failure", "An error occurred while sending your email");
        }
    }

    private function verifyRecaptcha(string $recaptchaResponse): float
    {
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => config('services.recaptcha.secret'),
            'response' => $recaptchaResponse
        ]);

        $data = $response->json();
        return $data['score'] ?? 0.0;
    }
}