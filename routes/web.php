<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\BlockRevisorWork;
use App\Http\Controllers\PublicController;
use App\Http\Middleware\RevisorMiddleware;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\WorkWithUsController;
use App\Http\Middleware\BlockOwnArticles;

//Rotte pubbliche e Lingue
Route::controller(PublicController::class)->group(function () {
    Route::get('/', 'homepage')->name('home');
    Route::get('/search/article', 'searchArticles')->name('article.search');
    Route::get('/lingua/{lang}','setLanguage')->name('setLocale');
});

//Creazione Articoli
Route::middleware(['auth'])->group(function () {
    Route::controller(ArticleController::class)->group(function () {
        Route::get('/create/article', 'create')->name('create.article');
    });
});

//Rotte Articoli
Route::controller(ArticleController::class)->group(function () {
    Route::get('/article', 'index')->name('articles.index');
    Route::get('/article/{article}', 'show')->name('articles.show');
    Route::get('/category/{category}', 'byCategory')->name('articles.byCategory');
});

//Lavora con noi
Route::get('work-with-us', [WorkWithUsController::class, 'index'])->name('work.with.us')->middleware(['auth', BlockRevisorWork::class]);

//Revisore
Route::middleware(['auth', RevisorMiddleware::class, BlockOwnArticles::class]) 
->controller(RevisorController::class)
->prefix('revisor/articles')
->group(function () {
    Route::get('/', 'index')->name('revisor.index');
    Route::get('/detail/{article}', 'show')->name('revisor.show');
    Route::post('/{article}/accept', 'accept')->name('revisor.accept');
    Route::post('/{article}/reject', 'reject')->name('revisor.reject');
});

//Rendi Revisore
Route::get('/make-revisor/{email}', [RevisorController::class, 'make'])->name('make.revisor')->middleware(['auth']);
