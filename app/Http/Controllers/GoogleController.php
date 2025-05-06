<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Auth\Events\Registered;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Exception;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Faker\Factory as Faker;


class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    
    public function handleGoogleCallback()
    {
        try {
        
            $user = Socialite::driver('google')->stateless()->user();
           
            $finduser = User::where('google_id', $user->id)->first();
         
            if($finduser){
         
                Auth::login($finduser);
                return redirect(route('dashboard', absolute: false));
                // return redirect()->intended('home');
         
            }else{
                $psword = Str::random(16);
                $newUser = User::updateOrCreate(['email' => $user->email],[
                        'name' =>$this->username($user->name),
                        'google_id'=> $user->id,
                        // 'name' => $user->name,
                        'avarta' => $user->avatar,
                        'gender' => 'Not-Yet-Decided',
                        'password' => Hash::make($psword),
                ]);

                if($newUser){

                    event(new Registered($user));
                    
                    Auth::login($newUser);
        
                    return redirect(route('dashboard', absolute: false));
                }

            }
        
        } catch (Exception $e) {
            // return redirect(url('login'));
            dd($e->getMessage());
        }
    }

    public function username($name){
            // Split name into words
            $faker = Faker::create();
            $username = Str::slug($faker->username) . rand(1000, 9999);
            return ucfirst($username);
          
    }

}
