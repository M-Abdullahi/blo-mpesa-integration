<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customers');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('transaction_type');
            $table->string('transaction_id');
            $table->string('transaction_time');
            $table->string('short_code');
            $table->string('invoice_number');
            $table->string('bill_ref_number');
            $table->string('third_party_trans_id');
            $table->string('msisdn');
            $table->float('amount'); // use int
            $table->float('org_account_balance');
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
