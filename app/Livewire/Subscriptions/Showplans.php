<?php

namespace App\Livewire\Subscriptions;

use App\Models\PostRead;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

class Showplans extends Component
{

    public function mount(){
    
       


    }

    public function render()
    {
        return view('livewire.subscriptions.showplans');
    }
}
