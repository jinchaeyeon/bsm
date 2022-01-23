<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_contact', function (Blueprint $table) {
            $table->primary('company_register_number');
            $table->integer('company_register_number');
            $table->string('company_name', 45)->nullable();
            $table->string('ceo_name', 45)->nullable();
            $table->string('address', 45)->nullable();
            $table->string('note', 80)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('business_contact');
    }
}
