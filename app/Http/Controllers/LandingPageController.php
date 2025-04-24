<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function landingPage(){
        $posts = Post::orderBy('created_at', 'DESC')->get();
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

    public function privacy(){
        return view('privacy');
    }

    public function submitStory(){
        $num1 = rand(1, 9);
        $num2 = rand(1, 9);

        $ans = $num1 + $num2;
        [$num1, $num2, $ans];

        session(['question' => "$num1 + $num2", 'ans' =>  $num1 + $num2]);

        $tags = Tag::all();
        return view('submit', ['tags' => $tags]);
    }

    public function  storeStory(Request $request) {

        $request->validate([
            'title' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'where_it_happen' => 'required|string|max:255',
            'age' => 'required|numeric|min:10|max:100',
            'gender' => 'required|in:Male,Female,Non-Binary',
            'category' => 'required|in:Straight,Gay,Bi-Sexual',
            'tags' => 'required|array|min:1',
            'tags.*' => 'string|max:50',
            'rating' => 'required|in:1,2,3,4,5',
            'story' => 'required|string|min:10',
            'ans' => 'required|numeric',
            // 'terms' => 'accepted',
        ]);

       

       if($request->ans != session('ans')){
            return back()->with('error', 'Oops! CAPTCHA answer is incorrect.')->withInput();
       }

       $posted = Post::create([
            'user_id' => 1,
            '_id' => rand(999,99999),
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

            return back()->with('success', 'Your story was submitted successfully!');
        }

    }

    public function viewStory($_id){

          // Capture details
          $ip = request()->ip();
          $userAgent = substr(request()->userAgent(), 0, 100);
          $cookieId = request()->cookie('visitor_token') ?? (string) Str::uuid();
  
          // Set persistent cookie (if missing)
          if (!request()->cookie('visitor_token')) {
              Cookie::queue('visitor_token', $cookieId, 43200); // 30 days
          }
  
          // Build composite device identifier (stronger fingerprinting)
          $deviceHash = sha1($ip . '|' . $userAgent . '|' . $cookieId);
  
          // Track using Laravel Cache
          $cacheKey = "story_views_{$deviceHash}";
  
          $views = Cache::get($cacheKey, [
             
              'reset_at' => now()->addDays(30),
              'stories_read' => []  // Array to hold story data
          ]);
  
          // Auto reset count after 30 days
          if (now()->greaterThan($views['reset_at'])) {
              $views = [
                  'reset_at' => now()->addDays(30),
                  'stories_read' => []  // Array to hold story data
              ];
          }
  
         
        // Redirect if more than 5 stories read
            if (count($views['stories_read']) >= 3) {
                return redirect()->route('subscribe');
            }
         
            $post = Post::where('_id', $_id)->first();

            // Avoid duplicates
            $alreadyRead = collect($views['stories_read'])->pluck('id')->contains($post->id);

            if (!$alreadyRead) {
                $views['stories_read'][] = [
                    'id' => $post->id,
                    '_id' => $post->_id,
                    'title' => $post->where_is_happen,
                ];
            }

            // Save it back
            Cache::put($cacheKey, $views, $views['reset_at']);


          // Store in session for frontend notice
          session(['readCount' => count($views['stories_read'])]);


       
        $post->views += 1;
        $post->save();
        
        return view('view_story', ['post' => $post]);
    }

    public function subscribe(){
        return view('subscribe');
    }
}
