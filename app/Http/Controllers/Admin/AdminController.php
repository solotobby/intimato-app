<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
       $this->user = Auth::user();
    }

    public function createPaypalProduct(){
       return $rsponse = listProduct();

        Setting::firstOrCreate(['parameter' => $rsponse['id'], 'name' => $rsponse['name']]);
        return back();

    }

    public function GeneratePaypalId($planType, $id){
        if ($this->user && $this->user->role === 'admin') {

            // return [$plan, $id];

            $subscription = Plan::where('id', $id)->first();
            $interval = $subscription->name == 'Annual' ? 'YEAR' : 'MONTH';
            if($planType == 'plan'){
                $productAmount =  $subscription->amount;
            }else{
                $productAmount= $subscription->discount_amount;
            }

            // $productID = $subscription->is_discount == true ? $subscription->discount_plan_id : $subscription->plan_id;
            $setting = Setting::where('name', 'PAYPAL')->first();

             $plan = [
                    'id' => $subscription->id,
                    'product_id' => $setting->parameter,
                    'name' => $subscription->name,
                    'description' => 'Subscription charged '.strtolower($interval).'ly',
                    'price' => $productAmount,
                    'interval_unit' => $interval,
                    'interval_count' => 1, // Every 1 month
            ];

            $processPlan = createPlans($plan);

            if($planType == 'plan'){
                $subscription->plan_id = $processPlan['id'];
                $subscription->save();
                return back()->with('success', 'Plan Created Successfully on Paypal!');
            }else{
                $subscription->discount_plan_id = $processPlan['id'];
                $subscription->save();
                return back()->with('success', 'Discount Plan Created Successfully on Paypal!');
            }

           
          

        } else {
            abort(403, 'Not allowed'); // 403 = Forbidden
        }
        
    }
}
