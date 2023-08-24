<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller {
    public function show(): View {
        return view('site.contact');
    }

    public function store(ContactRequest $request): RedirectResponse {
        Mail::to('hollibene@gmail.com') // TODO here is the error
            ->send(
                new ContactMail(
                    $request->name,
                    $request->email,
                    $request->message
                )
            );
        return redirect('/contact'); // TODO: maybe add a extra page
    }
}