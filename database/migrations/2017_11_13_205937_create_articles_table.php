<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image',255)->nullable();
            $table->string('title',255);
            $table->string('slug',255);
            $table->string('tagline',255)->nullable();
            $table->text('announce')->nullable();
            $table->text('fulltext')->nullable();
            $table->integer('views_count')->nullable()->default(0);
            $table->string('status',10)->default('OWNER');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
