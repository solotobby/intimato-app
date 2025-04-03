<?php

namespace App\Livewire\Stories;

use App\Models\Post;
use Livewire\Component;

class CreateStory extends Component
{

    public $where_it_happen;
    public $age;
    public $rating;
    public $category;
    public $gender;
    public $story;



    public function post(){
        
        Post::create([
            'user_id' => auth()->user()->id,
            '_id' => rand(999,99999),
            'where_it_happen' => $this->where_it_happen, 
            'age' => $this->age, 
            'rating' => $this->rating, 
            'category' => $this->category, 
            'gender' => $this->gender, 
            'story' => $this->story
        ]);

        $this->reset();
        session()->flash('message', 'Story posted successfully!');


    }

    public function render()
    {
        return view('livewire.stories.create-story');
    }
}
