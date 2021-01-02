<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_ratings', function (Blueprint $table) {
            $table->id();

            $table->enum('rating', [1,2,3,4,5]);

            $table->unsignedBigInteger('product_id')->index();
            $table->foreign('product_id')->references('id')
                ->on('products')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->unsignedBigInteger('user_id')->index();
            $table->foreign('user_id')->references('id')
                ->on('users')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

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
        Schema::dropIfExists('product_ratings');
    }
}
