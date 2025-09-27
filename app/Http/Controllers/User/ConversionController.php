<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\Conversion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConversionController extends Controller
{


    public function store(Request $request)
{
    $request->validate([
        'fromCrypto' => 'required|string',
        'toCurrency' => 'required|string',
        'amount'     => 'required|numeric|min:0.01',
    ]);

    $conversion = Conversion::create([
        'user_id'     => Auth::id(),
        'from_crypto' => $request->fromCrypto,
        'to_currency' => $request->toCurrency,
        'amount'      => $request->amount,
    ]);

    // Redirect and pass the conversion data to the billing page
    return redirect()->route('gas-billing')
        ->with('conversion', $conversion);
}


    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'fromCrypto' => 'required|string',
    //         'toCurrency' => 'required|string',
    //         'amount'     => 'required|numeric|min:0.01',
    //     ]);

    //     Conversion::create([
    //         'user_id'     => Auth::id(),
    //         'from_crypto' => $request->fromCrypto,
    //         'to_currency' => $request->toCurrency,
    //         'amount'      => $request->amount,
    //     ]);

    //    return redirect()->route('gas-billing')
    // ->with('success', 'Conversion request saved successfully!');

    // }
}


    // public function store(Request $request)
    // {
    //     // Validate request
    //     $request->validate([
    //         'fromCrypto' => 'required|string',
    //         'toCurrency' => 'required|string',
    //         'amount'     => 'required|numeric|min:0.01',
    //     ]);

    //     $fromCrypto = $request->input('fromCrypto');
    //     $toCurrency = $request->input('toCurrency');
    //     $amount     = $request->input('amount');

    //     // For now, we’ll simulate conversion (replace with API later)
    //     $rate = $this->getConversionRate($fromCrypto, $toCurrency);

    //     $convertedAmount = $amount * $rate;

    //     // Example: return to a view with result
    //     return back()->with('success', "Converted $amount $fromCrypto = $convertedAmount $toCurrency");
    // }

    // private function getConversionRate($from, $to)
    // {
    //     // Dummy rates (replace with real API later)
    //     $rates = [
    //         'BTC' => ['USD' => 65000, 'EUR' => 60000],
    //         'ETH' => ['USD' => 3500,  'EUR' => 3200],
    //         'LTC' => ['USD' => 180,   'EUR' => 160],
    //         'XRP' => ['USD' => 0.55,  'EUR' => 0.50],
    //     ];

    //     return $rates[$from][$to] ?? 1;
    // }



