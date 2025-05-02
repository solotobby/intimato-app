<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class Subscription extends Component
{
    
    public function mount(){
        dd('okay');
    }

    public function render()
    {
        return view('livewire.admin.subscription');
    }
}
