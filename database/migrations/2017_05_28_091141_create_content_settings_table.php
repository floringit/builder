<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_settings', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('user_id');
            $table->index('user_id', 'content_s_users_csuid_index');

            $table->unsignedInteger('content_id');
            $table->index('content_id', 'content_s_contents_cscid_index');

            $table->string('name', 155);
            $table->text('value');
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
        Schema::dropIfExists('content_settings');
    }
}
