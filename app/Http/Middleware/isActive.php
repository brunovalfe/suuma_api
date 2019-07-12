<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Log;
use Tymon\JWTAuth\JWTAuth;

class isActive
{

    protected $auth;

    public function __construct(JWTAuth $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        //  Let's assume I have the user ...
        $user = $this->auth->user();
        if ($user->isActive == 0) {
            throw new HttpResponseException(response()->json([
                "status" => "Error",
                "errorCode" => 401,
                "message" => "Usuario no activo"
            ], 200));
        }
        return $next($request);
    }
}
