<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoanCalculatorTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_loan_calculation_endpoint()
    {
        $data = [
            'loan_amount' => 100000, // Loan principal
            'annual_interest_rate' => 5.0, // Annual interest rate
            'loan_term' => 10, // Loan term in years
        ];

        $response = $this->post('/api/calculate-loan', $data);

        $response->assertStatus(200)
            ->assertJson([
                'monthly_payment' => 1051.28, // Adjust with your expected result
                'total_payments' => 126153.6, // Adjust with your expected result
                'total_interest' => 26153.6, // Adjust with your expected result
            ]);
    }
}
