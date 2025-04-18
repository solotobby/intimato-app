<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function landingPage(){
        $posts = Post::all();
        return view('welcome', ['posts' => $posts]);
    }

    public function categories(){
        return view('features');
    }

    public function terms(){
        return view('terms');
    }

    public function about(){
        return view('about');
    }

    public function submitStory(){
        return view('submit');
    }

    public function  storeStory(Request $request) {

        Post::create([
            'user_id' => 1,
            '_id' => rand(999,99999),
            'where_it_happen' => $request->where_it_happen, 
            'age' => $request->age, 
            'rating' => $request->rating, 
            'category' => $request->category, 
            'gender' => $request->gender, 
            'story' => $request->story
        ]);

        return 'ok';
    }

    public function viewStory($_id){
        $post = Post::where('_id', $_id)->first();
        $post->views =+ 1;
        $post->save();
        
        return view('view_story', ['post' => $post]);
    }
}
