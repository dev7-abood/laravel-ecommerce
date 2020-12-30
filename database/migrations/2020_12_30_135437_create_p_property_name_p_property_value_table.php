<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePPropertyNamePPropertyValueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_property_name_p_property_value', function (Blueprint $table) {
            $table->id();


            $table->unsignedBigInteger('p_property_name_id')->index();
            $table->foreign('p_property_name_id')->references('id')
                ->on('product_property_names')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();


            $table->unsignedBigInteger('p_property_value_id')->index();
            $table->foreign('p_property_value_id')->references('id')
                ->on('product_property_values')
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
        Schema::dropIfExists('p_property_name_p_property_value');
    }
}
