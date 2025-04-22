<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class LimitStoryViews
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // $user = Auth::user();
         // Skip if subscribed
         if (auth()->check() && auth()->user()->is_subscribed) {
            return $next($request);
        }

        //   // Capture details
        //   $ip = $request->ip();
        //   $userAgent = substr($request->userAgent(), 0, 100);
        //   $cookieId = $request->cookie('visitor_token') ?? (string) Str::uuid();
  
        //   // Set persistent cookie (if missing)
        //   if (!$request->cookie('visitor_token')) {
        //       Cookie::queue('visitor_token', $cookieId, 43200); // 30 days
        //   }
  
        //   // Build composite device identifier (stronger fingerprinting)
        //   $deviceHash = sha1($ip . '|' . $userAgent . '|' . $cookieId);
  
        //   // Track using Laravel Cache
        //   $cacheKey = "story_views_{$deviceHash}";
  
        //   $views = Cache::get($cacheKey, [
        //       'count' => 0,
        //       'reset_at' => now()->addDays(30)
        //   ]);
  
        //   // Auto reset count after 30 days
        //   if (now()->greaterThan($views['reset_at'])) {
        //       $views = [
        //           'count' => 0,
        //           'reset_at' => now()->addDays(30)
        //       ];
        //   }
  
        //   // Block after 10 views
        //   if ($views['count'] >= 2) {
        //       return redirect()->route('subscribe');
        //   }
  
        //   // Increment and store
        //   $views['count'] += 1;
        //   Cache::put($cacheKey, $views, $views['reset_at']);
  
        //   // Store in session for frontend notice
        //   session(['readCount' => $views['count']]);

          



        // $cookieId = $request->cookie('visitor_token') ?? Str::uuid();
        // $ip = request()->ip();
        // $device = substr(request()->userAgent(), 0, 50); // truncate long agents
        // $identifier = sha1($ip . '|' . $device ?? $cookieId);

       
        // // return [$ip, $device, $identifier];

        // $views = Cache::get("story_views_{$identifier}", [
        //     'count' => 0,
        //     'reset_at' => now()->addDays(30)
        // ]);

        //   // Reset count if date expired
        //   if (now()->greaterThan($views['reset_at'])) {
        //     $views = ['count' => 0, 'reset_at' => now()->addDays(30)];
        // }

        // // If user exceeds limit
        // if ($views['count'] >= 2) {
        //     return response()->view('stories.limit_reached');
        // }

        // // Increment and update cache
        // $views['count'] += 1;
        // Cache::put("story_views_{$identifier}", $views, $views['reset_at']);


        return $next($request);
    }
}
