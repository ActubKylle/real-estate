<?php  

namespace App\Http\Middleware;  

use Closure;  
use Illuminate\Support\Facades\Auth;  
use Illuminate\Http\Request;  

class Authenticate  
{  
    /**  
     * Handle an incoming request.  
     *  
     * @param  \Illuminate\Http\Request  $request  
     * @param  \Closure  $next  
     * @param  string|null  ...$guards  
     * @return mixed  
     */  
    public function handle(Request $request, Closure $next, ...$guards)  
    {  
        // Check if the user is authenticated  
        if (!Auth::guard($guards)->check()) {  
            return redirect()->route('login'); // Redirect to login if not authenticated  
        }  

        return $next($request); // Continue processing the request  
    }  
}