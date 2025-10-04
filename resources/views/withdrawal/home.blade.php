@include('user.header')

<div class="content withdrawal-page">
    <!-- Header -->
    <div class="page-header">
        <h1 class="dashboard-title">💳 Withdrawal</h1>
        <p class="dashboard-subtitle">
            Choose your preferred withdrawal option and fill in the required details below.  
            Once submitted, our team will process your request securely.
        </p>
    </div>

    <!-- Status Alerts -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Withdrawal Card -->
    <div class="withdrawal-card">
        <!-- Tabs -->
        <ul class="nav nav-tabs justify-content-center mb-3" id="withdrawTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="bank-tab" data-bs-toggle="tab" data-bs-target="#bank" type="button" role="tab">
                    🏦 Bank Withdrawal
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="crypto-tab" data-bs-toggle="tab" data-bs-target="#crypto" type="button" role="tab">
                    💰 Crypto Withdrawal
                </button>
            </li>
        </ul>

        <div class="tab-content" id="withdrawTabsContent">
            <!-- BANK TAB -->
            <div class="tab-pane fade show active" id="bank" role="tabpanel" aria-labelledby="bank-tab">
                <form action="{{ route('withdraw.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="withdrawal_type" value="bank">

                    <!-- Amount -->
                    <div class="form-group">
                        <label for="amount_bank">Withdrawal Amount (USD)</label>
                        <input type="number" id="amount_bank" name="amount" class="form-control" placeholder="Enter amount in USD" required>
                    </div>

                    <!-- Bank Name -->
                    <div class="form-group">
                        <label for="bank_name">Bank Name</label>
                        <input type="text" id="bank_name" name="bank_name" class="form-control" placeholder="Enter Bank Name" required>
                    </div>

                    <!-- Account Name -->
                    <div class="form-group">
                        <label for="account_name">Account Name</label>
                        <input type="text" id="account_name" name="account_name" class="form-control" placeholder="Enter Account Name" required>
                    </div>

                    <!-- Account Number -->
                    <div class="form-group">
                        <label for="account_number">Account Number</label>
                        <input type="text" id="account_number" name="account_number" class="form-control" placeholder="Enter Account Number" required>
                    </div>

                    <!-- Swift Code -->
                    <div class="form-group">
                        <label for="swift_code">Swift Code</label>
                        <input type="text" id="swift_code" name="swift_code" class="form-control" placeholder="Enter Swift Code" required>
                    </div>

                    <!-- Narration -->
                    <div class="form-group">
                        <label for="narration">Narration</label>
                        <input type="text" id="narration" name="narration" class="form-control" placeholder="Enter Narration" required>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn-withdraw">
                        <i class="fas fa-paper-plane"></i> Request Bank Withdrawal
                    </button>
                </form>
            </div>

            <!-- CRYPTO TAB -->
            <div class="tab-pane fade" id="crypto" role="tabpanel" aria-labelledby="crypto-tab">
                <form action="{{ route('withdraw.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="withdrawal_type" value="crypto">

                    <!-- Amount -->
                    <div class="form-group">
                        <label for="amount_crypto">Withdrawal Amount (USD)</label>
                        <input type="number" id="amount_crypto" name="amount" class="form-control" placeholder="Enter amount in USD" required>
                    </div>

                    <!-- Crypto Network -->
                    <div class="form-group">
                        <label for="crypto_network">Select Crypto Network</label>
                        <select id="crypto_network" name="crypto_network" class="form-control" required>
                            <option value="">Select Network</option>
                            <option value="Bitcoin (BTC)">₿ Bitcoin (BTC)</option>
                            <option value="Ethereum (ERC20)">Ξ Ethereum (ERC20)</option>
                            <option value="Tether (USDT-TRC20)">🪙 Tether (USDT - TRC20)</option>
                            <option value="Tether (USDT-ERC20)">🪙 Tether (USDT - ERC20)</option>
                            <option value="BNB Smart Chain (BEP20)">⚡ BNB Smart Chain (BEP20)</option>
                        </select>
                    </div>

                    <!-- Wallet Address -->
                    <div class="form-group">
                        <label for="wallet_address">Wallet Address</label>
                        <input type="text" id="wallet_address" name="wallet_address" class="form-control" placeholder="Enter your wallet address" required>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn-withdraw">
                        <i class="fas fa-paper-plane"></i> Request Crypto Withdrawal
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
/* General Layout */
.withdrawal-page {
    max-width: 700px;
    margin: 0 auto;
    padding: 30px 15px;
}
.page-header {
    text-align: center;
    margin-bottom: 25px;
}
.dashboard-title {
    font-size: 26px;
    font-weight: 700;
    color: #2c3e50;
}
.dashboard-subtitle {
    font-size: 15px;
    color: #7f8c8d;
    line-height: 1.6;
}

/* Card */
.withdrawal-card {
    background: #fff;
    border-radius: 18px;
    padding: 30px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    transition: transform 0.2s ease;
}
.withdrawal-card:hover {
    transform: translateY(-2px);
}

/* Tabs */
.nav-tabs {
    border-bottom: 2px solid #e1e5ea;
}
.nav-tabs .nav-link {
    border: none;
    font-weight: 600;
    color: #7f8c8d;
    border-radius: 10px 10px 0 0;
}
.nav-tabs .nav-link.active {
    background: linear-gradient(135deg, #3498db, #2ecc71);
    color: #fff;
    border: none;
}

/* Form */
.form-group {
    margin-bottom: 18px;
}
.form-group label {
    font-weight: 600;
    margin-bottom: 6px;
    display: block;
    color: #34495e;
}
.form-control {
    border-radius: 10px;
    padding: 12px 14px;
    border: 1px solid #dcdde1;
    font-size: 15px;
    transition: border 0.2s;
}
.form-control:focus {
    border-color: #3498db;
    box-shadow: 0 0 0 3px rgba(52,152,219,0.15);
    outline: none;
}

/* Button */
.btn-withdraw {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    padding: 14px;
    font-size: 16px;
    font-weight: 600;
    background: linear-gradient(135deg, #3498db, #2ecc71);
    border: none;
    border-radius: 12px;
    color: #fff;
    cursor: pointer;
    transition: background 0.3s ease, transform 0.2s ease;
}
.btn-withdraw i {
    margin-right: 8px;
}
.btn-withdraw:hover {
    background: linear-gradient(135deg, #2980b9, #27ae60);
    transform: scale(1.02);
}
</style>

@include('user.footer')
