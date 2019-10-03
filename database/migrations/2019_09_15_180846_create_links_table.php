<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('organization_id');
            $table->string('url');
            $table->integer('click_count')->default(0);
            $table->string('type')->default('website');
            $table->timestamps();

            $table->index('url');
            $table->foreign('organization_id')->references('id')->on('organizations');
            $table->unique(['organization_id', 'type', 'url']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('links');
    }
}
