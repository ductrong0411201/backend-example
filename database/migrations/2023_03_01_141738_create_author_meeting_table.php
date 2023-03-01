<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorMeetingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('author_meeting', function (Blueprint $table) {
            $table->id();
            $table->integer('meeting_id');
            $table->foreign('meeting_id')->references('id')->on('meetings');
            $table->integer('author_id');
            $table->foreign('author_id')->references('id')->on('authors');
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
        Schema::dropIfExists('author_meeting');
        Schema::table('author_meeting', function (Blueprint $table) {
            $table->dropForeign('author_meeting_meeting_id_foreign');
            $table->dropForeign('author_meeting_author_id_foreign');
        });
    }
}
