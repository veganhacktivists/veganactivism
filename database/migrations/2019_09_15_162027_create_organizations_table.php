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
            $table->string('image_card_url');
            $table->string('image_full_url');
            $table->boolean('featured');

            /* fields only visible on the home page card */
            $table->text('call_to_action');
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
             * no links columns for now because we want to
             * try handling it through a one-to-many
             * relationship that can track link
             * clicks, icon names, etc.
             */

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
