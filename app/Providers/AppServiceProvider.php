<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Category;
use App\Tag;
use App\Article;
use Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
    
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $new_post = Article::select('slug','name','user_id', 'cat_id','views')->orderBy('id', 'desc')->take(3)->get();
        $new_hot = Article::orderBy('views', 'desc')->take(5)->get();
        $tag = Tag::all();
        $cat = Category::all();
        View::share('cat', $cat);
        View::share('tag', $tag);
        View::share('new_post', $new_post);
        View::share('new_hot', $new_hot);
        
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
    
}
