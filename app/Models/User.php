<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'role',
        'google_id',
        'avarta',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Get the user's initials
     */
    public function initials(): string
    {
        return Str::of($this->name)
            ->explode(' ')
            ->map(fn (string $name) => Str::of($name)->substr(0, 1))
            ->implode('');
    }

    public function subscription(){
        return $this->hasOne(SubscriptionPlan::class, 'user_id');
    }

    public function activeSubscription(){
        $subscription = $this->subscription()
            ->where('status', 'ACTIVE')
            ->where('ends_at', '>', now())
            ->with('plan') //load the plan
            ->first();

            if($subscription){
             
                    return [
                        'is_subscribed' => true,
                        'plan_name' => $subscription->plan->name,
                        'plan_id' => $subscription->plan->id,
                        'amount' => $subscription->plan->amount,
                        'discount_amount' => $subscription->plan->discount_amount,
                        'ends_at' => $subscription->ends_at, // Format the date
                        'status' => $subscription->status,
                        'paypal_subscription_id' => $subscription->paypal_subscription_id,
                        'channel' => $subscription->channel,
                    ];
                }
        
                return [
                    'is_subscribed' => false,
                    'plan_name' => null,
                    'ends_at' => null,
                ];
            
    }

    public function getActiveSubscriptionDetails(){
        return $this->activeSubscription;
    }
}
