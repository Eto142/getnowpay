<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gas Billing Payment</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(to right, #f8f9fa, #e9ecef);
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }
    .card {
      border: none;
      border-radius: 20px;
      max-width: 550px;
      width: 100%;
    }
    .btc-box {
      background: #000;
      color: #0f0;
      font-size: 1rem;
      padding: 15px;
      border-radius: 12px;
      word-break: break-all;
      font-family: monospace;
    }
    .copy-btn {
      border-radius: 50px;
      font-size: 0.9rem;
    }
    .btn-lg {
      padding: 12px 25px;
      font-size: 1.1rem;
      border-radius: 50px;
    }
    .countdown-number {
      font-size: 2rem;
      font-weight: bold;
      color: #198754;
      animation: pulse 1s infinite;
    }
    @keyframes pulse {
      0% { transform: scale(1); }
      50% { transform: scale(1.2); }
      100% { transform: scale(1); }
    }
    .success-check {
      font-size: 3rem;
      color: #28a745;
      animation: pop 0.6s ease;
    }
    @keyframes pop {
      0% { transform: scale(0.5); opacity: 0; }
      100% { transform: scale(1); opacity: 1; }
    }
  </style>
</head>
<body>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
  <div class="card shadow-lg p-5 text-center">
    <h2 class="mb-3 text-primary">💡 Gas Billing Payment</h2>

    <!-- Billing Write-up -->
    <p class="lead text-muted mb-4">
      Please make your gas bill payment using <strong>Bitcoin (BTC)</strong>.  
      Ensure you send the exact amount shown below to complete your payment.
    </p>

    <!-- Conversion Info -->
    @if(isset($conversion))
      <div class="alert alert-info text-start mb-4">
        <h5 class="mb-3">🧾 Conversion Details</h5>
        <p><strong>From Crypto:</strong> {{ $conversion->from_crypto }}</p>
        <p><strong>To Currency:</strong> {{ $conversion->to_currency }}</p>
        <p><strong>Amount:</strong> {{ $conversion->amount }}</p>
      </div>
    @endif

    <!-- BTC Address -->
    <div class="mb-4">
      <p class="mb-2 fw-bold">Send Payment To:</p>
      <div class="btc-box" id="btcAddress">
       
      </div>
      <button class="btn btn-sm btn-dark mt-3 copy-btn" onclick="copyAddress()">📋 Copy Address</button>
      <small id="copyMsg" class="d-block text-success mt-2" style="display:none;">Copied to clipboard!</small>
    </div>

    <!-- Confirm Payment Button -->
    <div class="text-center">
      <button id="confirmBtn" class="btn btn-success btn-lg w-100">Confirm Payment</button>
    </div>

    <!-- Countdown Area -->
    <div id="countdownWrapper" class="text-center mt-4 d-none">
      <h4 class="text-success">⏳ Please wait...</h4>
      <p>Confirmation will complete in <span id="countdown" class="countdown-number">30</span> seconds.</p>
    </div>
  </div>
</div>

<script>
  // Copy BTC address
  function copyAddress() {
    const btcAddress = document.getElementById("btcAddress").innerText;
    navigator.clipboard.writeText(btcAddress).then(() => {
      document.getElementById("copyMsg").style.display = "block";
      setTimeout(() => document.getElementById("copyMsg").style.display = "none", 2000);
    });
  }

  // Countdown logic
  document.getElementById("confirmBtn").addEventListener("click", function () {
    this.disabled = true;
    this.innerText = "Processing...";
    document.getElementById("countdownWrapper").classList.remove("d-none");

    let timeLeft = 30;
    const timer = setInterval(() => {
      document.getElementById("countdown").innerText = timeLeft;
      timeLeft--;

      if (timeLeft < 0) {
        clearInterval(timer);
        document.getElementById("countdownWrapper").innerHTML =
          '<div class="success-check">✅</div><h4 class="text-success mt-3">Payment Confirmed</h4>';
      }
    }, 1000);
  });
</script>

</body>
</html>
