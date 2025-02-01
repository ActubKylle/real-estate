<?php  

namespace App\Http;  

use Illuminate\Foundation\Http\Kernel as HttpKernel;  
use App\Http\Middleware\Authenticate;  
use App\Http\Middleware\Role;  // Ensure that this line matches your file structure  

class Kernel extends HttpKernel  
{  
    protected $middleware = [  
        // Global middleware  
    ];  

    protected $routeMiddleware = [  
        'auth' => Authenticate::class,  
        'role' => Role::class, // Make sure this line exists  
        // Other middleware...  
    ];  
}