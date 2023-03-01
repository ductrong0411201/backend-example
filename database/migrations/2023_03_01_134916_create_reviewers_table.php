<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviewers', function (Blueprint $table) {
            $table->id();
            $table->string('academic_rank');
            $table->string('degree');
            $table->string('office')->nullable();
            $table->boolean('confirmed')->default(false);
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
        Schema::dropIfExists('reviewers');
        Schema::table('reviewers', function (Blueprint $table) {
            $table->dropForeign('reviewers_user_info_id_foreign');
        });
    }
}
