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
    public function store(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'amount' => 'required|numeric|min:10',
            'bank_name' => 'required|string|max:255',
            'account_name' => 'required|string|max:255',
            'account_number' => 'required|string|max:50',
            'swift_code' => 'required|string|max:50',
            'narration' => 'nullable|string|max:500',
        ]);

        // Save to database
        Withdrawal::create([
            'user_id' => auth()->id(), // link to logged-in user
            'amount' => $validated['amount'],
            'bank_name' => $validated['bank_name'],
            'account_name' => $validated['account_name'],
            'account_number' => $validated['account_number'],
            'swift_code' => $validated['swift_code'],
            'narration' => $validated['narration'] ?? null,
            'status' => 0, // default status
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Your withdrawal request has been submitted and is pending approval.');
    }
}


