<?php

namespace App\Http\Middleware;

use Closure;
use App\Client;
use Illuminate\Http\Request;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $request->client = Client::loginOrFail($request->client, $request->header('x-api-key'));

        return $next($request);
    }
}
