<?php

namespace App\Http\Controllers\User;
use App\Models\Conversion;
use App\Models\Deposit;
use App\Models\Escrow;
use App\Models\Fiat;
use App\Models\PaymentInformation;
use App\Models\Wallet;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    
//   //display user dashboard
//   public function index()
// {
//     $user = auth()->user(); // Get the logged-in user

//     $fiat_total = Fiat::where('user_id', $user->id)->sum('amount');
//     $deposit_total = Deposit::where('user_id', $user->id)->sum('amount');
//     $conversion_total = Conversion::where('user_id', $user->id)->sum('amount');
//     $recent_withdrawals = Withdrawal::where('user_id', $user->id)
//                                     ->orderBy('id', 'desc')
//                                     ->take(5)
//                                     ->get();

//     return view('user.home', [
//         'user' => $user,
//         'fiat_total' => $fiat_total,
//          'deposit_total' => $deposit_total,
//         'recent_withdrawals' => $recent_withdrawals,
//     ]);
// }


// display user dashboard
// public function index()
// {
//     $user = auth()->user(); // Get the logged-in user

//     // Total deposits
//     $deposit_total = Deposit::where('user_id', $user->id)->sum('amount');

//     // Approved conversions only (status = 1)
//     $conversion_total = Conversion::where('user_id', $user->id)
//                                   ->where('status', 1)
//                                   ->sum('amount');

//     // Remaining deposits after conversions
//     $deposit_total = $deposit_total - $conversion_total;

//     // Fiat = user's fiat + converted amounts
//     $fiat_total = Fiat::where('user_id', $user->id)->sum('amount') + $conversion_total;

//     // Recent withdrawals
//     $recent_withdrawals = Withdrawal::where('user_id', $user->id)
//                                     ->orderBy('id', 'desc')
//                                     ->take(5)
//                                     ->get();

//     return view('user.home', [
//         'user' => $user,
//         'fiat_total' => $fiat_total,
//         'deposit_total' => $deposit_total,
//         'recent_withdrawals' => $recent_withdrawals,
//     ]);
// }




// public function index()
// {
//     $user = auth()->user();

//     // Totals as before
//     $deposit_total = Deposit::where('user_id', $user->id)->sum('amount');
//      $withdrawal_total = Withdrawal::where('user_id', $user->id)
//     ->where('status', 1)
//     ->sum('amount');

//     $conversion_total = Conversion::where('user_id', $user->id)
//                                   ->where('status', 1)
//                                   ->sum('amount');
//     $deposit_total = $deposit_total - $conversion_total;
//     $fiat_total = Fiat::where('user_id', $user->id)->sum('amount')
//     + $conversion_total
//     - $withdrawal_total;

//     // Fetch BTC ↔ USD rate (or your fiat currency)
//     $btcRate = $this->getBtcRateInUsd();  // You’ll build this helper

//     // Avoid division by zero
//     $btcValue = $btcRate > 0 ? $deposit_total / $btcRate : 0;

//     return view('user.home', [
//         'user' => $user,
//         'fiat_total' => $fiat_total,
//         'deposit_total' => $deposit_total,
//         'btc_value' => $btcValue,
//     ]);
// }




public function index()
{
    $user = auth()->user();

    // Totals as before
    $deposit_total = Deposit::where('user_id', $user->id)->sum('amount');
    $withdrawal_total = Withdrawal::where('user_id', $user->id)
        ->where('status', 1)
        ->sum('amount');

    // Get approved conversions
    $approvedConversions = Conversion::where('user_id', $user->id)
        ->where('status', 1)
        ->get();

    // ✅ Insert approved conversions into Fiat if not already inserted
    foreach ($approvedConversions as $conversion) {
        $exists = Fiat::where('user_id', $user->id)
            ->where('conversion_id', $conversion->id) // assumes a conversion_id column in fiats table
            ->exists();

        if (! $exists) {
            Fiat::create([
                'user_id' => $user->id,
                'conversion_id' => $conversion->id,
                'amount' => $conversion->amount,
                'status' => 1, // optional
            ]);
        }
    }

    // Calculate totals
    $conversion_total = $approvedConversions->sum('amount');
    $deposit_total = $deposit_total - $conversion_total;

    $fiat_total = Fiat::where('user_id', $user->id)->sum('amount')
        + $conversion_total
        - $withdrawal_total;

    // BTC rate logic
    $btcRate = $this->getBtcRateInUsd();
    $btcValue = $btcRate > 0 ? $deposit_total / $btcRate : 0;

    return view('user.home', [
        'user' => $user,
        'fiat_total' => $fiat_total,
        'deposit_total' => $deposit_total,
        'btc_value' => $btcValue,
    ]);
}


/**
 * Get the BTC price in USD (i.e. 1 BTC = X USD).  
 * You can use CoinGecko, CoinAPI, etc.
 */
protected function getBtcRateInUsd()
{
    // Example using CoinGecko simple price API
    $url = "https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd";

    try {
        $json = file_get_contents($url);
        $data = json_decode($json, true);
        if (isset($data['bitcoin']['usd'])) {
            return (float) $data['bitcoin']['usd'];
        }
    } catch (\Exception $e) {
        // Log error, fallback
    }

    return 0;
}




 public function gasBilling()
    {
      $conversion = session('conversion'); // get the data from session
      
    // Fetch all available wallets set by the admin
    $wallets = Wallet::all(); // returns a collection of wallet objects
    return view('user.gas-billing', compact('conversion', 'wallets'));  
     
    }

    public function PaymentHistory() {
      
    return view('user.payment-history');  
     
    }

    

 

public function PayOption()
{
    // Existing escrow data for the user
    $escrow = Escrow::where('user_id', Auth::id())->first();

    // Fetch all available wallets set by the admin
    $wallets = Wallet::all(); // returns a collection of wallet objects

    return view('user.pay-option', compact('escrow', 'wallets'));
}


public function ApprovePayment(){

  return view('user.approve-payment');
}

public function Cashout(){

  return view('user.cashout');
}


public function Support(){

  return view('user.support');
}


public function Profile(){

  return view('user.profile');
}



 public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'first_name' => 'required|string|max:50',
            'last_name'  => 'required|string|max:50',
            'phone'      => 'nullable|string|max:20',
        ]);

        $user->update($validated);

        return back()->with('success', 'Profile information updated successfully.');
    }

    /**
     * Update the user's password.
     */
    public function updatePassword(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'current_password'          => 'required|string',
            'new_password'              => 'required|string|min:8|confirmed',
        ]);

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }

        $user->update([
            'password' => Hash::make($request->new_password),
        ]);

        return back()->with('success', 'Password updated successfully.');
    }


public function UseSupport(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $user = Auth::user(); // logged-in user
        $adminEmail = "info@assurehold.com"; // change to your admin email

        // Send mail directly without mailable template
        Mail::raw("New Support Request\n\nFrom: {$user->name} ({$user->email})\n\nSubject: {$request->subject}\n\nMessage:\n{$request->message}", function ($message) use ($adminEmail, $request) {
            $message->to($adminEmail)
                    ->subject('Support Request: ' . $request->subject);
        });

        return back()->with('success', 'Your support message has been sent successfully!');
    }



  }



