<?php

namespace App\Livewire\Stories;

use App\Models\Post;
use App\Models\PostRead;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class StoryDetail extends Component
{
    public $id;
    public $message;
    public $post;

    public function mount(){ 
        $user = Auth::user();
        $_id = $this->id;
       
        $this->post = Post::where('_id', $_id)->first();
        if($user->id == $this->post->user_id){
            //allow unlimited read with recording, if user is the creator of the post
            return;
        }

     
        $this->post->views += 1;
        $this->post->save();

        $check = PostRead::query();
        $checkExist = $check->where('post_id', $this->post->id)->where('user_id', $user->id)->exists();

        if(!$checkExist){
            //record new read
            PostRead::create(['post_id' => $this->post->id, 'user_id' => auth()->user()->id]);
        }
        
          
    
        $checkCount = PostRead::where('user_id', $user->id)->count();
        
        if($user->activeSubscription()['is_subscribed'] == false){
            if($checkCount >= 30){
                return redirect()->route('show.plans');
            }
        }

        
 
    }

    public function like(){

        $user = Auth::user();
        
        $post = Post::where('_id', $this->id)->first();
        
        $like = $post->likes()->where('user_id', $user->id)->first();
        if($like){
            $like->delete();
            $post->likes -= 1;
            $post->save();
        }else{
            $post->likes()->create(['user_id' => $user->id]);
            $post->likes += 1;
            $post->save();
        }

        $this->post->refresh();
        
        
    }

    public function postComment(){

        $this->validate([
            'message' => 'required|string|max:255',
        ]);

        $user = Auth::user();

        $post = Post::where('_id', $this->id)->first();

        $post->comments()->create(['user_id'=> $user->id, 'message' => $this->message]);
        $post->comments += 1;
        $post->save();
        
        $this->message = '';

        // $comment =  $post->comments()->where('user_id', $user->id)->first();
        // if($comment){
        //     $comment->delete();
        //     $post->comments -= 1;
        //     $post->save();
        // }else{
        // }

        // $this->reset();
        // dd($this->comment);
    }

    public function render()
    {
        
        // $_id = $this->id;
        // $post = Post::where('_id', $_id)->first();
        // $post->views += 1;
        // $post->save();
        // ['post' => $post]

        $comments =  $this->post->comments()->latest()->get();//paginate($this->perPageComments);
        
        return view('livewire.stories.story-detail', ['comments' => $comments]);
    }
}
