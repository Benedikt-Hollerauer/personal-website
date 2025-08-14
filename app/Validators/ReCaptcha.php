<?php

namespace App\Validators;

use GuzzleHttp\Client;

class ReCaptcha {
    public function validate($attribute, $value, $parameters, $validator) {
        $response = (new Client())->post(
            'https://www.google.com/recaptcha/api/siteverify',
            [
                'form_params' => [
                    'secret' => config('services.recaptcha.v3.secret'),
                    'response' => $value,
                    'remoteip' => request()->ip()
                ]
            ]
        );
        
        $body = json_decode((string)$response->getBody());
        return $body->success && 
               $body->score >= 0.5 && 
               $body->action === 'contact' && 
               in_array($body->hostname, ['localhost', '127.0.0.1']);
    }
}