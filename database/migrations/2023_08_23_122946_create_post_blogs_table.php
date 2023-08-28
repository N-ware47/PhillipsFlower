<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_blogs', function (Blueprint $table) {
            $table->id();
            $table->string('blog_id')->nullable();
            $table->string('blog_title')->nullable();
            $table->text('blog_description')->nullable();
            $table->string('feature_image')->nullable();
            $table->string('blog_category')->nullable();
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
        Schema::dropIfExists('post_blogs');
    }
}
