<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleAuthorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_author', function (Blueprint $table) {
            $table->id();
            $table->integer('author_id');
            $table->foreign('author_id')->references('id')->on('authors');
            $table->integer('article_id');
            $table->foreign('article_id')->references('id')->on('articles');
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
        Schema::dropIfExists('article_author');
        Schema::table('article_author', function (Blueprint $table) {
            $table->dropForeign('article_author_author_id_foreign');
            $table->dropForeign('article_author_article_id_foreign');
        });
    }
}
