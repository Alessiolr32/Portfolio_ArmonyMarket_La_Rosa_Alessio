<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
    * Register any application services.
    */
    public function register(): void
    {
        //
    }
    
    /**
    * Bootstrap any application services.
    */
    public function boot(): void
    {
        Paginator::useBootstrapFive();
        
        View::composer('*', function ($view) {
            $articlesToReviewCount = 0;
            
            if (Auth::check() && Auth::user()->is_revisor) {
                $articlesToReviewCount = Article::where('is_accepted', null)
                ->where('user_id', '!=', Auth::id())
                ->count();
            }
            
            $view->with('articlesToReviewCount', $articlesToReviewCount);
        });
        
        if (Schema::hasTable('categories')) {
            View::share('categories', Category::orderBy('name')->get());
        }
    }
}
