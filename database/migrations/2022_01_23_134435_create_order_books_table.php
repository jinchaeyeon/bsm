<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_books', function (Blueprint $table) {
            $table->primary('id');
            $table->integer('id');
            $table->string('estimate_id', 45)->nullable();
            $table->string('salse_perton', 45)->nullable();
            $table->string('end_user', 45)->nullable();
            $table->dateTime('create_date', 0)->nullable();
            $table->dateTime('update_date', 0)->nullable();
            $table->string('author', 45)->nullable();
            $table->string('order_bookscol', 45)->nullable();
            $table->string('order_num', 45)->nullable();
            $table->dateTime('contract_start_date', 0)->nullable();
            $table->dateTime('contract_end_date', 0)->nullable();
            $table->string('win_rate', 45)->nullable();
            $table->integer('funnel_amount')->nullable();
            $table->string('vendor_name', 45)->nullable();
            $table->string('business_classification', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_books');
    }
}
