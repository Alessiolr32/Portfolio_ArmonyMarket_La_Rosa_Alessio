<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::where('is_accepted', true)
        ->orderBy('created_at', 'desc')
        ->paginate(8);
        return view('articles.index', compact('articles'));
    }
    
    public function create()
    {
        return view('articles.create');
    }
    
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }
    
    public function byCategory(Category $category)
    {
        $articles = $category->articles()->latest()->paginate(8);
        $filterByCategory = true;
        $title = $category->name;
        return view('articles.index', compact('articles', 'category', 'title', 'filterByCategory'));
    }
}