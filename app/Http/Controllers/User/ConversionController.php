<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\Conversion;
use App\Models\Deposit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConversionController extends Controller
{


//    public function store(Request $request)
// {
//     $request->validate([
//         'fromCrypto' => 'required|string',
//         'toCurrency' => 'required|string',
//         'amount'     => 'required|numeric|min:0.01',
//     ]);

//     // Calculate 0.7% miner's fee
//     $minersFee = $request->amount * 0.007; 

//     // Optionally, you can also calculate the final total (amount + fee)
//     $totalWithFee = $request->amount + $minersFee;

//     // Save the conversion record
//     $conversion = Conversion::create([
//         'user_id'     => Auth::id(),
//         'from_crypto' => $request->fromCrypto,
//         'to_currency' => $request->toCurrency,
//         'amount'      => $request->amount,
//         // Optional: you could save the fee too if you have a column
//         // 'miners_fee'  => $minersFee,
//     ]);

//     // Attach the fee and total to the session so you can display them
//     $conversion->miners_fee = $minersFee;
//     $conversion->total_with_fee = $totalWithFee;

//     // Redirect to billing page with all details
//     return redirect()->route('gas-billing')
//         ->with('conversion', $conversion);
// }


    public function store(Request $request)
{
    $request->validate([
        'fromCrypto' => 'required|string',
        'toCurrency' => 'required|string',
        'amount'     => 'required|numeric|min:0.01',
    ]);

    $user = Auth::user();

    // Get total deposits
    $deposit_total = Deposit::where('user_id', $user->id)->sum('amount');

    // Get approved conversions
    $conversion_total = Conversion::where('user_id', $user->id)
                                  ->where('status', 1)
                                  ->sum('amount');

    // Available balance (deposit left after approved conversions)
    $available_balance = $deposit_total - $conversion_total;

    // 🚫 If requested conversion amount is greater than available, stop
    if ($request->amount > $available_balance) {
        return back()->withErrors([
            'amount' => 'Insufficient balance for this conversion.',
        ])->withInput();
    }

    // Calculate 0.7% miner's fee
    $minersFee = $request->amount * 0.007; 
    $totalWithFee = $request->amount + $minersFee;

    // Save the conversion record
    $conversion = Conversion::create([
        'user_id'     => $user->id,
        'from_crypto' => $request->fromCrypto,
        'to_currency' => $request->toCurrency,
        'amount'      => $request->amount,
        // 'miners_fee' => $minersFee, // optional if column exists
    ]);

    // Attach fee + total (for displaying only, not saved in DB here)
    $conversion->miners_fee = $minersFee;
    $conversion->total_with_fee = $totalWithFee;

    // Redirect to billing page with all details
    return redirect()->route('gas-billing')
        ->with('conversion', $conversion);
}
}


