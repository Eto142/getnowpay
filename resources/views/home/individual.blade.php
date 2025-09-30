<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>For Individuals | GETNOWPAY</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    :root {
      --primary-blue: #4285f4;
      --card-bg: rgba(255, 255, 255, 0.05);
      --border-color: rgba(255, 255, 255, 0.1);
    }

    body {
      background: linear-gradient(135deg, #0a0a0a 0%, #1a1a2e 50%, #16213e 100%);
      color: white;
      font-family: 'Inter', sans-serif;
      line-height: 1.6;
    }

    /* Header */
    .navbar {
      background: rgba(0, 0, 0, 0.95);
      padding: 1rem 0;
    }

    .navbar-brand {
      font-size: 1.8rem;
      font-weight: 800;
      color: white !important;
    }

    .navbar-brand i {
      margin-right: 0.5rem;
    }

    .navbar-nav .nav-link {
      color: rgba(255, 255, 255, 0.85) !important;
      margin: 0 0.5rem;
      font-weight: 500;
    }

    .navbar-nav .nav-link.active {
      color: var(--primary-blue) !important;
    }

    .btn-login {
      border: 2px solid rgba(255, 255, 255, 0.3);
      color: white;
      padding: 0.5rem 1.5rem;
      border-radius: 25px;
      margin-right: 1rem;
    }

    .btn-signup {
      background: white;
      color: #000;
      padding: 0.5rem 1.5rem;
      border-radius: 25px;
      border: none;
      font-weight: 600;
    }

    /* Hero */
    .individuals-hero {
      min-height: 60vh;
      display: flex;
      align-items: center;
      text-align: center;
      padding: 8rem 0 4rem;
    }

    .hero-title {
      font-size: 3.5rem;
      font-weight: 900;
      margin-bottom: 1.5rem;
    }

    .hero-subtitle {
      font-size: 1.25rem;
      margin-bottom: 2.5rem;
      opacity: 0.9;
    }

    .highlight {
      color: var(--primary-blue);
    }

    .btn-primary-hero {
      background: var(--primary-blue);
      border: none;
      padding: 1rem 2rem;
      border-radius: 25px;
      font-size: 1.1rem;
      font-weight: 600;
    }

    /* Features */
    .features-section {
      padding: 5rem 0;
    }

    .features-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 2rem;
    }

    .feature-card {
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 15px;
      padding: 2.5rem;
      text-align: center;
      transition: all 0.3s ease;
    }

    .feature-card:hover {
      transform: translateY(-5px);
      border-color: var(--primary-blue);
    }

    .feature-icon {
      font-size: 3rem;
      margin-bottom: 1.5rem;
      color: var(--primary-blue);
    }

    .feature-title {
      font-size: 1.5rem;
      font-weight: 700;
      margin-bottom: 1rem;
    }

    /* CTA */
    .cta-section {
      padding: 5rem 0;
      text-align: center;
      background: rgba(0, 0, 0, 0.3);
    }

    /* Footer */
    footer {
      background: #0a0a0a;
      padding: 4rem 0 2rem;
      text-align: center;
    }

    .footer-logo {
      font-size: 1.8rem;
      font-weight: 800;
      margin-bottom: 1.5rem;
    }

    .footer-bottom {
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      padding-top: 2rem;
      margin-top: 3rem;
    }

    @media (max-width: 768px) {
      .hero-title {
        font-size: 2.5rem;
      }
      .features-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>
 @include('home.header')

  <!-- Hero Section -->
  <section class="individuals-hero">
    <div class="container">
      <h1 class="hero-title">CRYPTO FOR <span class="highlight">EVERYONE</span></h1>
      <p class="hero-subtitle">
        Send, receive, and manage cryptocurrencies with ease. Your personal gateway to the digital economy.
      </p>
      <a href="{{ url('register') }}" class="btn btn-primary-hero">Get Started Free</a>
    </div>
  </section>

  <!-- Features -->
  <section class="features-section">
    <div class="container">
      <div class="features-grid">
        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-wallet"></i>
          </div>
          <h3 class="feature-title">Secure Wallet</h3>
          <p>Store your cryptocurrencies safely with MPC technology</p>
        </div>

        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-exchange-alt"></i>
          </div>
          <h3 class="feature-title">Instant Transfers</h3>
          <p>Send and receive crypto anywhere in the world, instantly</p>
        </div>

        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-chart-line"></i>
          </div>
          <h3 class="feature-title">Track Prices</h3>
          <p>Monitor real-time prices and market movements</p>
        </div>

        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-shopping-cart"></i>
          </div>
          <h3 class="feature-title">Pay Merchants</h3>
          <p>Use crypto to pay at thousands of online stores</p>
        </div>

        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h3 class="feature-title">Insurance Protection</h3>
          <p>Your funds are insured against security breaches</p>
        </div>

        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-mobile-alt"></i>
          </div>
          <h3 class="feature-title">Mobile App</h3>
          <p>Manage your crypto on the go with our mobile app</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="cta-section">
    <div class="container">
      <h2 class="hero-title">Ready to Get Started?</h2>
      <p class="hero-subtitle">Join thousands of individuals using GETNOWPAY for their crypto needs</p>
      <a href="{{ url('register') }}" class="btn btn-primary-hero">Create Your Free Account</a>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="footer-logo">GETNOWPAY</div>
      <p>Bank Yourself with Crypto</p>
      <div class="footer-bottom">
        <p>&copy; 2025 GETNOWPAY. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>