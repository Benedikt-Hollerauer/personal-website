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

    public function store(ContactRequest $request): RedirectResponse {
        Mail::to(
            config('constants.MY_EMAIL_ADDRESS')
        )->send(
            new ContactMail(
                $request->name,
                $request->email,
                $request->message
            )
        );
        return redirect()
            ->back()
            ->with('success', 'Your message has been sent successfully!'); // TODO: maybe add a extra page
    }
}