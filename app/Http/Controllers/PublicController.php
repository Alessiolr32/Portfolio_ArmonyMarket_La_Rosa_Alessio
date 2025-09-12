<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage()
    {
        $category = Category::all();
        $user = User::all();
        
        $articles = Article::where('is_accepted', true)
        ->orderBy('created_at', 'desc')
        ->take(4)
        ->get();
        return view('welcome', compact('articles', 'user', 'category'));
    }
    
    public function searchArticles(Request $request)
    {
        $query = $request->input('query');
        
        if (strlen($query) < 1) {
            return redirect()->back()->with('error', __('ui.search_error'));
        }
        
        $articles = Article::where('is_accepted', true)
        ->where(function ($f) use ($query) {
            $f->where('title', 'like', "%{$query}%")
            ->orWhere('description', 'like', "%{$query}%")
            ->orWhereHas('user', function ($n) use ($query) {
                $n->where('name', 'like', "%{$query}%");
            });
        })
        ->orderBy('title', 'asc')
        ->paginate(8)
        ->appends(['query' => $query]);
        
        return view('articles.searched', [
            'articles' => $articles,
            'query' => $query
        ]);
    }
    
    public function setLanguage($lang) {
        session()->put('locale', $lang);
        return redirect()->back();
    }
}
