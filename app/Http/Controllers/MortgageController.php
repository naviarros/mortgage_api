<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MortgageModel;

class MortgageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mortgage_loan_lists = MortgageModel::all()->toArray();
        return view('partials.index', compact("mortgage_loan_lists"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mortgage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'loan_amount' => 'required|numeric',
            'interest_rate' => 'required|numeric',
            'loan_term' => 'required|integer',
            'payment_frequency' => 'required|string',
        ]);

        // Create a new MortgageLoan instance
        $mortgageLoan = new MortgageModel();

        $monthlyInterestRate = ($request->get('interest_rate') / 12) / 100;
        $numberOfMonths = $request->get('loan_term') * 12;
        $monthlyPayment = ($request->get('loan_amount') * $monthlyInterestRate) / (1 - pow(1 + $monthlyInterestRate, -$numberOfMonths));

        $mortgageLoan->loan_amount = $request->input('loan_amount') ;
        $mortgageLoan->interest_rate = $request->input('interest_rate');
        $mortgageLoan->loan_term = $request->input('loan_term');
        $mortgageLoan->payment_frequency = $request->input('payment_frequency');
        $mortgageLoan->total_amount = $monthlyPayment;

        // Perform any necessary calculations (e.g., monthly_payment, total_payments, total_interest)

        // Save the mortgage loan data to the database
        $mortgageLoan->save();

        // Redirect the user to a success page or return a response
        // return redirect()->route('mortgage.index')->with('success', 'Mortgage loan data has been saved.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $deleteLoan = MortgageModel::find($id);
        $deleteLoan->delete();

        return response()->json([
            'success' => true,
            'message' => "Loan Deleted",
            'server_response' => 'ok'
        ])
    }
}
