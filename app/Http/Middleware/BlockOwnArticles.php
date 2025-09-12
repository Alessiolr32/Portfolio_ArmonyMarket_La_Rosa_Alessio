<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class BlockOwnArticles
{
    /**
    * Handle an incoming request.
    *
    * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
    */
    public function handle(Request $request, Closure $next): Response
    {
        $article = $request->route('article'); 
        
        if ($article && $article->user_id === Auth::id()) {
            return redirect()->route('revisor.index')
            ->with('error', __('ui.cannot_review_own_articles'));
        }
        return $next($request);
    }
}
