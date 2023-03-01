<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEditorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('editors', function (Blueprint $table) {
            $table->id();
            $table->string('job_position')->nullable();
            $table->string('experience')->nullable();
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
        Schema::dropIfExists('editors');
        Schema::table('editors', function (Blueprint $table) {
            $table->dropForeign('editors_user_info_id_foreign');
        });
    }
}
