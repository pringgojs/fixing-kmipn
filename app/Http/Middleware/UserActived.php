<?php

namespace App\Http\Middleware;

use Closure;

class UserActived
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      if (auth()->user()) {
        if (auth()->user()->is_activated == 0) {
          auth()->logout();
          return redirect()->to('/')->with('message', array(
            'title' => 'Oops!',
            'type' => 'danger',
            'msg' => 'You cannot login.',
          ));
        }
      }

      return $next($request);
    }
}
