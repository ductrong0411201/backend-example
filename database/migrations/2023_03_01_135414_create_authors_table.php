<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->id();
            $table->string('academic_rank');
            $table->string('degree')->nullable();
            $table->string('office')->nullable();
            $table->integer("user_info_id");
            $table->foreign('user_info_id')->references('id')->on('user_information');
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
        Schema::dropIfExists('authors');
        Schema::table('authors', function (Blueprint $table) {
            $table->dropForeign('authors_user_info_id_foreign');
        });
    }
}
