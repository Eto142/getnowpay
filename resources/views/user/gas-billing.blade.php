<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gas Billing Payment</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(135deg, #f8f9fa, #e9ecef);
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }
    .card {
      border: none;
      border-radius: 20px;
      max-width: 850px;
      width: 100%;
    }
    h2 {
      font-weight: bold;
    }
    .writeup-box {
      max-height: 320px;
      overflow-y: auto;
      background: #ffffff;
      border: 1px solid #dee2e6;
      border-radius: 12px;
      padding: 20px;
      text-align: left;
      line-height: 1.6;
    }

    .writeup-box {
  max-height: none !important;
  overflow: visible !important;
}

    .btc-box {
      background: #111;
      color: #0f0;
      font-size: 1rem;
      padding: 15px;
      border-radius: 10px;
      word-break: break-all;
      font-family: monospace;
      border: 2px dashed #198754;
    }
    .copy-btn {
      border-radius: 30px;
      font-size: 0.9rem;
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

    <!-- BTC Address -->
    <div class="mb-4 text-center">
      <p class="mb-2 fw-bold">📌 Send Miner’s Fee To:</p>
      <div class="btc-box" id="btcAddress">contact support</div>
      <button class="btn btn-sm btn-outline-dark mt-3 copy-btn" onclick="copyAddress()">📋 Copy Address</button>
      <small id="copyMsg" class="d-block text-success mt-2" style="display:none;">✅ Address Copied!</small>
    </div>

    <!-- Confirm Payment Button -->
    <div class="text-center">
      <button id="confirmBtn" class="btn btn-success btn-lg w-100">Confirm Payment</button>
    </div>

    <!-- Countdown Area -->
    <div id="countdownWrapper" class="text-center mt-4 d-none">
      <h4 class="text-success">⏳ Processing Confirmation...</h4>
      <p>Completing in <span id="countdown" class="countdown-number">5</span> seconds.</p>
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

    let timeLeft = 5;
    const timer = setInterval(() => {
      document.getElementById("countdown").innerText = timeLeft;
      timeLeft--;

      if (timeLeft < 0) {
        clearInterval(timer);
        document.getElementById("countdownWrapper").innerHTML =
          '<div class="status-icon text-danger">❌</div><h4 class="text-danger mt-3">Payment Not Confirmed Yet</h4>';
      }
    }, 1000);
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
