<?php

namespace App\Http\Middleware;

use Closure;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if ($role == 'juri') {
            return redirect('exp');
            if ($role != session('juri')) return redirect('juri/login');
            return $next($request);
        }

        if (auth()->user()->role == 'Ketua') {
            return redirect('/')->with('message', array(
              'title' => 'Yay!',
              'type' => 'success',
              'msg' => 'Login success.',
            ));
        }

        
        return $next($request);
    }
}
