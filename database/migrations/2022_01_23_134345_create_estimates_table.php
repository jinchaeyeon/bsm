<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstimatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estimates', function (Blueprint $table) {
            $table->primary('id');
            $table->integer('id');
            $table->integer('contact_id')->nullable();
            $table->string('client', 45)->nullable();
            $table->string('name', 45)->nullable();
            $table->dateTime('create_date', 0)->nullable();
            $table->dateTime('update_date', 0)->nullable();
            $table->string('sales_person', 45)->nullable();
            $table->string('type', 45)->nullable();
            $table->string('amount', 45)->nullable();
            $table->integer('discount_rate')->nullable();
            $table->string('general', 45)->nullable();
            $table->string('order_state', 45)->nullable();
            $table->string('end_user', 45)->nullable();
            $table->string('note', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estimates');
    }
}
