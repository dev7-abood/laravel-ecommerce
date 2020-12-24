<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductPropertyValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_property_values', function (Blueprint $table) {
            $table->id();

            $table->string('value');

            $table->unsignedBigInteger('p_p_name_id')->index()->nullable();
            $table->foreign('p_p_name_id')->references('id')
                ->on('product_property_names')
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
        Schema::dropIfExists('product_property_values');
    }
}
