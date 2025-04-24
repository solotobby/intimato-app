<?php

namespace App\Http\Controllers;

use App\Models\SubscriptionPlan;
use Illuminate\Http\Request;

class PayPalController extends Controller
{
    public function cancelProcess(){
        $url = request()->fullUrl();
        $url_components = parse_url($url);
        parse_str($url_components['query'], $params);
        // $id = $params['subscription_id'];
        return redirect('dashboard');
    }

    public function paymentSuccessful(){

        
        // if($plan->name == 'Monthly'){
        //     $ends_at = now()->addDays(30);
        // }elseif($plan->name == 'Bi-Annual'){
        //     $ends_at = now()->addDays(180);
        // }else{
        //     $ends_at = now()->addDays(365);
        // }
        
        //$subscription = SubscriptionPlan::create(['user_id' => auth()->user()->id, 'plan_id' => $id, 'paypal_subscription_id' => 'sgdgd', 'status' => 'ACTIVE', 'channel'=>'PAYPAL', 'starts_at' => now(), 'ends_at' => $ends_at]);

        // if($subscription){
        //     session()->flash('message', 'Subscription Successful!');

        //     return redirect('dashboard');
        // }
    }
}
