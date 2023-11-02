<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MortgageModel extends Model
{
    // use HasFactory;
    protected $table = 'loan_amortization_schedule';

    protected $fillables = ["loan_amount", "interest_rate", "loan_term", "payment_frequency", "total_amount"];

    public $timestamps = false;
}
