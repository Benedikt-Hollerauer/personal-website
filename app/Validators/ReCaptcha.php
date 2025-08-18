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
        
        // Check if the response is successful
        if (!$body->success) {
            return false;
        }
        
        // Check if the score meets the minimum threshold (0.5 for validation, 0.8 for email sending)
        if ($body->score < 0.5) {
            return false;
        }
        
        // Check if the action is correct
        if ($body->action !== 'contact') {
            return false;
        }
        
        // Check if the hostname is allowed (more flexible for production)
        $allowedHostnames = [
            'localhost', 
            '127.0.0.1',
            'benedikt-hollerauer.com',
            'www.benedikt-hollerauer.com'
        ];
        
        return in_array($body->hostname, $allowedHostnames);
    }
}