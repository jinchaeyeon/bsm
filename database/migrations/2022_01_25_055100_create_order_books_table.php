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
            $table->integer('contract_number')->autoIncrement();
            $table->integer('estimate_id')->nullable();
            $table->string('department', 45)->nullable();
            $table->string('customer_name', 45)->nullable();
            $table->string('customer_categorize', 45)->nullable();
            $table->dateTime('issue_tax_bill', 0)->nullable();
            $table->string('manager', 45)->nullable();
            $table->string('m_business_num', 45)->nullable();
            $table->string('m_business_address', 45)->nullable();
            $table->string('m_phone', 45)->nullable();
            $table->string('m_mail', 45)->nullable();
            $table->dateTime('signing_date', 0)->nullable();
            $table->string('c_project_subject', 45)->nullable();
            $table->string('customer', 45)->nullable();
            $table->string('c_zip_code', 45)->nullable();
            $table->string('c_address', 45)->nullable();
            $table->string('c_manager', 45)->nullable();
            $table->string('c_phone', 45)->nullable();
            $table->string('c_mail', 45)->nullable();
            $table->string('c_business_num', 45)->nullable();
            $table->dateTime('contact_date', 0)->nullable();
            $table->string('c_e_project_subject', 45)->nullable();
            $table->string('e_customer', 45)->nullable();
            $table->string('c_e_zip_code', 45)->nullable();
            $table->string('c_e_address', 45)->nullable();
            $table->string('c_e_manager', 45)->nullable();
            $table->string('c_e_phone', 45)->nullable();
            $table->string('c_e_mail', 45)->nullable();
            $table->string('c_e_business_num', 45)->nullable();
            $table->dateTime('e_contact_date', 0)->nullable();
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
        Schema::dropIfExists('order_books');
    }
}
