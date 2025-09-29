<?php

namespace App\Http\Controllers\User;
use Illuminate\Http\Request;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class PaymentHistoryController extends Controller
{
   public function index()
{
    $userId = auth()->id();

    // Fetch conversions
    $conversions = \DB::table('conversions')
        ->where('user_id', $userId)
        ->select(
            'id',
            'from_crypto',
            'to_currency',
            'amount',
            'status',
            'created_at',
            \DB::raw("'Conversion' as type")
        )
        ->get();

    // Fetch withdrawals
    $withdrawals = \DB::table('withdrawals')
        ->where('user_id', $userId)
        ->select(
            'id',
            'amount',
            'bank_name',
            'account_name',
            'account_number',
            'swift_code',
            'narration',
            'status',
            'created_at',
            \DB::raw("'Withdrawal' as type")
        )
        ->get();

    // Merge and sort by date (latest first)
    $payments = $conversions->merge($withdrawals)->sortByDesc('created_at');

    return view('user.payment-history', compact('payments'));
}

}
