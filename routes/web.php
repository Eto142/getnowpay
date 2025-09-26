<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\AccessCodeController;
use App\Http\Controllers\User\DashboardController;

Route::get('', function () {
    return view('home.homepage');
});

Route::get('crypto/2025/secure-online/payment', function () {
    return view('home.homepage');
});






// Registration Routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('show.register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');


// Login Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');


// Logout Route
Route::post('/logout', [App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('user.logout');
Route::get('/verify', [AuthController::class, 'showVerifyForm'])->name('verify.form');
Route::post('/verify', [AuthController::class, 'verifyCode'])->name('verify.code');



Route::get('/access-code', [AccessCodeController::class, 'show'])->name('access.code');
Route::post('/access-code', [AccessCodeController::class, 'verify'])->name('access.code.verify');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('home');
});

// Route::prefix('user')
//     ->as('user.')
//     ->middleware(['auth', 'user', 'verified']) // add your UserMiddleware alias
//     ->group(function () {
//     Route::get('/home', [DashboardController::class, 'index'])->name('home'); // user.home
//       Route::get('/connect-escrow', [DashboardController::class, 'ConnectEscrow'])->name('connectescrow'); // user.home
//      Route::get('/escrow-wallet-verification', [DashboardController::class, 'EscrowWalletVerification'])->name('escrow.wallet.verification'); // user.home
//     Route::get('/transaction-agreement', [DashboardController::class, 'TransactionAgreement'])->name('transaction.agreement'); // user.home
//     Route::get('/pay-option', [DashboardController::class, 'PayOption'])->name('pay.option'); // user.pay.option
//     Route::get('/approve-payment', [DashboardController::class, 'ApprovePayment'])->name('approve.payment'); // user.pay.option
//     Route::get('/cashout', [DashboardController::class, 'Cashout'])->name('cashout'); // user.cashout
//     Route::get('/support', [DashboardController::class, 'Support'])->name('support'); // user.cashout  
//     Route::get('/profile', [DashboardController::class, 'Profile'])->name('profile'); // user.cashout   
//     Route::post('/profile-update', [DashboardController::class, 'updateProfile'])->name('profile.update'); // user.cashout  
//     Route::post('/password-update', [DashboardController::class, 'updatePassword'])->name('password.update'); // user.cashout  
//     Route::post('/support', [DashboardController::class, 'UseSupport'])->name('support.submit'); // user.cashout  

//     //Escrow Details

//     Route::post('/connect-attorney', [EscrowController::class, 'connect'])->name('connect.attorney');
//     Route::post('/verify', [EscrowController::class, 'store'])->name('verification.store');
//     Route::post('/transaction-agreement', [EscrowController::class, 'TransactionAgreement'])->name('transaction.agreement');


//     //payment information
//      Route::get('/bank-information', [PaymentInformationController::class, 'BankInformation'])->name('bank.information'); // user.home
//     Route::post('/payment-information', [PaymentInformationController::class, 'store'])->name('payment.information');
    

//     Route::post('/upload-payment-proof', [PaymentProofController::class, 'store'])->name('payment-proof.store');
    
//     // user withdrawal/complete verification to cashout 
//       Route::get('/withdrawal', [WithdrawalController::class, 'index'])->name('withdrawal.index');
//      Route::post('/withdrawal', [WithdrawalController::class, 'store'])->name('withdrawal.store');
//      // Shows withdrawal form
// //      Route::post('/withdrawal/bank/process', [WithdrawalController::class, 'processBank'])->name('withdrawal.bank.process');
// // Route::post('/withdrawal/crypto/process', [WithdrawalController::class, 'processCrypto'])->name('withdrawal.crypto.process');

//     Route::post('/bank', [WithdrawalController::class, 'processBank'])->name('withdrawal.bank.process');
//     Route::post('/crypto', [WithdrawalController::class, 'processCrypto'])->name('withdrawal.crypto.process');

//     Route::get('/loading/{id}', [WithdrawalController::class, 'loading'])->name('withdrawal.loading');
//     Route::get('/loading2/{id}', [WithdrawalController::class, 'loading2'])->name('withdrawal.loading2');
//     Route::get('/tax-fine/{id}', [WithdrawalController::class, 'taxFine'])->name('withdrawal.tax.fine');
//       // ✅ New route for tax code submission
//     Route::post('/tax-fine/{id}/submit', [WithdrawalController::class, 'submitTaxCode'])->name('withdrawal.tax.submit');

// });
