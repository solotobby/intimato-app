<?php

namespace App\Livewire\Stories;

use App\Models\Post;
use Livewire\Component;

class MyStories extends Component
{
    public function render()
    {
        $list = Post::where('user_id', auth()->user()->id)->get();
        return view('livewire.stories.my-stories', ['list' => $list]);
    }
}
