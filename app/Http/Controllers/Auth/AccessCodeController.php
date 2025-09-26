<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller; // ✅ Import the base Controller
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AccessCodeController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        if ($user->verified) {
            return redirect()->route('home');
        }
        return view('auth.access-code');
    }

    public function verify(Request $request)
    {
        $request->validate([
            'code1' => 'required|numeric|digits:1',
            'code2' => 'required|numeric|digits:1',
            'code3' => 'required|numeric|digits:1',
            'code4' => 'required|numeric|digits:1',
        ]);

        $enteredCode = trim($request->code1 . $request->code2 . $request->code3 . $request->code4);
        $user = Auth::user();

        if ((string)$enteredCode === (string)$user->access_code) {
            $user->update(['verified' => true]);
            return redirect()->route('home')->with('success', 'Access code verified!');
        }

        return back()->withErrors(['code1' => 'Invalid access code. Try again.']);
    }
}
