<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class AutocompleteController extends Controller
{
    //for create controller - php artisan make:controller AutocompleteController

    function index()
    {
     return view('autocomplete');
    }

    function fetch(Request $request)
    {
        if($request->get('query'))
        {
            $query = $request->get('query');
            $data =Article::where('slug', 'LIKE', "%{$query}%")->take(5)->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
                foreach($data as $row)
                {
                    $output .= '
                    <li><a href="/post/'.$row->category->slug.'/'. $row->slug .'"> <i class="fa fa-microphone pr-2" ></i>'.$row->title.'</a></li>
                    ';
                }
                $output .= '</ul>';
            $output .= '</ul>';
            echo $output;
        }
        //
    }

}
