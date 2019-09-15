<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->bigIncrements('id');

            /* fields visible everywhere */
            $table->string('slug')->index();
            $table->string('title');
            $table->string('image_url');
            $table->string('website');

            /* fields only visible on the home page card */
            $table->text('card_content');

            /*
             * The two fields below are content that org admins
             * would create to display on their page. They will
             * be in paragraphs, but Laravel is flexible about
             * allowing this for 'text' columns, which can
             * be in arrays that we as developers transform
             * into bulleted paragraphs in the templates
             */
            $table->text('about');
            $table->text('activism');

            /*
             * social link fields (minus website,
             * which is above). "get involved".
             * These vary between organizations,
             * so I made them all optional.
             */
            $table->string('volunteer_link')->nullable();
            $table->string('events_link')->nullable();
            $table->string('announcements_link')->nullable();
            $table->string('facebook')->nullable();
            $table->string('contact')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('organizations');
    }
}
