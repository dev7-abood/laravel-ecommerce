<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_blogs', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('desc');


            $table->unsignedBigInteger('product_id')->index()->nullable();
            $table->foreign('product_id')->references('id')
                ->on('products')
                ->cascadeOnUpdate();

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
        Schema::dropIfExists('product_blogs');
    }
}
