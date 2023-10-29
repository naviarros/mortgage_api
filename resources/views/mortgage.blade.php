@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Mortgage Loan Calculator</h2>
        <form action="{{ route('mortgage.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="loan-amount">Loan Amount:</label>
                <input type="number" name="loan_amount" id="loan-amount" class="form-control" placeholder="Enter loan amount" required>
            </div>

            <div class="form-group">
                <label for="interest-rate">Interest Rate (%):</label>
                <input type="number" name="interest_rate" id="interest-rate" class="form-control" placeholder="Enter interest rate" step="0.01" required>
            </div>

            <div class="form-group">
                <label for="loan-term">Loan Term (years):</label>
                <input type="number" name="loan_term" id="loan-term" class="form-control" placeholder="Enter loan term in years" required>
            </div>

            <div class="form-group">
                <label for="payment-frequency">Payment Frequency:</label>
                <select name="payment_frequency" id="payment-frequency" class="form-control" required>
                    <option value="monthly" selected>Monthly</option>
                    <!-- Add other frequency options as needed -->
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Calculate</button>
        </form>
    </div>
@endsection
