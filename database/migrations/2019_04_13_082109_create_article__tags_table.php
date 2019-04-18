<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article__tags', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('article_id')->usigned();
            $table->foreign('article_id')->references('id')->on('articles');
            // link to  id articlees
            $table->tinyInteger('tag_id')->usigned();
            $table->foreign('tag_id')->references('id')->on('tags');
            // link to tag
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article__tags');
    }
}
