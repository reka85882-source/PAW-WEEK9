<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
       if (!$request->user()) {
        return redirect()->route('login');
       }

       $rolePengguna = $request->user()->role;

       if (!in_array($rolePengguna, $roles)) {
        abort(403, 'Anda Tidak Memiliki Hak Akses!!');
       }

       return $next($request);
    }
}
