<?php

namespace App\Http\Controllers\User;
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
    
  //display user dashboard
  public function index()
{
    $user = auth()->user(); // Get the logged-in user

    $fiat_total = Fiat::where('user_id', $user->id)->sum('amount');
    $deposit_total = Deposit::where('user_id', $user->id)->sum('amount');
    $recent_withdrawals = Withdrawal::where('user_id', $user->id)
                                    ->orderBy('id', 'desc')
                                    ->take(5)
                                    ->get();

    return view('user.home', [
        'user' => $user,
        'fiat_total' => $fiat_total,
         'deposit_total' => $deposit_total,
        'recent_withdrawals' => $recent_withdrawals,
    ]);
}


 public function gasBilling()
    {
      $conversion = session('conversion'); // get the data from session
    return view('user.gas-billing', compact('conversion'));  
     
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



