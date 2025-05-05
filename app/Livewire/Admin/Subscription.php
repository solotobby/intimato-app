<?php

namespace App\Livewire\Admin;

use App\Models\Plan;
use App\Models\Setting;
use Livewire\Component;

class Subscription extends Component
{
    public $plans;
    public $settings;

    public function mount(){
        $this->plans = Plan::all();
        $this->settings = Setting::all();
    }

    public function render()
    {
        return view('livewire.admin.subscription');
    }
}
