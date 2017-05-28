<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('user_id');
            $table->index('user_id', 'pages_users_puid_index');

            $table->unsignedInteger('website_id');
            $table->index('website_id', 'pages_websites_pwid_index');

            $table->unsignedInteger('theme_id');
            $table->index('theme_id', 'pages_themes_ptid_index');

            $table->unsignedInteger('type_id');
            $table->index('type_id', 'pages_types_ptyid_index');

            $table->string('name', 155);
            $table->string('slug', 155);
            $table->tinyInteger('deleted')->default(0);

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
        Schema::dropIfExists('pages');
    }
}
