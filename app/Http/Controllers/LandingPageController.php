<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Feedback;
use App\Models\Likes;
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
        dailyVisit('home_page');
        $posts = Post::orderBy('created_at', 'DESC')->paginate(12);
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
            'title' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'where_it_happen' => 'required|string|max:255',
            'age' => 'required|numeric|min:10|max:100',
            'gender' => 'required|in:Male,Female,Non-Binary',
            'category' => 'required|in:Straight,Gay,Bi-Sexual',
            // 'tags' => 'required|array|min:1',
            // 'tags.*' => 'string|max:50',
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
            'title' => $request->title, 
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

           
        }
        return back()->with('success', 'Your story was submitted successfully!');

    }

    public function viewStory($_id){

        $post = Post::where('_id', $_id)->first();
        if($post){

             // Capture details
            $ip = request()->ip();
            $userAgent = substr(request()->userAgent(), 0, 100);
            $cookieId = request()->cookie('visitor_token') ?? (string) Str::uuid();
    
            // Set persistent cookie (if missing)
            if (!request()->cookie('visitor_token')) {
                Cookie::queue('visitor_token', $cookieId, 172800); // 120 days
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
            if (count($views['stories_read']) >= 20) {
                return redirect()->route('subscribe');
            }
         
           

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

            $relatedStories = Post::where('category', $post->category)
            ->where('id', '!=', $post->id)
            ->whereHas('tags', function ($query) use ($post) {
                $query->whereIn('tags.id', $post->tags->pluck('id'));
            })
            // ->with('tags')
            ->limit(3)
            ->get();
            $comments = Comment::where('post_id', $post->id)
                       ->latest()
                       ->get();

            $metaTitle = $post->where_it_happen;
            // $keywords = $post->tags->pluck('name')->toArray();
            // $keywordsArray = implode(', ', $keywords);
            return view('view_story', ['post' => $post, 'relatedStories' => $relatedStories, 'metaTitle' => $metaTitle, 'deviceHash' => $deviceHash, 'comments' => $comments]);

        }else{
            //future update: an error message should me sent to me
            abort(404);
        }
         
    }

    public function subscribe(){

        return view('subscribe');
    }

    public function toggleLike(Request $request)
    {
       
        $hash = $request->hash;
        $storyId = $request->story_id;

        $post = Post::where('id', $storyId)->first();
    
         $like = Likes::where('hash', $hash)->where('post_id', $storyId)->first();

        if ($like) {
            $like->delete();
            $post->likes -= 1;
            $post->save();
            return response()->json(['liked' => false, 'likes' => $post->likes]);
        } else {
            Likes::create(['user_id' => 1, 'hash' => $hash, 'post_id' => $storyId]);
            $post->likes += 1;
            $post->save();
            return response()->json(['liked' => true, 'likes' => $post->likes]);

            // Likes::where('post_id', $storyId)->count()
        }
    }

     public function postComment(Request $request)
    {
        $validated = $request->validate([
            'story_id' => 'required|exists:posts,id',
            'content' => 'required|string|max:1000',
            'hash' => 'required|string',
        ]);

         [$validated['content'], $validated['story_id']];

        $comment = Comment::create([
            'post_id' => $validated['story_id'],
            'user_id' => 1,
            'message' => $validated['content'],
            'hash' => $validated['hash']
        ]);

        return response()->json([
            'username' => 'Anonymous',//$comment->user->name,
            'message' => $comment->message,
            'timestamp' => $comment->created_at->format('F j, Y \a\t g:i A')
        ]);
    }



    public function feedback(){
        return  view('feedback');
    }

    public function storeFeedback(Request $request){
        $validated = $request->validate([
        'content' => 'required|string|max:1000',
        'sentiment' => 'required|in:happy,neutral,sad',
       
    ]);
    

        Feedback::create($validated);

        return back()->with('success', 'Thank you for your feedback!');
    }
}
