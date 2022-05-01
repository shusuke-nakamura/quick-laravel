<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LogMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $access_log_file =  dirname(dirname(dirname(dirname(__FILE__)))) . "/storage/logs/access.log";
        file_put_contents($access_log_file, date('Y-m-d H:i:s') . "\n", FILE_APPEND);
        // $request->merge([
        //     'title' => '速習Laravel',
        //     'author' => 'YAMADA, Yoshihiro'
        // ]);

        return $next($request);
    }
}
