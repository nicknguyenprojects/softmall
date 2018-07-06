<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('category_id');
            $table->string('name');
            $table->text('info')->nullable();            
            $table->text('meta')->nullable();
            $table->text('img_link')->nullable();
            $table->text('img_list')->nullable();
            $table->bigInteger('author_id')->nullable();
            $table->bigInteger('editor_id')->nullable();
            $table->bigInteger('approver_id')->nullable();
            $table->bigInteger('view');
            $table->tinyInteger('rate');
            $table->bigInteger('status');
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
        Schema::dropIfExists('posts');
    }
}
