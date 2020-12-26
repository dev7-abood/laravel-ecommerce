<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->string('first_name');
            $table->string('last_name');

            $table->string('phone');
            $table->string('email')->nullable();

            $table->decimal('total_price');

            $table->string('zip')->nullable();
            $table->string('location');

            $table->string('payment_method');
            $table->enum('status', ['panning', 'finished']);

            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();

            $table->text('note')->nullable();

            $table->unsignedBigInteger('card_id')->index();
            $table->foreign('card_id')->references('id')
                ->on('cards')
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
        Schema::dropIfExists('orders');
    }
}
