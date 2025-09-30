<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>For Business | GETNOWPAY</title>
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
    .business-hero {
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

    /* Solutions */
    .solutions-section {
      padding: 5rem 0;
      background: rgba(0, 0, 0, 0.3);
    }

    .section-title {
      font-size: 2.5rem;
      font-weight: 800;
      text-align: center;
      margin-bottom: 3rem;
    }

    .solutions-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 2rem;
    }

    .solution-card {
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 15px;
      padding: 2.5rem;
      text-align: center;
      transition: all 0.3s ease;
    }

    .solution-card:hover {
      transform: translateY(-5px);
      border-color: var(--primary-blue);
    }

    .solution-icon {
      font-size: 3rem;
      margin-bottom: 1.5rem;
      color: var(--primary-blue);
    }

    .solution-title {
      font-size: 1.5rem;
      font-weight: 700;
      margin-bottom: 1rem;
    }

    /* Benefits */
    .benefits-section {
      padding: 5rem 0;
    }

    .benefits-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 2rem;
    }

    .benefit-item {
      display: flex;
      align-items: flex-start;
      gap: 1.5rem;
      margin-bottom: 2rem;
    }

    .benefit-icon {
      font-size: 2rem;
      color: var(--primary-blue);
      margin-top: 0.5rem;
    }

    .benefit-content h3 {
      font-size: 1.3rem;
      font-weight: 700;
      margin-bottom: 0.5rem;
    }

    /* Integration */
    .integration-section {
      padding: 5rem 0;
      background: rgba(0, 0, 0, 0.3);
      text-align: center;
    }

    .integration-logos {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      gap: 3rem;
      margin-top: 3rem;
    }

    .integration-logo {
      font-size: 1.5rem;
      font-weight: 600;
      color: rgba(255, 255, 255, 0.7);
    }

    /* CTA */
    .cta-section {
      padding: 5rem 0;
      text-align: center;
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
      .solutions-grid {
        grid-template-columns: 1fr;
      }
      .integration-logos {
        gap: 1.5rem;
      }
    }
  </style>
</head>
<body>
  <!-- Navigation -->
@include('home.header')
  <!-- Hero Section -->
  <section class="business-hero">
    <div class="container">
      <h1 class="hero-title">ACCEPT CRYPTO <span class="highlight">PAYMENTS</span></h1>
      <p class="hero-subtitle">
        Grow your business with secure, instant cryptocurrency payments. Accept 40+ coins with zero chargebacks.
      </p>
      <a href="#" class="btn btn-primary-hero">Start Accepting Crypto</a>
    </div>
  </section>

  <!-- Solutions -->
  <section class="solutions-section">
    <div class="container">
      <h2 class="section-title">INDUSTRY SOLUTIONS</h2>
      <div class="solutions-grid">
        <div class="solution-card">
          <div class="solution-icon">
            <i class="fas fa-shopping-cart"></i>
          </div>
          <h3 class="solution-title">E-commerce</h3>
          <p>Accept crypto payments on your online store with easy plugins</p>
        </div>

        <div class="solution-card">
          <div class="solution-icon">
            <i class="fas fa-gamepad"></i>
          </div>
          <h3 class="solution-title">iGaming</h3>
          <p>Fast deposits and withdrawals for gaming platforms</p>
        </div>

        <div class="solution-card">
          <div class="solution-icon">
            <i class="fas fa-gem"></i>
          </div>
          <h3 class="solution-title">Luxury Retail</h3>
          <p>High-value transactions with global clientele</p>
        </div>

        <div class="solution-card">
          <div class="solution-icon">
            <i class="fas fa-chart-line"></i>
          </div>
          <h3 class="solution-title">Forex & Trading</h3>
          <p>Borderless deposits and withdrawals for traders</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Benefits -->
  <section class="benefits-section">
    <div class="container">
      <h2 class="section-title">WHY CHOOSE GETNOWPAY</h2>
      <div class="benefits-grid">
        <div class="benefit-item">
          <div class="benefit-icon">
            <i class="fas fa-shield-alt"></i>
          </div>
          <div class="benefit-content">
            <h3>MPC Security</h3>
            <p>Enterprise-grade security with multi-party computation technology</p>
          </div>
        </div>

        <div class="benefit-item">
          <div class="benefit-icon">
            <i class="fas fa-bolt"></i>
          </div>
          <div class="benefit-content">
            <h3>Instant Settlement</h3>
            <p>Receive payments instantly with no banking delays</p>
          </div>
        </div>

        <div class="benefit-item">
          <div class="benefit-icon">
            <i class="fas fa-globe"></i>
          </div>
          <div class="benefit-content">
            <h3>Global Reach</h3>
            <p>Accept payments from customers anywhere in the world</p>
          </div>
        </div>

        <div class="benefit-item">
          <div class="benefit-icon">
            <i class="fas fa-percentage"></i>
          </div>
          <div class="benefit-content">
            <h3>Lower Fees</h3>
            <p>Save up to 90% compared to traditional payment processors</p>
          </div>
        </div>

        <div class="benefit-item">
          <div class="benefit-icon">
            <i class="fas fa-ban"></i>
          </div>
          <div class="benefit-content">
            <h3>Zero Chargebacks</h3>
            <p>Cryptocurrency payments are final and irreversible</p>
          </div>
        </div>

        <div class="benefit-item">
          <div class="benefit-icon">
            <i class="fas fa-sync-alt"></i>
          </div>
          <div class="benefit-content">
            <h3>Auto Conversion</h3>
            <p>Automatically convert crypto to fiat or keep as crypto</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Integration -->
  <section class="integration-section">
    <div class="container">
      <h2 class="section-title">SEAMLESS INTEGRATION</h2>
      <p class="hero-subtitle">Connect with your existing systems in minutes</p>
      
      <div class="integration-logos">
        <div class="integration-logo">SHOPIFY</div>
        <div class="integration-logo">WOOCOMMERCE</div>
        <div class="integration-logo">MAGENTO</div>
        <div class="integration-logo">API</div>
        <div class="integration-logo">WEBHOOKS</div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="cta-section">
    <div class="container">
      <h2 class="section-title">READY TO GROW YOUR BUSINESS?</h2>
      <p class="hero-subtitle">Join 250,000+ merchants using GETNOWPAY</p>
      <div class="mt-4">
        <a href="#" class="btn btn-primary-hero me-3">Book a Demo</a>
        <a href="{{ url('register') }}" class="btn btn-signup">Start Free Trial</a>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="footer-logo">GETNOWPAY</div>
      <p>Enterprise Crypto Payment Solutions</p>
      <div class="footer-bottom">
        <p>&copy; 2025 GETNOWPAY. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>