<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Tag;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        return view('admin.article.list');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $d = Tag::select('id', 'name')->get();
        $cat = Category::select('id','name', 'parent_id')->get()->toArray();
        return view('admin.article.add', compact('cat', 'd'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // condition
        $tag = Tag::select('name', 'slug')->get()->toArray();
        $tags = explode(',',$request->tags);
        $dem = 0;
        for($i=0;$i< count($tags);$i++){
            $data = array(
                'name' => $tags[$i],
                'slug' => str_slug($tags[$i])
            );
            $insertData[] = $data;
        }
        return $insertData;
        // $count_1 = count($tag);
        // $count_2 = count($insertData);
        
        // for($i=0; $i < $count_2; $i++){
        //     if(Tag::find($insertData[$i]['slug'])){
        //         echo "OK";
        //     }else{
        //         echo "Not found";
        //     }
        // }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.article.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
