@extends("layouts.app")

@section("content")
<div class="container">
    <h1 class="mt-4">Mortgage Loan Calculator - Loan Data</h1>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Loan Amount</th>
                <th>Interest Rate (%)</th>
                <th>Loan Term (years)</th>
                <th>Payment Frequency</th>
                <th>Total Amount</th>
                <th>Date Created</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mortgage_loan_lists as $loan)
                <tr>
                    <td>{{ $loan['loan_amount'] }}</td>
                    <td>{{ $loan['interest_rate'] }}</td>
                    <td>{{ $loan['loan_term'] }}</td>
                    <td>{{ $loan['payment_frequency'] }}</td>
                    <td>{{ $loan['total_amount'] }}</td>
                    <td>{{ $loan['date_created'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
