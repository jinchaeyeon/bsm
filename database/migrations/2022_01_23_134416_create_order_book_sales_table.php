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
            $table->primary('id');
            $table->integer('id');
            $table->integer('order_book_id')->nullable();
            $table->integer('item_id')->nullable();
            $table->string('sales_date', 45)->nullable();
            $table->string('sales_amount', 45)->nullable();
            $table->string('purchase_amount', 45)->nullable();
            $table->string('supplier', 45)->nullable();
            $table->dateTime('collected_date', 0)->nullable();
            $table->string('collected_state', 45)->nullable();
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
