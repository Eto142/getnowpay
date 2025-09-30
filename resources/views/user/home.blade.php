@include('user.header')
 <!-- Content -->
<div class="content">
    <h1 class="dashboard-title">Dashboard</h1>
    <p class="dashboard-subtitle">In this section, you will be able to find your account's statistics. Now get ready to start with your integration!</p>

    <div class="row-custom">
        <div class="left-column">
            <!-- Crypto & Fiat Balances -->
            <div class="balances-section">
                <h2 class="section-title">Your Balances</h2>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                <!-- Crypto Balance -->
                <div class="balance-card crypto">
                    <div class="balance-header">
                        <span class="balance-label">Crypto Balance</span>
                        <button class="balance-action" data-bs-toggle="modal" data-bs-target="#convertModal">
                            Convert
                        </button>
                    </div>
<div class="balance-amount">
    {{ number_format($btc_value, 8) }} BTC
</div>
<p class="balance-note">
    ≈ ${{ number_format($deposit_total ?? 0, 2) }}
</p>

                </div>

                <!-- Fiat Balance -->
                <div class="balance-card fiat">
                    <div class="balance-header">
                        <span class="balance-label">Fiat Balance</span>
                       <a href ="{{ route('withdraw') }}" class="balance-action1">
                            Withdraw
                       </a>
                    </div>
                    <div class="balance-amount">$ {{ $fiat_total ?? 0 }}</div>
                    <p class="balance-note">Available for withdrawal</p>
                </div>
            </div>

            <!-- Get Started Section -->
            <div class="get-started-section">
                <h2 class="get-started-title">Get started <span class="now-text">NOW</span></h2>
                <p class="get-started-description">Complete a quick account setup and start accepting crypto in just 5 minutes.</p>
                <a href="#" class="start-integration-btn">Start integration</a>
            </div>

            <!-- Products Section -->
            <div class="products-section">
                <h2 class="products-title">Our products</h2>
                <p class="products-description">We have selected the most relevant products for you. Choose your project's industry and start integration here or go directly to the API documentation.</p>
                <select class="industry-dropdown">
                    <option>Choose your industry</option>
                    <option>E-commerce</option>
                    <option>Gaming</option>
                    <option>SaaS</option>
                    <option>Other</option>
                </select>
            </div>
        </div>

        <div class="right-column">
            <div class="action-items">
                <a href="#" class="action-item">
                    <div class="action-icon pink">
                        <i class="fas fa-key"></i>
                    </div>
                    <div class="action-text">Generate IPN key</div>
                    <div class="action-arrow">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </a>

                <a href="#" class="action-item">
                    <div class="action-icon blue">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="action-text">Enable 2FA</div>
                    <div class="action-arrow">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </a>

                <a href="#" class="action-item">
                    <div class="action-icon green">
                        <i class="fas fa-list"></i>
                    </div>
                    <div class="action-text">Specify currencies list</div>
                    <div class="action-arrow">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Conversion Modal -->
<div class="modal fade" id="convertModal" tabindex="-1" aria-labelledby="convertModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="convertModalLabel">Convert Crypto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
     <form action="{{ route('conversion.store') }}" method="POST">
    @csrf
    <!-- From Crypto -->
    <div class="mb-3">
        <label for="fromCrypto" class="form-label">From</label>
        <select class="form-select" id="fromCrypto" name="fromCrypto" required>
            <option value="BTC" selected>BTC</option>
            <option value="ETH">ETH</option>
            <option value="LTC">LTC</option>
            <option value="XRP">XRP</option>
        </select>
    </div>

    <!-- To Currency -->
    <div class="mb-3">
        <label for="toCurrency" class="form-label">To</label>
        <select class="form-select" id="toCurrency" name="toCurrency" required>
            <option value="USD" selected>USD</option>
            <option value="EUR">EUR</option>
        </select>
    </div>

    <!-- Amount -->
    <div class="mb-3">
        <label for="amount" class="form-label">Amount</label>
        <input type="number" class="form-control" id="amount" name="amount" placeholder="Enter amount" required>
    </div>

    <!-- Confirm Button -->
    <button type="submit" class="btn btn-primary w-100">Confirm Conversion</button>
</form>

      </div>
    </div>
  </div>
</div>


<style>
    .balances-section {
    margin-bottom: 20px;
}

.balance-card {
    background: #fff;
    border-radius: 12px;
    padding: 15px 20px;
    margin-bottom: 15px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}

.balance-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.balance-label {
    font-weight: 600;
    font-size: 16px;
    color: #333;
}

.balance-action {
    padding: 5px 10px;
    border-radius: 6px;
    border: 1px solid #ccc;
}

.balance-action1 {
    padding: 5px 10px;
    border-radius: 6px;
    border: 1px solid #ccc;
    text-decoration: none;
}
.balance-amount {
    font-size: 22px;
    font-weight: bold;
    margin: 10px 0 5px;
}

.balance-note {
    font-size: 13px;
    color: #888;
}

.balance-card.crypto {
    border-left: 5px solid #f39c12;
}

.balance-card.fiat {
    border-left: 5px solid #3498db;
}

</style>

   @include('user.footer')