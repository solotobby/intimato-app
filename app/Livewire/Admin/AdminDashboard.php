<?php

namespace App\Livewire\Admin;

use App\Models\Post;
use Livewire\Component;

class AdminDashboard extends Component
{
    public $total;
    public $prem;
    public $basic;

    public function mount(){
        $this->total = Post::query()->count();
        // $this->prem = $this->total->where('is_premium', true)->count();  
        // $this->basic = $this->total->where('is_premium', false)->count();    
    }
    public function render()
    {
        return view('livewire.admin.admin-dashboard');
    }
}
