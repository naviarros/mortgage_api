<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMortgageLoan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mortgage_loan', function (Blueprint $table) {
            $table->id();
            $table->decimal('loan_amount', 10, 2); // Adjust precision and scale as needed
            $table->decimal('interest_rate', 5, 2); // Adjust precision and scale as needed
            $table->integer('loan_term'); // The number of years
            $table->string('payment_frequency');
            $table->decimal('monthly_payment', 10, 2); // Adjust precision and scale as needed
            $table->decimal('total_payments', 10, 2); // Adjust precision and scale as needed
            $table->decimal('total_interest', 10, 2); // Adjust precision and scale as needed
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
        Schema::dropIfExists('mortgage_loan');
    }
}
