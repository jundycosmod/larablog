<?php

namespace App\Http\Middleware;

use Closure;
use Lavary\Menu\Menu;

class MenuMiddleware
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
//        Menu::make('portfolioNav', function($menu) {
//            $menu->add('Home', '/');
//            $menu->add('Portfolio', '#portfolio');
//            $menu->add('About', '#about');
//            $menu->add('Contact', '#contact');
//        });

        return $next($request);
    }
}
