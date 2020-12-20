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
            $table->string('slug');
            $table->text('desc');


            $table->integer('price');
            $table->integer('discount');
            $table->integer('quantity');

            $table->unsignedBigInteger('brand_id')->index();
            $table->foreign('brand_id')->references('id')
                ->on('brands')
                ->cascadeOnUpdate();

            $table->unsignedBigInteger('property_id')->index();
            $table->foreign('property_id')->references('id')
                ->on('product_properties')
                ->cascadeOnUpdate();

            $table->unsignedBigInteger('tax_id')->index();
            $table->foreign('tax_id')->references('id')
                ->on('taxes')
                ->cascadeOnUpdate();

            $table->string('video')->nullable();

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