<?php

namespace App\Livewire\Subscriptions;

use App\Models\Plan;
use App\Models\PostRead;
use App\Models\SubscriptionPlan;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

class Showplans extends Component
{

    public $plans;
    public $id;
    public $activeSubscription;

    public function mount(){
    
        //dd(showPlanDetails('P-9BL233847N5977520M5DYGGA'));
       $this->activeSubscription = auth()->user()->activeSubscription();
       $this->plans = Plan::all();

    }

    public function makeSubscription($id){


       
        $plan = Plan::where('id', $id)->first();
        $res = createSubscription($plan->plan_id);

        if($res['status'] == 'APPROVAL_PENDING'){
            
            // DB::table('subscription_intents')->insert(['user_id' => Auth::id(), 'subscription_id' => $res['id'], 'plan_id'=>$decodedPlan['id'], 'duration'=>$decodedPlan['interval'], 'created_at' => now(), 'updated_at' => now()]);

            return redirect($res['links'][0]['href']);
        }


        
    }

    public function render()
    {
        return view('livewire.subscriptions.showplans');
    }
}
