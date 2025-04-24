<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubscriptionPlan extends Model
{
    protected $fillable = ['user_id', 'plan_id', 'paypal_subscription_id', 'status', 'starts_at', 'ends_at', 'channel'];

    public function plan(){
        return $this->belongsTo(Plan::class, 'plan_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
