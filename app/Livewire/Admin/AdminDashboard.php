<?php

namespace App\Livewire\Admin;

use App\Models\Post;
use App\Models\Statistics;
use Carbon\Carbon;
use Livewire\Component;

class AdminDashboard extends Component
{
    public $total;
    public $prem;
    public $basic;
    public $dailyVisit;

    public function mount(){
        $this->total = Post::query()->count();
        $today = Carbon::now()->format('Y-m-d');
        $this->dailyVisit = Statistics::where('date', $today)->first()->count;

        // $this->prem = $this->total->where('is_premium', true)->count();  
        // $this->basic = $this->total->where('is_premium', false)->count();    
    }
    public function render()
    {
        return view('livewire.admin.admin-dashboard');
    }
}
