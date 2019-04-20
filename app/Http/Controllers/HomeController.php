<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Comment;
use App\User;
use App\Category;
use App\Tag;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function dashboard(){
        $articles = Article::all();
        $article_count = $articles->count();
        $cmts = Comment::all(); 
        $cmt_count =  $cmts->count();
        $users = User::all();
        $user_count =  $users->count();
        return view('admin.layouts.index', compact('article_count', 'cmt_count', 'user_count'));
    }
    // call category 

    public function category(Request $request, $slug){
        $cat_name = Category::where('slug', $slug)->get();
        foreach($cat_name as $c){
            $id = $c->id;
        }
        $parent_cat = Category::where('parent_id', $id)->get();
        return view('front-end.categories', compact('cat_name', 'parent_cat'));
    }
    // get tag 
    public function tag($slug){

        $tag = Tag::orderBy('created_at', 'desc')->paginate(7);
        return view('front-end.article_tag', compact($tag));
    }
}
