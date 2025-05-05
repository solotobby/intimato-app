<?php

namespace App\Http\Controllers;

use App\Models\Plan;
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

    public function validateSubscription(){

        $url = request()->fullUrl();
        $url_components = parse_url($url);
        parse_str($url_components['query'], $params);
        $id = $params['subscription_id'];

        $response = getSubscription($id);

         $response['billing_info']['next_billing_time'];

        if($response['status'] == 'ACTIVE'){

            $getPlan = Plan::where('plan_id', $response['plan_id'])
            ->orWhere('discount_plan_id', $response['plan_id'])
            ->firstOrFail();

            $paypal_subscription_id = $response['id'];

            $subscription = SubscriptionPlan::create(['user_id' => auth()->user()->id, 'plan_id' =>$getPlan->id, 'paypal_subscription_id' => $paypal_subscription_id, 'status' => $response['status'], 'channel'=>'PAYPAL', 'starts_at' => $response['status_update_time'], 'ends_at' =>  $response['billing_info']['next_billing_time']]);

            if($subscription){
                session()->flash('message', 'Subscription Successful!');

                return redirect('dashboard');
            }

        }else{
            return 'an error occoured please try again';
        }
       

        // if($plan->name == 'Monthly'){
        //     $ends_at = now()->addDays(30);
        // }elseif($plan->name == 'Bi-Annual'){
        //     $ends_at = now()->addDays(180);
        // }else{
        //     $ends_at = now()->addDays(365);
        // }
        
       
        


    }
}
