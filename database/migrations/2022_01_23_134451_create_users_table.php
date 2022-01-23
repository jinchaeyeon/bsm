<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->primary('id');
            $table->string('id', 20);
            $table->integer('contact_id')->nullable();
            $table->string('password', 45)->nullable();
            $table->string('manager_name', 45)->nullable();
            $table->string('rank', 45)->nullable();
            $table->string('division', 45)->nullable();
            $table->string('email', 45)->nullable();
            $table->string('contact', 45)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
