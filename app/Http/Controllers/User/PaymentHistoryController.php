<?php

namespace App\Http\Controllers\User;
use Illuminate\Routing\Controller;

use Illuminate\Http\Request;

class PaymentHistoryController extends Controller
{
    public function index()
    {
        // Example static data (replace with DB query later)
        $payments = [
           
        ];

        return view('user.payment-history', compact('payments'));
    }
}
