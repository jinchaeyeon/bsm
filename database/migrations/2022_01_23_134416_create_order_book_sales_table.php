<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderBookSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_book_sales', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->integer('order_book_id')->nullable();
            $table->integer('item_id')->nullable();
            $table->string('item')->nullable();
            $table->integer('count')->nullable();
            $table->integer('per_sales')->nullable();
            $table->integer('total_sales')->nullable();
            $table->integer('per_buy')->nullable();
            $table->integer('total_buy')->nullable();
            $table->string('shop', 45)->nullable();
            $table->integer('profit_sales')->nullable();
            $table->string('note', 45)->nullable();
            $table->string('information', 70)->nullable();
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
        Schema::dropIfExists('order_book_sales');
    }
}
