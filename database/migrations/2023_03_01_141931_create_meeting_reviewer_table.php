<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetingReviewerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meeting_reviewer', function (Blueprint $table) {
            $table->id();
            $table->integer('meeting_id');
            $table->foreign('meeting_id')->references('id')->on('meetings');
            $table->integer('reviewer_id');
            $table->foreign('reviewer_id')->references('id')->on('reviewers');
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
        Schema::dropIfExists('meeting_reviewer');
        Schema::table('meeting_reviewer', function (Blueprint $table) {
            $table->dropForeign('meeting_reviewer_meeting_id_foreign');
            $table->dropForeign('meeting_reviewer_reviewer_id_foreign');
        });
    }
}
