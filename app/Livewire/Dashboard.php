<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $list = Post::latest()->get();
        return view('livewire.dashboard', ['list' => $list]);
    }
}
