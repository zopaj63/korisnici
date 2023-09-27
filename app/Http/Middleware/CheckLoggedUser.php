<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckLoggedUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        /*
        //simuliramo autentifikaciju pa provjeravamo fiksnu varijablu, inače bi provjerili stanje usera!
        $isUserLogged=true; //korisnik je logiran:)
        if (!$isUserLogged)
        {
            return redirect("/"); // ako nije logiran redirektamo na home page
        }
        
        return $next($request);
        */
    }
}
