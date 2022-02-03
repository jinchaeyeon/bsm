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
            $table->string('order_book_id')->nullable();
            $table->string('text_order')->nullable();
            $table->string('item_id')->nullable();
            $table->string('item')->nullable();
            $table->string('count')->nullable();
            $table->string('per_sales')->nullable();
            $table->string('sales')->nullable();
            $table->string('per_buy')->nullable();
            $table->string('buy')->nullable();
            $table->string('shop', 45)->nullable();
            $table->string('profit_sales')->nullable();
            $table->string('note', 45)->nullable();
            $table->string('information', 70)->nullable();
            $table->string('total_count', 45)->nullable();
            $table->string('total_sales', 45)->nullable();
            $table->string('total_buy', 45)->nullable();
            $table->string('total_profits', 45)->nullable();
            $table->dateTime('real_time_profit', 0)->nullable();
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
