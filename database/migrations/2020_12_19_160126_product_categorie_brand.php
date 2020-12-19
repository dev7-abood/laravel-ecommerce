<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductCategorieBrand extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_categorie_brand', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('product_categorie_id')->index();
            $table->foreign('product_categorie_id')->references('id')
                ->on('product_categories')
                ->cascadeOnUpdate();

            $table->unsignedBigInteger('brand_id')->index();
            $table->foreign('brand_id')->references('id')
                ->on('brands')
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
        Schema::dropIfExists('product_categorie_brand');
    }
}
