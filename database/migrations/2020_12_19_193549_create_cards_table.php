<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();

            $table->decimal('pay');
            $table->string('product_name');

            $table->decimal('total_price');

            $table->integer('quantity')->default(1);
            $table->json('properties');
            $table->string('image')->nullable();

            $table->decimal('discount_percent')->nullable();
            $table->string('tax_val_percent')->nullable();
            $table->string('value_added_tax')->nullable();
            $table->string('vat_after_discount')->nullable();

            $table->boolean('is_published')->default(true);

            $table->unsignedBigInteger('product_id')->index()->nullable();
            $table->foreign('product_id')->references('id')
                ->on('products')
                ->cascadeOnUpdate();

            $table->unsignedBigInteger('user_id')->index();
            $table->foreign('user_id')->references('id')
                ->on('users')
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
        Schema::dropIfExists('cards');
    }
}
