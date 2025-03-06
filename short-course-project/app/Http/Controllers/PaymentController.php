<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController
{
    public function processPayment(Request $request)
    {
        // Handle payment logic here (e.g., validation, database storage)
        return redirect(to: '/card')->with('success', 'Payment successful!');
    }
}
