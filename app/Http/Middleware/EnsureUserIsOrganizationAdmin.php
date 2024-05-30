<?php

namespace App\Http\Middleware;

use App\Models\CmeProgram;
use App\Models\OrganizationUser;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserIsOrganizationAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();
        $cmeProgramId = $request->route('cme');
       
        $cmeProgram = CMEProgram::findOrFail($cmeProgramId);

        if ($user->isSuperUser()) {
            return $next($request);
        }

        $isAdmin = OrganizationUser::where('user_id', $user->id)
            ->where('organization_id', $cmeProgram->organization_id)
          
            ->exists();
        if (!$isAdmin) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }
        return $next($request);
    }
}
