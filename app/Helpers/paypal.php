<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

if (! function_exists('getAccessToken')) {
    function getAccessToken(){

            $clientId = env('PAYPAL_CLIENT_ID');
            $clientSecret = env('PAYPAL_CLIENT_SECRET');

            // PayPal API endpoint
            $url = env('PAYPAL_URL').'oauth2/token'; // Use live URL for production

            // Encode credentials to Base64
            $base64Credentials = base64_encode("{$clientId}:{$clientSecret}");

            // Make the HTTP request
            $response = Http::withHeaders([
                'Authorization' => "Basic {$base64Credentials}",
                'Content-Type' => 'application/x-www-form-urlencoded',
            ])->asForm()->post($url, [
                'grant_type' => 'client_credentials',
            ]);

            // Check if the request was successful
            if ($response->successful()) {
                return $response->json()['access_token']; // Return the access token and other data
            } else {
                // Handle error
                return [
                    'error' => true,
                    'message' => $response->body(),
                ];
            }


        }
    }

    if (! function_exists('getPlans')) {
        function getPlans(){
        
            $accessToken = getAccessToken();
            $url = env('PAYPAL_URL').'billing/plans';
            // Make the HTTP request
            $response = Http::withHeaders([
                'Authorization' => "Bearer {$accessToken}",
                'Content-Type' => 'application/json',
            ])->get($url)->throw();
    
    
            return json_decode($response->getBody()->getContents(), true);
        }
    }

    
if (! function_exists('showPlanDetails')) {
    function showPlanDetails($planId){


        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->withBasicAuth(env('PAYPAL_CLIENT_ID'), env('PAYPAL_CLIENT_SECRET'))
        ->get(env('PAYPAL_URL').'billing/plans/'.$planId)->throw(); //billing/plans/{id}

         return json_decode($response->getBody()->getContents(), true);

    }
}


if (! function_exists('createSubscription')) {
    function createSubscription($planId){

       $accessToken = getAccessToken();

        $user = Auth::user();
        $payload = [
            'plan_id' => $planId,
            'subscriber' => [
                'name' => [
                    'given_name' => $user->name, //$subscriberDetails['first_name'],
                    'surname' => $user->name, //$subscriberDetails['last_name'],
                ],
                'email_address' => $user->email, //$subscriberDetails['email'],
            ],
            'application_context' => [
                'brand_name' => 'Intimato❤️',
                'locale' => 'en-GB',
                'shipping_preference' => 'NO_SHIPPING',
                'user_action' => 'SUBSCRIBE_NOW', // Directs the user to confirm the subscription
                'return_url' => route('validate.payment'), // Redirect after successful approval
                'cancel_url' => route('cancel.process'), // Redirect if user cancels
            ],
        ];

        $url = env('PAYPAL_URL').'billing/subscriptions';
        // Make the HTTP request
        $response = Http::withHeaders([
            'Authorization' => "Bearer {$accessToken}",
            'Content-Type' => 'application/json',
        ])->post($url, $payload)->throw();

         return json_decode($response->getBody()->getContents(), true);


    }
}

