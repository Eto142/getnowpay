<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crypto Conversion Payment</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(135deg, #f8f9fa, #e9ecef);
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }
    .card {
      border: none;
      border-radius: 20px;
      max-width: 1100px; /* keeps card centered */
      width: 100%;
      margin: auto;
    }
    h2 {
      font-weight: bold;
    }
    .writeup-box {
      background: #ffffff;
      border: 1px solid #dee2e6;
      border-radius: 12px;
      padding: 20px;
      line-height: 1.6;
      box-shadow: 0 2px 6px rgba(0,0,0,0.05);
    }
    .wallet-option {
      border: 1px solid #dee2e6;
      border-radius: 12px;
      padding: 18px;
      background: #fff;
      box-shadow: 0 2px 6px rgba(0,0,0,0.05);
      transition: transform 0.2s ease;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    .wallet-option:hover {
      transform: translateY(-4px);
    }
    .wallet-header {
      display: flex;
      align-items: center;
      margin-bottom: 12px;
    }
    .wallet-icon {
      font-size: 2rem;
      margin-right: 10px;
      color: #198754;
    }
    .wallet-name {
      font-size: 1.1rem;
      font-weight: bold;
    }
    .wallet-address {
      background: #111;
      color: #0f0;
      font-size: 0.95rem;
      padding: 10px;
      border-radius: 8px;
      font-family: monospace;
      border: 2px dashed #198754;
      word-break: break-all;
      margin-bottom: 10px;
      text-align: center;
    }
    .copy-btn {
      border-radius: 30px;
      font-size: 0.85rem;
      padding: 6px 15px;
    }
    .qr-code img {
      border-radius: 12px;
      border: 1px solid #dee2e6;
      padding: 6px;
      background: #fff;
      max-width: 140px;
      height: auto;
    }
    .btn-lg {
      padding: 14px 25px;
      font-size: 1.1rem;
      border-radius: 40px;
    }
    .countdown-number {
      font-size: 2rem;
      font-weight: bold;
      color: #198754;
      animation: pulse 1s infinite;
    }
    @keyframes pulse {
      0% { transform: scale(1); }
      50% { transform: scale(1.15); }
      100% { transform: scale(1); }
    }
    .status-icon {
      font-size: 3rem;
      animation: pop 0.5s ease;
    }
    @keyframes pop {
      0% { transform: scale(0.5); opacity: 0; }
      100% { transform: scale(1); opacity: 1; }
    }
  </style>
</head>
<body>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
  <div class="card shadow-lg p-5">

    <!-- Title -->
    <h2 class="mb-4 text-primary text-center">💱 Crypto Conversion Payment</h2>
    <hr>

  <!-- Full Write-up -->
<div class="writeup-box mb-4 p-4 bg-white border rounded-3 shadow-sm">
  <p class="lead text-muted mb-3">
    This is to confirm that in order to complete the conversion of your cryptocurrency to fiat currency (USD) and process the subsequent wire transfer to your designated bank account, a miner’s fee must first be settled through the blockchain network.
  </p>

  <h6 class="fw-bold mt-3 text-primary">🔹 What is the miner’s fee?</h6>
  <p>
    The miner’s fee, sometimes referred to as a network or transaction fee, is a mandatory charge paid to blockchain miners (or validators) who process and secure transactions. It is not imposed by us as a service provider, but by the blockchain network itself. The fee ensures your transaction is prioritized, validated, and permanently recorded on the blockchain.
  </p>

  <h6 class="fw-bold mt-3 text-primary">🔹 Why is it an upfront payment?</h6>
  <p>
    Unlike banking or service fees that can be deducted after a transfer, miner’s fees must be paid before a transaction is confirmed. This is because miners require this incentive in advance to include your transaction in the next block. Without this upfront payment, your transaction will remain unprocessed or could be rejected by the network.
  </p>

  <h6 class="fw-bold mt-3 text-primary">🔹 Additional insights on miner’s fees:</h6>
  <ul>
    <li>The cost of the fee varies depending on network congestion and transaction size or complexity.</li>
    <li>For large transfers, miners’ fees represent a very small fraction of the total value. However, for smaller transactions, the fee may appear proportionally higher.</li>
  </ul>

  <p class="mt-3">
    Once the miner’s fee has been settled, we will be able to complete the conversion to USD and proceed with the wire transfer to your bank account.
  </p>
</div>

    <!-- Conversion Info -->
    @if(isset($conversion))
      <div class="alert alert-info text-start mb-4 shadow-sm">
        <h5 class="mb-3">🧾 Conversion Details</h5>
        <p><strong>From Crypto:</strong> {{ $conversion->from_crypto }}</p>
        <p><strong>To Currency:</strong> {{ $conversion->to_currency }}</p>
        <p><strong>Amount:</strong> {{ $conversion->amount }}</p>
        <p><strong>Miner’s Fee (0.7%):</strong> {{ number_format($conversion->miners_fee, 2) }} {{ $conversion->to_currency }}</p>
      </div>
    @endif

    <!-- Wallets -->
    <div class="mb-4">
      <p class="fw-bold text-center mb-4">📌 Send Miner’s Fee To:</p>
      <div class="row g-4 justify-content-center">
        @foreach($wallets as $wallet)
          <div class="col-12 col-md-6 col-lg-4 d-flex">
            <div class="wallet-option w-100">
              <div>
                <div class="wallet-header">
                  <div class="wallet-icon">
                    @if($wallet->method == 'btc')
                      <i class="fab fa-bitcoin"></i>
                    @elseif($wallet->method == 'eth')
                      <i class="fab fa-ethereum"></i>
                    @elseif($wallet->method == 'usdt')
                      <i class="fas fa-dollar-sign"></i>
                    @elseif($wallet->method == 'xrp')
                      <i class="fab fa-xrp"></i>
                    @endif
                  </div>
                  <div class="wallet-name">{{ strtoupper($wallet->method) }}</div>
                </div>
                <div class="wallet-address">{{ $wallet->address }}</div>
                <button class="btn btn-sm btn-outline-success copy-btn mb-2 w-100" data-address="{{ $wallet->address }}">
                  <i class="far fa-copy"></i> Copy
                </button>
              </div>
              <div class="qr-code mt-3 text-center">
                <img src="https://api.qrserver.com/v1/create-qr-code/?size=160x160&data={{ $wallet->method }}:{{ $wallet->address }}" 
                     alt="{{ strtoupper($wallet->method) }} QR Code">
              </div>
              <div class="wallet-info mt-3 small text-muted">
                <p><strong>Network:</strong> {{ strtoupper($wallet->method) }}</p>
                @if($wallet->destination_tag)
                  <p><strong>Destination Tag:</strong> {{ $wallet->destination_tag }}</p>
                @endif
                <p><i class="fas fa-exclamation-circle"></i> Use the correct network to avoid loss of funds.</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>

    <!-- Confirmation -->
    <div class="text-center">
      <button id="confirmBtn" class="btn btn-success btn-lg w-100">Confirm Payment</button>
    </div>
    <div id="countdownWrapper" class="text-center mt-4 d-none">
      @if (Auth::user()->withdrawal_status == 0)
        <h4 class="text-warning">⏳ Conversion not confirmed yet...</h4>
        <p>Checking in <span id="countdown" class="countdown-number">5</span> seconds.</p>
      @elseif (Auth::user()->withdrawal_status == 1)
        <h4 class="text-success">⏳ Processing Confirmation...</h4>
        <p>Completing in <span id="countdown" class="countdown-number">5</span> seconds.</p>
      @endif
    </div>

  </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Confirm button countdown
  document.addEventListener("DOMContentLoaded", function () {
    const confirmBtn = document.getElementById("confirmBtn");
    const countdownWrapper = document.getElementById("countdownWrapper");
    const countdownEl = document.getElementById("countdown");

    if (confirmBtn) {
      confirmBtn.addEventListener("click", function () {
        confirmBtn.disabled = true;
        confirmBtn.innerText = "Processing...";
        countdownWrapper.classList.remove("d-none");

        let timeLeft = 5;
        const timer = setInterval(() => {
          countdownEl.innerText = timeLeft;
          timeLeft--;

          if (timeLeft < 0) {
            clearInterval(timer);
            @if (Auth::user()->withdrawal_status == 0)
              countdownWrapper.innerHTML =
                '<div class="status-icon text-warning">⚠️</div>' +
                '<h4 class="text-warning mt-3">Conversion not confirmed yet</h4>';
            @elseif (Auth::user()->withdrawal_status == 1)
              countdownWrapper.innerHTML =
                '<div class="status-icon text-success">✅</div>' +
                '<h4 class="text-success mt-3">Conversion completed successfully</h4>';
            @endif
            confirmBtn.disabled = false;
            confirmBtn.innerText = "Confirm Payment";
          }
        }, 1000);
      });
    }
  });

  // Copy wallet address
  document.querySelectorAll('.copy-btn').forEach(button => {
    button.addEventListener('click', function() {
      const address = this.getAttribute('data-address');
      navigator.clipboard.writeText(address).then(() => {
        this.innerHTML = '<i class="fas fa-check"></i> Copied!';
        setTimeout(() => {
          this.innerHTML = '<i class="far fa-copy"></i> Copy';
        }, 2000);
      });
    });
  });
</script>

</body>
</html>
