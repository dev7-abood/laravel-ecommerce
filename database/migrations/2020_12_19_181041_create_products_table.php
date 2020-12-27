<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('slug')->unique();
            $table->text('desc');

            $table->decimal('price');
            $table->integer('discount')->nullable();
            $table->integer('quantity')->nullable();

            $table->boolean('new')->default(false)->nullable();


            $table->unsignedBigInteger('brand_id')->index();
            $table->foreign('brand_id')->references('id')
                ->on('brands')
                ->cascadeOnUpdate();


            $table->unsignedBigInteger('p_category_id')->index();
            $table->foreign('p_category_id')->references('id')
                ->on('product_categories')
                ->cascadeOnUpdate();

            $table->unsignedBigInteger('tax_id')->index()->nullable();
            $table->foreign('tax_id')->references('id')
                ->on('taxes')
                ->cascadeOnUpdate();

            $table->string('video')->nullable();
            $table->string('image')->nullable();

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
