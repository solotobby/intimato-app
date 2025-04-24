<?php

namespace App\Livewire\Stories;

use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
use Livewire\Component;

class CreateStory extends Component
{

    public $where_it_happen;
    public $age;
    public $rating;
    public $category;
    public $gender;
    public $story;
    public $tagList;
    public $tags;
    public $title;


    public function mount(){
        
        $this->tagList = Tag::all();
    }
    public function post(){

        // $request->validate([
        //     'title' => 'nullable|string|max:255',
        //     'email' => 'nullable|email|max:255',
        //     'where_it_happen' => 'required|string|max:255',
        //     'age' => 'required|numeric|min:10|max:100',
        //     'gender' => 'required|in:Male,Female,Non-Binary',
        //     'category' => 'required|in:Straight,Gay,Bi-Sexual',
        //     'tags' => 'required|array|min:1',
        //     'tags.*' => 'string|max:50',
        //     'rating' => 'required|in:1,2,3,4,5',
        //     'story' => 'required|string|min:10',
        //     'ans' => 'required|numeric',
        //     // 'terms' => 'accepted',
        // ]);

        dd($this->tags);
        $posted = Post::create([
            'user_id' => auth()->user()->id,
            '_id' => rand(999,99999),
            'title' => $this->title, 
            'where_it_happen' => $this->where_it_happen, 
            'age' => $this->age, 
            'rating' => $this->rating, 
            'category' => $this->category, 
            'gender' => $this->gender, 
            'story' => $this->story
        ]);

        if($posted){

            foreach($this->tags as $tag){
                PostTag::create(['tag_id' =>$tag, 'post_id' => $posted->id ]);
            }

            $this->reset();
            session()->flash('message', 'Story posted successfully!');

            return redirect('dashboard');

        }

        

    }

    public function render()
    {
        return view('livewire.stories.create-story');
    }
}
