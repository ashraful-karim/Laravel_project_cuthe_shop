<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_customer', function (Blueprint $table) {
            $table->increments('customer_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('mobile');
            $table->string('email_address');
            $table->string('password');
            $table->string('confirm_password');
            $table->string('address');
            $table->string('city'); 
            $table->string('division');
            $table->string('country');
            $table->string('zip');
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
        Schema::dropIfExists('tbl_customer');
    }
}
