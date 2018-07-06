<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('catelog_id');
            $table->string('name');
            $table->text('info')->nullable();
            $table->text('meta')->nullable();
            $table->decimal('price',20,2)->unique();
            $table->decimal('discount',20,2)->nullable();
            $table->string('img_link')->nullable();
            $table->text('img_list')->nullable();
            $table->string('video_link')->nullable();
            $table->text('video_list')->nullable();
            $table->bigInteger('author_id')->nullable();
            $table->bigInteger('editor_id')->nullable();
            $table->bigInteger('approver_id')->nullable();
            $table->tinyInteger('buyed');
            $table->bigInteger('view');
            $table->tinyInteger('rate');
            $table->bigInteger('status');
            $table->rememberToken();
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
        Schema::dropIfExists('products');
    }
}
