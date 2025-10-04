<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Withdrawal;
use Illuminate\Http\Request;

class WithdrawalController extends Controller
{
    //
    public function index(){
        return view('withdrawal.home');
    }

    /**
     * Store a newly created withdrawal request.
     */
    // public function store(Request $request)
    // {
    //     // Validate input
    //     $validated = $request->validate([
    //         'amount' => 'required|numeric|min:10',
    //         'bank_name' => 'required|string|max:255',
    //         'account_name' => 'required|string|max:255',
    //         'account_number' => 'required|string|max:50',
    //         'swift_code' => 'required|string|max:50',
    //         'crypto_network' => 'string|max:100',
    //         'wallet_address' => 'string|max:100',
    //         'narration' => 'nullable|string|max:500',
    //     ]);

    //     // Save to database
    //     Withdrawal::create([
    //         'user_id' => auth()->id(), // link to logged-in user
    //         'amount' => $validated['amount'],
    //         'bank_name' => $validated['bank_name'],
    //         'account_name' => $validated['account_name'],
    //         'account_number' => $validated['account_number'],
    //         'swift_code' => $validated['swift_code'],
    //         'crypto_network' => $validated['crypto_network'],
    //         'wallet_address' => $validated['wallet_address'],
    //         'narration' => $validated['narration'] ?? null,
    //         'status' => 0, // default status
    //     ]);

    //     // Redirect back with success message
    //     return redirect()->back()->with('success', 'Your withdrawal request has been submitted and is pending approval.');
    // }



    public function store(Request $request)
{
    // Identify withdrawal type (from hidden input)
    $type = $request->input('withdrawal_type');

    // Common validation
    $request->validate([
        'amount' => 'required|numeric|min:10',
    ]);

    // Conditional validation depending on type
    if ($type === 'bank') {
        $validated = $request->validate([
            'bank_name' => 'required|string|max:255',
            'account_name' => 'required|string|max:255',
            'account_number' => 'required|string|max:50',
            'swift_code' => 'required|string|max:50',
            'narration' => 'nullable|string|max:500',
        ]);
    } elseif ($type === 'crypto') {
        $validated = $request->validate([
            'crypto_network' => 'required|string|max:100',
            'wallet_address' => 'required|string|max:255',
            'narration' => 'nullable|string|max:500',
        ]);
    } else {
        return redirect()->back()->with('error', 'Invalid withdrawal type selected.');
    }

    // Save record
    \App\Models\Withdrawal::create([
        'user_id' => auth()->id(),
        'amount' => $request->amount,
        'bank_name' => $request->bank_name ?? null,
        'account_name' => $request->account_name ?? null,
        'account_number' => $request->account_number ?? null,
        'swift_code' => $request->swift_code ?? null,
        'crypto_network' => $request->crypto_network ?? null,
        'wallet_address' => $request->wallet_address ?? null,
        'narration' => $request->narration ?? null,
        'status' => 0, // pending by default
    ]);

    return redirect()->back()->with('success', 'Your withdrawal request has been submitted and is pending approval.');
}

}


