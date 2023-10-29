<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mortgage Loan Calculator - Loan Data</title>
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Mortgage Loan Calculator - Loan Data</h1>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Loan Amount</th>
                    <th>Interest Rate (%)</th>
                    <th>Loan Term (years)</th>
                    <th>Payment Frequency</th>
                    <th>Property Tax</th>
                    <th>Home Insurance</th>
                    <th>Monthly Payment</th>
                    <th>Total Payments</th>
                    <th>Total Interest</th>
                </tr>
            </thead>
            <tbody>
                @foreach($loans as $loan)
                    <tr>
                        <td>{{ $loan->loan_amount }}</td>
                        <td>{{ $loan->interest_rate }}</td>
                        <td>{{ $loan->loan_term }}</td>
                        <td>{{ $loan->payment_frequency }}</td>
                        <td>{{ $loan->property_tax }}</td>
                        <td>{{ $loan->home_insurance }}</td>
                        <td>{{ $loan->monthly_payment }}</td>
                        <td>{{ $loan->total_payments }}</td>
                        <td>{{ $loan->total_interest }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
