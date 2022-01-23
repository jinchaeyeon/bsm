<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business', function (Blueprint $table) {
            $table->primary('id');
            $table->integer('id');
            $table->integer('contact_id')->nullable();
            $table->string('client', 45)->nullable();
            $table->string('name', 45)->nullable();
            $table->string('expected_sales', 45)->nullable();
            $table->string('expected_purchase', 45)->nullable();
            $table->string('expected_sales_profit', 45)->nullable();
            $table->string('expected_issue_month', 45)->nullable();
            $table->string('sales_person', 45)->nullable();
            $table->string('progress_rate', 45)->nullable();
            $table->string('pipeline_id', 45)->nullable();
            $table->string('progress', 45)->nullable();
            $table->dateTime('update_date', 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('business');
    }
}
