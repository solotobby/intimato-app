<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPost(){
        $tagList = Tag::all();
        return view('components.layouts.resources.posts.create', ['tagList' => $tagList]);
    }

    public function storePost(Request $request){
        // return $request;

        $request->validate([
            'title' => 'title|string|max:255',
            'email' => 'nullable|email|max:255',
            'where_it_happen' => 'required|string|max:255',
            'age' => 'required|numeric|min:10|max:100',
            'gender' => 'required|in:Male,Female,Non-Binary',
            'category' => 'required|in:Straight,Gay,Bi-Sexual',
            'tags' => 'required|array|min:1',
            'tags.*' => 'string|max:50',
            'rating' => 'required|in:1,2,3,4,5',
            'story' => 'required|string|min:10',
            // 'ans' => 'required|numeric',
            // 'terms' => 'accepted',
        ]);

        
        $posted = Post::create([
            'user_id' => auth()->user()->id,
            '_id' => rand(999,99999),
            'title' => $request->title,
            'where_it_happen' => $request->where_it_happen, 
            'age' => $request->age, 
            'rating' => $request->rating, 
            'category' => $request->category, 
            'gender' => $request->gender, 
            'story' => $request->story
        ]);

         if($posted){

            foreach($request->tags as $tag){
                PostTag::create(['tag_id' =>$tag, 'post_id' => $posted->id ]);
            }

           
        }

        return back()->with('success', 'Your story was submitted successfully!');


    }
}
