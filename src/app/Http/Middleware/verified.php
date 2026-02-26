<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class verified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();
        if ($user->role == 'user') {
            $membership = $user->memberships()->where('is_approved', false)->first();
            if ($membership && $membership->role == 'owner') {
                return redirect()->route('dashboardOwner');
            }
            elseif ($membership && $membership->role == 'member') {
                return redirect()->route('dashboardUser');
            } else {
                return $next($request);
            }
        } else {
            return redirect()->route('dashboardAdmin');
        }
    }
}
