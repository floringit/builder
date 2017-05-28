<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('user_id');
            $table->index('user_id', 'contents_users_cuid_index');

            $table->unsignedInteger('page_id');
            $table->index('page_id', 'contents_pages_cpid_index');

            $table->unsignedInteger('parent_id');
            $table->index('parent_id', 'contents_contents_ccid_index');

            $table->unsignedInteger('version_id');
            $table->index('version_id', 'contents_versions_cvid_index');

            $table->tinyInteger('type')->default(0);
            $table->tinyInteger('order')->default(0);
            $table->text('content');
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
        Schema::dropIfExists('contents');
    }
}
