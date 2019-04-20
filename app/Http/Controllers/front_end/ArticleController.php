<?php

namespace App\Http\Controllers\front_end;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
class ArticleController extends Controller
{
    
    public function index(){
        
        $ar = Article::select('title','slug','image','description', 'user_id', 'cat_id', 'views')->paginate(5);
        return view('front-end.home', compact('ar'));
    }
}
