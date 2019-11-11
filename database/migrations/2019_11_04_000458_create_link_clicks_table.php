<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinkClicksTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('link_clicks', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('link_id');
            $table->string('user_session_key');

            $table->foreign('link_id')->references('id')->on('links')->onDelete('CASCADE');

            $table->unique(['link_id', 'user_session_key']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */ m
    public function down()
    {
        Schema::dropIfExists('link_clicks');
    }
}
