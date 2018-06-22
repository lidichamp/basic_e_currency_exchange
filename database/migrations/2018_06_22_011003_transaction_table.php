<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type',['buy','sell']);
            $table->integer('user_id');
            $table->integer('amount');
            $table->integer('exchange_rate');
            $table->integer('amount_payable');
            $table->string('e_currency');
            $table->string('bank');
            $table->string('bank_details');
            $table->enum('status',['paid','pending','cancelled']);
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
        Schema::dropIfExists('transactions');
    }
}
