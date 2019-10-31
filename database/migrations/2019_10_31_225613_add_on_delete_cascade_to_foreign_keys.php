<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOnDeleteCascadeToForeignKeys extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('links', function (Blueprint $table) {
            $table->dropForeign(['organization_id']);

            $table->foreign('organization_id')->references('id')->on('organizations')->onDelete('CASCADE');
        });

        Schema::table('organization_user', function (Blueprint $table) {
            $table->dropForeign(['organization_id', 'user_id']);

            $table->foreign('organization_id')->references('id')->on('organizations')->onDelete('CASCADE');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
        });

        Schema::table('youtube_videos', function (Blueprint $table) {
            $table->dropForeign(['organization_id']);

            $table->foreign('organization_id')->references('id')->on('organizations')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('links', function (Blueprint $table) {
            $table->dropForeign(['organization_id']);

            $table->foreign('organization_id')->references('id')->on('organizations');
        });

        Schema::table('organization_user', function (Blueprint $table) {
            $table->dropForeign(['organization_id', 'user_id']);

            $table->foreign('organization_id')->references('id')->on('organizations');
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('youtube_videos', function (Blueprint $table) {
            $table->dropForeign(['organization_id']);

            $table->foreign('organization_id')->references('id')->on('organizations');
        });
    }
}
