<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = 'comments';
    public function aritcle(){
        return $this->belongsTo('App\Article', 'article_id', 'id');
    }
}
