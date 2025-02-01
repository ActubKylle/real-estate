<?php  

namespace App\Http\Middleware;  

use Closure;  
use Illuminate\Http\Request;  
use Illuminate\Support\Facades\Auth;  

class Role  
{  
    public function handle(Request $request, Closure $next, string $role)  
    {  
        if (!Auth::check() || Auth::user()->role !== $role) {  
            // Redirect or throw an error if the user is not authorized  
            return redirect('/'); // or any appropriate response  
        }  

        return $next($request); // Allow access  
    }  
}