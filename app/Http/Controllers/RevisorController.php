<?php

namespace App\Http\Controllers;

use id;
use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function index()
    {
        $article_to_check = Article::where('is_accepted', null) 
        ->where('user_id', '!=', Auth::id())            
        ->latest()
        ->paginate(8);
        return view('revisor.index', compact('article_to_check'));
    }
    
    public function accept(Article $article)
    {
        $article->setAccepted(true);
        return redirect()->route('revisor.index')->with('success', __('ui.article_accepted'));
    }
    
    public function reject(Article $article)
    {
        $article->setAccepted(false);
        return redirect()->route('revisor.index')->with('success', __('ui.article_rejected'));
    }
    public function show(Article $article)
    {
        return view('revisor.show', compact('article'));
    }
    
    public function make ($email)
    {
        Artisan::call('user:make-revisor', ['email' => $email]);

        return redirect()->route('home')->with('success', __('ui.accept_revisor', ['email' => $email]));
    }
}
