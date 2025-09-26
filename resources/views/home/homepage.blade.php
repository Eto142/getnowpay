<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GETNOWPAY - Bank Yourself</title>
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
      --text-muted: rgba(255, 255, 255, 0.8);
    }

    body {
      background: linear-gradient(135deg, #0a0a0a 0%, #1a1a2e 50%, #16213e 100%);
      color: white;
      font-family: 'Inter', sans-serif;
      overflow-x: hidden;
      line-height: 1.6;
    }

    h1, h2, h3, h4, h5, h6 {
      font-weight: 700;
      line-height: 1.2;
    }

    /* Header Styles */
    .navbar {
      background: rgba(0, 0, 0, 0.95);
      backdrop-filter: blur(10px);
      padding: 1rem 0;
      transition: all 0.3s ease;
    }

    .navbar.scrolled {
      padding: 0.7rem 0;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand {
      font-size: 1.8rem;
      font-weight: 800;
      color: white !important;
      display: flex;
      align-items: center;
    }

    .navbar-brand i {
      margin-right: 0.5rem;
      font-size: 1.5rem;
    }

    .navbar-nav .nav-link {
      color: rgba(255, 255, 255, 0.85) !important;
      margin: 0 0.5rem;
      font-weight: 500;
      font-size: 0.95rem;
      transition: all 0.3s ease;
      position: relative;
    }

    .navbar-nav .nav-link:hover {
      color: var(--primary-blue) !important;
    }

    .navbar-nav .nav-link::after {
      content: '';
      position: absolute;
      bottom: -5px;
      left: 0;
      width: 0;
      height: 2px;
      background: var(--primary-blue);
      transition: width 0.3s ease;
    }

    .navbar-nav .nav-link:hover::after {
      width: 100%;
    }

    .navbar-toggler {
      border: none;
      color: white;
      font-size: 1.5rem;
    }

    .navbar-toggler:focus {
      box-shadow: none;
    }

    .btn-login {
      border: 2px solid rgba(255, 255, 255, 0.3);
      color: white;
      padding: 0.5rem 1.5rem;
      border-radius: 25px;
      margin-right: 1rem;
      font-weight: 500;
      transition: all 0.3s ease;
    }

    .btn-login:hover {
      background: rgba(255, 255, 255, 0.1);
      border-color: var(--primary-blue);
    }

    .btn-signup {
      background: white;
      color: #000;
      padding: 0.5rem 1.5rem;
      border-radius: 25px;
      border: none;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .btn-signup:hover {
      background: var(--primary-blue);
      color: white;
      transform: translateY(-2px);
    }

    /* Hero Section */
    .hero-section {
      min-height: 100vh;
      display: flex;
      align-items: center;
      position: relative;
      background: url('images/car.jpg') no-repeat center center/cover;
      color: white;
      text-align: left;
      padding: 6rem 0 4rem;
    }

    .hero-section::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.7);
      z-index: 1;
    }

    .hero-content {
      z-index: 2;
      position: relative;
    }

    .hero-title {
      font-size: 4rem;
      font-weight: 900;
      letter-spacing: 0.05em;
      margin-bottom: 1.5rem;
      text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6);
    }

    .hero-subtitle {
      font-size: 1.25rem;
      margin-bottom: 2.5rem;
      max-width: 700px;
      opacity: 0.9;
      font-weight: 400;
      line-height: 1.6;
    }

    .hero-buttons {
      display: flex;
      gap: 1rem;
      flex-wrap: wrap;
    }

    .btn-primary-hero {
      background: var(--primary-blue);
      border: none;
      padding: 1rem 2rem;
      border-radius: 25px;
      font-size: 1.1rem;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .btn-primary-hero:hover {
      background: #3367d6;
      transform: translateY(-2px);
      box-shadow: 0 10px 20px rgba(66, 133, 244, 0.3);
    }

    .btn-secondary-hero {
      background: rgba(255, 255, 255, 0.1);
      border: 2px solid rgba(255, 255, 255, 0.3);
      color: white;
      padding: 1rem 2rem;
      border-radius: 25px;
      font-size: 1.1rem;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .btn-secondary-hero:hover {
      background: rgba(255, 255, 255, 0.2);
      border-color: rgba(255, 255, 255, 0.5);
      transform: translateY(-2px);
    }

    .highlight {
      color: var(--primary-blue);
    }

    /* Stats Section */
    .stats-section {
      padding: 5rem 0;
      background: rgba(0, 0, 0, 0.3);
    }

    .stat-item {
      text-align: center;
      padding: 2rem;
      position: relative;
    }

    .stat-item:not(:last-child)::after {
      content: '';
      position: absolute;
      right: 0;
      top: 50%;
      transform: translateY(-50%);
      height: 60%;
      width: 1px;
      background: rgba(255, 255, 255, 0.1);
    }

    .stat-number {
      font-size: 3.5rem;
      font-weight: 800;
      color: white;
      margin-bottom: 0.5rem;
    }

    .stat-label {
      font-size: 0.9rem;
      color: rgba(255, 255, 255, 0.7);
      text-transform: uppercase;
      letter-spacing: 0.1em;
      line-height: 1.4;
      font-weight: 500;
    }

    /* Trusted By Section */
    .trusted-section {
      padding: 4rem 0;
      text-align: center;
    }

    .trusted-title {
      font-size: 1.8rem;
      margin-bottom: 3rem;
      letter-spacing: 0.1em;
      opacity: 0.9;
      font-weight: 600;
    }

    .company-logos {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      gap: 2.5rem;
    }

    .company-logo {
      font-size: 1.3rem;
      font-weight: 600;
      color: rgba(255, 255, 255, 0.7);
      text-transform: uppercase;
      letter-spacing: 0.1em;
      transition: all 0.3s ease;
    }

    .company-logo:hover {
      color: var(--primary-blue);
      transform: translateY(-3px);
    }

    /* Features Section */
    .features-section {
      padding: 5rem 0;
    }

    .section-title {
      font-size: 3.2rem;
      font-weight: 800;
      text-align: center;
      margin-bottom: 4rem;
      letter-spacing: 0.05em;
    }

    .feature-card {
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 15px;
      padding: 3rem 2rem;
      height: 100%;
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .feature-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 4px;
      background: var(--primary-blue);
      transform: scaleX(0);
      transition: transform 0.3s ease;
    }

    .feature-card:hover {
      transform: translateY(-10px);
      border-color: rgba(255, 255, 255, 0.2);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }

    .feature-card:hover::before {
      transform: scaleX(1);
    }

    .feature-card.highlighted {
      border: 2px solid rgba(255, 255, 255, 0.3);
      background: rgba(255, 255, 255, 0.08);
    }

    .feature-title {
      font-size: 1.7rem;
      font-weight: 700;
      margin-bottom: 1.5rem;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      line-height: 1.3;
    }

    .feature-description {
      font-size: 1rem;
      line-height: 1.6;
      color: rgba(255, 255, 255, 0.8);
      font-weight: 400;
    }

    /* Benefits Section */
    .benefits-section {
      padding: 5rem 0;
      text-align: center;
    }

    .benefits-intro {
      font-size: 1.2rem;
      margin-bottom: 3rem;
      opacity: 0.9;
      max-width: 700px;
      margin-left: auto;
      margin-right: auto;
    }

    .benefits-title {
      font-size: 3.5rem;
      font-weight: 800;
      letter-spacing: 0.05em;
      margin-bottom: 0.5rem;
    }

    .benefits-subtitle {
      font-size: 3.5rem;
      font-weight: 800;
      letter-spacing: 0.05em;
      color: rgba(255, 255, 255, 0.7);
    }

    /* Wallet Card Styles */
    .wallet-card {
      background: rgba(255, 255, 255, 0.95);
      border-radius: 20px;
      padding: 2rem;
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
      color: #333;
      transition: all 0.3s ease;
    }

    .wallet-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
    }

    .wallet-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 1.5rem;
      padding-bottom: 1rem;
      border-bottom: 1px solid #eee;
    }

    .wallet-nav {
      display: flex;
      gap: 1rem;
      margin-bottom: 1.5rem;
      flex-wrap: wrap;
    }

    .wallet-nav-item {
      color: #666;
      text-decoration: none;
      font-weight: 500;
      padding: 0.5rem 0;
      border-bottom: 2px solid transparent;
      white-space: nowrap;
      transition: all 0.3s ease;
    }

    .wallet-nav-item:hover, .wallet-nav-item.active {
      color: var(--primary-blue);
      border-bottom-color: var(--primary-blue);
    }

    .crypto-item {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0.75rem 0;
      border-bottom: 1px solid #f0f0f0;
      transition: all 0.3s ease;
    }

    .crypto-item:hover {
      background: rgba(66, 133, 244, 0.05);
      padding-left: 0.5rem;
      padding-right: 0.5rem;
      border-radius: 8px;
    }

    .crypto-info {
      display: flex;
      align-items: center;
      gap: 1rem;
    }

    .crypto-icon {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      color: white;
      font-size: 1rem;
    }

    .crypto-balance {
      text-align: right;
    }

    .crypto-amount {
      font-weight: 600;
      color: #333;
    }

    .crypto-usd {
      font-size: 0.9rem;
      color: #666;
    }

    /* Invoice Card Styles */
    .invoice-card {
      background: rgba(255, 255, 255, 0.95);
      border-radius: 20px;
      padding: 2rem;
      color: #333;
      transition: all 0.3s ease;
    }

    .invoice-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
    }

    .invoice-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 2rem;
    }

    .invoice-status {
      background: #e8f5e8;
      color: #2d5a2d;
      padding: 0.25rem 0.75rem;
      border-radius: 20px;
      font-size: 0.9rem;
      font-weight: 500;
    }

    .invoice-section {
      margin-bottom: 2rem;
    }

    .invoice-section h6 {
      color: #666;
      font-size: 0.9rem;
      margin-bottom: 1rem;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      font-weight: 600;
    }

    .invoice-field {
      margin-bottom: 1rem;
    }

    .invoice-field label {
      display: block;
      font-size: 0.8rem;
      color: #666;
      margin-bottom: 0.25rem;
      text-transform: uppercase;
      font-weight: 500;
    }

    .invoice-field .value {
      font-weight: 500;
      color: #333;
    }

    .invoice-table {
      width: 100%;
      margin-bottom: 2rem;
    }

    .invoice-table th {
      font-size: 0.8rem;
      color: #666;
      text-transform: uppercase;
      padding: 0.5rem 0;
      border-bottom: 1px solid #eee;
      font-weight: 600;
    }

    .invoice-table td {
      padding: 0.75rem 0;
      border-bottom: 1px solid #f5f5f5;
    }

    /* Features Grid */
    .features-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 2rem;
      margin: 4rem 0;
    }

    /* Transaction Card Styles */
    .transaction-card {
      background: rgba(255, 255, 255, 0.95);
      border-radius: 20px;
      padding: 2rem;
      color: #333;
      transition: all 0.3s ease;
    }

    .transaction-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
    }

    .transaction-header {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      margin-bottom: 2rem;
    }

    .transaction-amount {
      text-align: right;
    }

    .transaction-steps {
      margin-bottom: 2rem;
    }

    .step-item {
      display: flex;
      align-items: center;
      gap: 1rem;
      padding: 0.5rem 0;
    }

    .step-icon {
      width: 24px;
      height: 24px;
      border-radius: 50%;
      background: var(--primary-blue);
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 0.8rem;
      flex-shrink: 0;
    }

    .step-text {
      flex: 1;
      font-size: 0.9rem;
    }

    .step-time {
      font-size: 0.8rem;
      color: #666;
    }

    .transaction-details {
      background: #f8f9fa;
      border-radius: 8px;
      padding: 1.5rem;
    }

    .detail-row {
      display: flex;
      justify-content: space-between;
      margin-bottom: 0.75rem;
    }

    .detail-label {
      font-size: 0.9rem;
      color: #666;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      font-weight: 500;
    }

    .detail-value {
      font-weight: 500;
      color: #333;
    }

    .copy-btn {
      background: none;
      border: none;
      color: var(--primary-blue);
      cursor: pointer;
      font-size: 0.9rem;
      transition: all 0.3s ease;
    }

    .copy-btn:hover {
      color: #3367d6;
    }

    /* Content Sections */
    .content-section {
      padding: 5rem 0;
      background: rgba(0, 0, 0, 0.2);
    }

    .content-section:nth-child(even) {
      background: rgba(0, 0, 0, 0.4);
    }

    /* Crypto Section */
    .crypto-section {
      background: #0b1220;
      color: #fff;
      text-align: center;
      padding: 80px 20px;
    }

    .crypto-content h2 {
      font-size: 3rem;
      font-weight: 800;
      margin-bottom: 1rem;
    }

    .crypto-content h2 .highlight {
      color: #2a65f7;
    }

    .crypto-content p {
      font-size: 2rem;
      font-weight: 300;
      letter-spacing: 0.05em;
      margin: 0;
    }

    /* Footer Styles */
    footer {
      background: #0a0a0a;
      color: white;
      padding: 4rem 0 2rem;
    }

    .footer-logo {
      font-size: 1.8rem;
      font-weight: 800;
      margin-bottom: 1.5rem;
      display: flex;
      align-items: center;
    }

    .footer-logo i {
      margin-right: 0.5rem;
    }

    .footer-description {
      color: rgba(255, 255, 255, 0.7);
      margin-bottom: 2rem;
      line-height: 1.6;
    }

    .footer-heading {
      font-size: 1.2rem;
      font-weight: 700;
      margin-bottom: 1.5rem;
      text-transform: uppercase;
      letter-spacing: 0.05em;
    }

    .footer-links {
      list-style: none;
      padding: 0;
    }

    .footer-links li {
      margin-bottom: 0.8rem;
    }

    .footer-links a {
      color: rgba(255, 255, 255, 0.7);
      text-decoration: none;
      transition: color 0.3s;
      font-weight: 400;
    }

    .footer-links a:hover {
      color: var(--primary-blue);
    }

    .social-icons {
      display: flex;
      gap: 1rem;
      margin-top: 1.5rem;
    }

    .social-icons a {
      color: rgba(255, 255, 255, 0.7);
      font-size: 1.5rem;
      transition: all 0.3s ease;
    }

    .social-icons a:hover {
      color: var(--primary-blue);
      transform: translateY(-3px);
    }

    .footer-bottom {
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      padding-top: 2rem;
      margin-top: 3rem;
      text-align: center;
      color: rgba(255, 255, 255, 0.5);
      font-size: 0.9rem;
    }

    .footer-bottom a {
      color: rgba(255, 255, 255, 0.7);
      text-decoration: none;
      transition: color 0.3s;
    }

    .footer-bottom a:hover {
      color: var(--primary-blue);
    }

    /* Responsive Design */
    @media (max-width: 1200px) {
      .hero-title {
        font-size: 3.5rem;
      }
      .section-title {
        font-size: 2.8rem;
      }
      .benefits-title, .benefits-subtitle {
        font-size: 3rem;
      }
    }

    @media (max-width: 992px) {
      .hero-title {
        font-size: 3rem;
      }
      .section-title {
        font-size: 2.5rem;
      }
      .benefits-title, .benefits-subtitle {
        font-size: 2.5rem;
      }
      .crypto-content h2 {
        font-size: 2.5rem;
      }
      .crypto-content p {
        font-size: 1.5rem;
      }
      .stat-number {
        font-size: 3rem;
      }
      .stat-item:not(:last-child)::after {
        display: none;
      }
      .navbar-nav {
        text-align: center;
        padding: 1rem 0;
      }
      .navbar-nav .nav-link {
        margin: 0.5rem 0;
      }
      .navbar-collapse {
        background: rgba(0, 0, 0, 0.95);
        padding: 1rem;
        border-radius: 10px;
        margin-top: 1rem;
      }
    }

    @media (max-width: 768px) {
      .hero-title {
        font-size: 2.5rem;
        text-align: center;
      }
      .hero-subtitle {
        text-align: center;
        font-size: 1.1rem;
      }
      .hero-buttons {
        justify-content: center;
      }
      .stat-item {
        border-right: none;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        text-align: center;
        padding: 1.5rem;
      }
      .stat-number {
        font-size: 2.5rem;
      }
      .company-logos {
        justify-content: center;
        gap: 1.5rem;
      }
      .section-title {
        font-size: 2.2rem;
      }
      .benefits-title, .benefits-subtitle {
        font-size: 2.2rem;
      }
      .wallet-header {
        flex-direction: column;
        gap: 1rem;
        text-align: center;
      }
      .wallet-nav {
        justify-content: center;
      }
      .invoice-header {
        flex-direction: column;
        gap: 1rem;
        text-align: center;
      }
      .transaction-header {
        flex-direction: column;
        gap: 1rem;
      }
      .transaction-amount {
        text-align: left;
      }
      .detail-row {
        flex-direction: column;
        gap: 0.25rem;
      }
      .features-grid {
        grid-template-columns: 1fr;
      }
      .company-logo {
        font-size: 1.1rem;
      }
      .crypto-content h2 {
        font-size: 2rem;
      }
      .crypto-content p {
        font-size: 1.3rem;
      }
      .hero-section {
        padding: 5rem 0 3rem;
      }
    }

    @media (max-width: 576px) {
      .hero-title {
        font-size: 2rem;
      }
      .section-title {
        font-size: 1.8rem;
      }
      .benefits-title, .benefits-subtitle {
        font-size: 1.8rem;
      }
      .company-logo {
        font-size: 1rem;
      }
      .wallet-nav {
        gap: 0.5rem;
      }
      .wallet-nav-item {
        font-size: 0.9rem;
      }
      .crypto-content h2 {
        font-size: 1.8rem;
      }
      .crypto-content p {
        font-size: 1.1rem;
      }
      .hero-buttons .btn {
        width: 100%;
        text-align: center;
      }
      .navbar-brand {
        font-size: 1.5rem;
      }
      .btn-login, .btn-signup {
        padding: 0.4rem 1rem;
        font-size: 0.9rem;
      }
    }
  </style>
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><i class="fas fa-university"></i> GETNOWPAY</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item"><a class="nav-link" href="#">FOR BUSINESSES </a></li>
          <li class="nav-item"><a class="nav-link" href="#">FOR INDIVIDUALS </a></li>
          <li class="nav-item"><a class="nav-link" href="#">RESOURCES </a></li>
          <li class="nav-item"><a class="nav-link" href="#">COINS</a></li>
          <li class="nav-item"><a class="nav-link" href="#">SUPPORT</a></li>
        </ul>
        <div class="d-flex">
           <a href="{{ route('login') }}" class="btn btn-login">LOG IN</a>
              <a href="{{ url('register') }}" class="btn btn-signup">SIGN UP</a>
         
        </div>
      </div>
    </div>
  </nav>

  <!-- Hero Section (with car image) -->
  <section class="hero-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <div class="hero-content">
            <h1 class="hero-title">BANK YOURSELF</h1>
            <p class="hero-subtitle">
              Instant and reliable payments for businesses and individuals, built on Multi-Party Computation (MPC) custody.
            </p>
            <div class="hero-buttons">
             <a href="{{ url('register') }}" class="btn btn-primary-hero">Get Started Now</a>
              <a href="{{ route('login') }}" class="btn btn-secondary-hero">Login</a>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Stats Section -->
  <section class="stats-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="stat-item">
            <div class="stat-number">14<span style="font-size: 2rem;">+</span></div>
            <div class="stat-label">YEARS OF EXPERTISE<br>IN CRYPTOPROCESSING</div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="stat-item">
            <div class="stat-number">250K<span style="font-size: 2rem;">+</span></div>
            <div class="stat-label">MERCHANTS ACROSS<br>THE GLOBE</div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="stat-item">
            <div class="stat-number">1M<span style="font-size: 2rem;">+</span></div>
            <div class="stat-label">CRYPTO WALLET<br>USERS</div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="stat-item">
            <div class="stat-number">$50B<span style="font-size: 2rem;">+</span></div>
            <div class="stat-label">TRANSACTION VOLUME<br>PROCESSED</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Trusted By Section -->
  <section class="trusted-section">
    <div class="container">
      <h2 class="trusted-title">TRUSTED BY THOUSANDS OF COMPANIES</h2>
      <div class="company-logos">
        <div class="company-logo">🚀 JETCRAFT</div>
        <div class="company-logo">🌐 OVERSTOCK</div>
        <div class="company-logo">⚡ PRAXIS</div>
        <div class="company-logo">🔷 NSUS</div>
        <div class="company-logo">🏗️ BETCONSTRUCT</div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section class="features-section">
    <div class="container">
      <h2 class="section-title">KEY FEATURES</h2>
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="feature-card">
            <h3 class="feature-title">MULTI-USER<br>ACCOUNT<br>DELEGATION</h3>
            <p class="feature-description">
              Secure management, streamlined. New permissions system enables shared access while keeping your account safe. Empower larger teams with confidence and control.
            </p>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="feature-card highlighted">
            <h3 class="feature-title">MPC-BACKED<br>NODE<br>INFRASTRUCTURE</h3>
            <p class="feature-description">
              Next-gen security, built in. With multi-party computation (MPC), private keys are never stored in one place or exposed in full - even during signing. Each transaction is authorized by multiple parties, ensuring maximum protection.
            </p>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="feature-card">
            <h3 class="feature-title">IN-HOUSE<br>BLOCKCHAIN<br>INTELLIGENCE,<br>EVOLVED</h3>
            <p class="feature-description">
              Track funds, assess risk, and detect fraud with precision. Our proprietary system analyzes transactions in real time - flagging tainted or suspicious activity before it impacts your business.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Benefits Section -->
  <section class="benefits-section">
    <div class="container">
      <p class="benefits-intro">
        Connect with our sales team to explore tailored crypto payment solutions for your business.
      </p>
      <button class="btn btn-secondary-hero mb-5">Book a Demo</button>
      <h2 class="benefits-title">KEY BENEFITS</h2>
      <h3 class="benefits-subtitle">THAT SET US APART</h3>
    </div>
  </section>

  <!-- Withdrawal Fees Section -->
  <section class="content-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <h1 class="hero-title">
            SAVE UP<br>
            TO <span class="highlight">90%</span> ON<br>
            WITHDRAWAL<br>
            FEES
          </h1>
          <p class="hero-subtitle">
            Save time and money by batching withdrawals from multiple callback addresses, paying just one transaction fee.
          </p>
        </div>
        <div class="col-lg-6">
          <div class="wallet-card">
            <div class="wallet-header">
              <div class="d-flex align-items-center gap-2">
                <i class="fas fa-arrow-left"></i>
                <strong>GETNOWPAY</strong>
              </div>
              <div class="d-flex align-items-center gap-3">
                <span>Balances</span>
                <div class="d-flex gap-2">
                  <i class="fas fa-bell"></i>
                  <i class="fas fa-user"></i>
                </div>
              </div>
            </div>
            
            <div class="wallet-nav">
              <a href="#" class="wallet-nav-item active">Wallet</a>
              <a href="#" class="wallet-nav-item">Transactions</a>
              <a href="#" class="wallet-nav-item">Settings</a>
              <a href="#" class="wallet-nav-item">Integrations</a>
              <a href="#" class="wallet-nav-item">Invoicing</a>
              <a href="#" class="wallet-nav-item">Bank Payout</a>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
              <div class="input-group" style="max-width: 300px;">
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <span>Show All Coins</span>
              <strong>$4000.00 USD</strong>
            </div>

            <div class="crypto-list">
              <div class="crypto-item">
                <div class="crypto-info">
                  <div class="crypto-icon" style="background: #f7931a;">₿</div>
                  <div>
                    <div class="fw-bold">Bitcoin</div>
                    <div class="text-muted small">BTC</div>
                  </div>
                </div>
                <div class="crypto-balance">
                  <div class="crypto-amount">0.00000000 BTC</div>
                  <div class="crypto-usd">$0.00 USD</div>
                </div>
              </div>

              <div class="crypto-item">
                <div class="crypto-info">
                  <div class="crypto-icon" style="background: #345d9d;">Ł</div>
                  <div>
                    <div class="fw-bold">Litecoin</div>
                    <div class="text-muted small">LTC</div>
                  </div>
                </div>
                <div class="crypto-balance">
                  <div class="crypto-amount">0.00000000 LTC</div>
                  <div class="crypto-usd">$0.00 USD</div>
                </div>
              </div>

              <div class="crypto-item">
                <div class="crypto-info">
                  <div class="crypto-icon" style="background: #627eea;">Ξ</div>
                  <div>
                    <div class="fw-bold">Ethereum</div>
                    <div class="text-muted small">ETH</div>
                  </div>
                </div>
                <div class="crypto-balance">
                  <div class="crypto-amount">0.00000000 ETH</div>
                  <div class="crypto-usd">$0.00 USD</div>
                </div>
              </div>

              <div class="crypto-item">
                <div class="crypto-info">
                  <div class="crypto-icon" style="background: #00d4aa;">$</div>
                  <div>
                    <div class="fw-bold">Bitcoin Cash</div>
                    <div class="text-muted small">BCH</div>
                  </div>
                </div>
                <div class="crypto-balance">
                  <div class="crypto-amount">0.00000000 BCH</div>
                  <div class="crypto-usd">$0.00 USD</div>
                </div>
              </div>

              <div class="crypto-item">
                <div class="crypto-info">
                  <div class="crypto-icon" style="background: #c2a633;">D</div>
                  <div>
                    <div class="fw-bold">Dogecoin</div>
                    <div class="text-muted small">DOGE</div>
                  </div>
                </div>
                <div class="crypto-balance">
                  <div class="crypto-amount">0.00000000 DOGE</div>
                  <div class="crypto-usd">$0.00 USD</div>
                </div>
              </div>
            </div>

            <div class="text-center mt-3">
              <button class="btn btn-primary">+ New Transaction</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Invoice Section -->
  <section class="content-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <h1 class="hero-title">
            ACCURATE<br>
            <span class="highlight">FIXED-RATE</span><br>
            INVOICING
          </h1>
          <p class="hero-subtitle">
            Guarantee your payments with fixed-rate invoicing. Receive the exact amount you bill, every time.
          </p>
        </div>
        <div class="col-lg-6">
          <div class="invoice-card">
            <div class="invoice-header">
              <div class="d-flex align-items-center gap-2">
                <i class="fas fa-arrow-left"></i>
                <strong>GETNOWPAY</strong>
              </div>
              <div class="invoice-status">COMPLETED</div>
            </div>

            <div class="invoice-section">
              <h6>Buyer Information</h6>
              <div class="row">
                <div class="col-md-6">
                  <div class="invoice-field">
                    <label>Email</label>
                    <div class="value">merchantemail@gmail.com</div>
                  </div>
                  <div class="invoice-field">
                    <label>First Name</label>
                    <div class="value">Nathaniel</div>
                  </div>
                  <div class="invoice-field">
                    <label>Company Name</label>
                    <div class="value">COMPANY</div>
                  </div>
                  <div class="invoice-field">
                    <label>Phone Number</label>
                    <div class="value">+44 12345-6789-00</div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="invoice-field">
                    <label>Invoice Date</label>
                    <div class="value">24 Aug 2025</div>
                  </div>
                  <div class="invoice-field">
                    <label>Last Name</label>
                    <div class="value">Surname</div>
                  </div>
                  <div class="invoice-field">
                    <label>Due Date (Optional)</label>
                    <div class="value">26 Aug 2025</div>
                  </div>
                  <div class="invoice-field">
                    <label>Invoice Number</label>
                    <div class="value">1111</div>
                  </div>
                </div>
              </div>
            </div>

            <table class="invoice-table">
              <thead>
                <tr>
                  <th>Description</th>
                  <th>Units</th>
                  <th>Price</th>
                  <th>Discount</th>
                  <th>Amount</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Payment Aug 2025</td>
                  <td>1</td>
                  <td>$1000.00</td>
                  <td>$0.00</td>
                  <td>$1000.00</td>
                </tr>
              </tbody>
            </table>

            <div class="text-end">
              <div><strong>SUBTOTAL: $1000.00</strong></div>
              <div><strong>TOTAL: $1000.00</strong></div>
            </div>

            <div class="text-center mt-4">
              <button class="btn btn-dark">Pay using GETNOWPAY</button>
              <div class="mt-2">
                <a href="#" class="text-muted">Download PDF</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Features Grid -->
  <section class="content-section">
    <div class="container">
      <div class="features-grid">
        <div class="feature-card">
          <h3 class="feature-title">FIAT CONVERSION MADE EASY</h3>
          <p class="feature-description">
            Accept credit card payments and receive crypto directly in your wallet, or convert your crypto earnings into fiat currencies and deposit them into your bank.
          </p>
        </div>
        
        <div class="feature-card">
          <h3 class="feature-title">AUTOMATIC FUND RECOVERY</h3>
          <p class="feature-description">
            Recovering funds sent to the wrong address on the same chain is as easy as flipping a switch. No waiting, no stress, no support needed.
          </p>
        </div>
        
        <div class="feature-card">
          <h3 class="feature-title">INSURED FUNDS FOR MERCHANTS</h3>
          <p class="feature-description">
            Store your funds with confidence. Our custody services are insured to protect your assets.
          </p>
        </div>
        
        <div class="feature-card">
          <h3 class="feature-title">SEAMLESS INTEGRATION</h3>
          <p class="feature-description">
            Easy integration with existing e-commerce platforms, accounting software, and point-of-sale systems.
          </p>
        </div>
        
        <div class="feature-card">
          <h3 class="feature-title">MULTI-SIG CUSTODY FOR ENTERPRISES</h3>
          <p class="feature-description">
            Enterprise-grade security with multi-signature wallet technology for large-scale operations.
          </p>
        </div>
        
        <div class="feature-card">
          <h3 class="feature-title">TELEGRAM PAYMENT BOT</h3>
          <p class="feature-description">
            Accept payments directly through Telegram with our integrated payment bot solution.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Transaction Verification Section -->
  <section class="content-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <h1 class="hero-title">
            <span class="highlight">INSTANT</span><br>
            TRANSACTION<br>
            VERIFICATION
          </h1>
          <p class="hero-subtitle">
            See incoming deposits within seconds, not minutes. No more waiting for blockchain confirmations.
          </p>
        </div>
        <div class="col-lg-6">
          <div class="transaction-card">
            <div class="transaction-header">
              <div>
                <div class="small text-muted">17/01/2025</div>
                <div class="small text-muted">16:34:5</div>
                <div class="mt-2">
                  <span class="badge bg-success">Payment</span>
                  <span class="badge bg-primary ms-1">Completed</span>
                </div>
              </div>
              <div class="transaction-amount">
                <div><strong>Bitcoin BTC</strong></div>
                <div class="small text-muted">To internal address</div>
                <div class="mt-2"><strong>+ 0.0026 BTC</strong></div>
                <div class="small text-muted">+ $80.00 USD</div>
              </div>
            </div>

            <div class="transaction-steps">
              <div class="step-item">
                <div class="step-icon">📋</div>
                <div class="step-text">Pending</div>
                <div class="step-time">13:48, 17/01/2025</div>
              </div>
              <div class="step-item">
                <div class="step-icon">🔄</div>
                <div class="step-text">10/10 ⚡ Confirmations</div>
                <div class="step-time">14:51, 17/01/2025</div>
              </div>
              <div class="step-item">
                <div class="step-icon">💰</div>
                <div class="step-text">Scheduled for payout</div>
                <div class="step-time">15:06, 17/01/2025</div>
              </div>
              <div class="step-item">
                <div class="step-icon">✅</div>
                <div class="step-text">Completed</div>
                <div class="step-time">15:06, 17/01/2025</div>
              </div>
            </div>

            <div class="transaction-details">
              <div class="detail-row">
                <span class="detail-label">Current Transaction Value</span>
                <span class="detail-value">0.0026 BTC = $80.00 USD</span>
              </div>
              
              <div class="detail-row">
                <span class="detail-label">Payer Email</span>
                <span class="detail-value">example@email.com</span>
              </div>
              
              <div class="detail-row">
                <span class="detail-label">Payer First Name</span>
                <span class="detail-value">John</span>
              </div>
              
              <div class="detail-row">
                <span class="detail-label">Payer Last Name</span>
                <span class="detail-value">Smith</span>
              </div>
              
              <div class="detail-row">
                <span class="detail-label">Company Name</span>
                <span class="detail-value">Company123</span>
              </div>
              
              <div class="detail-row">
                <span class="detail-label">Payer Phone Number</span>
                <span class="detail-value">+123 45578501</span>
              </div>
              
              <div class="detail-row">
                <span class="detail-label">Checkout</span>
                <span class="detail-value text-primary">linkexample.com</span>
              </div>
              
              <div class="detail-row">
                <span class="detail-label">Receiver Address</span>
                <span class="detail-value">BTC wallet</span>
              </div>
              
              <div class="detail-row">
                <span class="detail-label">Support Transaction ID</span>
                <span class="detail-value">
                  38f3f35a17ce92e06ed4253d0f75ed21ccbcaeb8ff5478c15af0f10533ae
                  <button class="copy-btn ms-2">📋 Copy</button>
                </span>
              </div>
            </div>

            <div class="text-end mt-3">
              <div class="d-flex gap-2 justify-content-end">
                <span class="badge bg-secondary">USD</span>
                <span class="badge bg-secondary">💰</span>
                <span class="badge bg-primary">BTC</span>
              </div>
              <div class="mt-2">
                <div><strong>Amount: 0.0026 BTC</strong></div>
                <div><strong>Transaction Fee: 0.00000000 BTC</strong></div>
                <div><strong>Net: 0.0026 BTC</strong></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Cryptocurrencies Section -->
  <section class="crypto-section">
    <div class="container">
      <div class="crypto-content">
        <h2><span class="highlight">40+</span> CRYPTOCURRENCIES</h2>
        <p>ACCEPTED FOR PAYMENTS</p>
      </div>
    </div>
  </section>

  <!-- Benefits Section -->
  <section class="benefits-section">
    <div class="container">
      <h3 class="benefits-subtitle">Solutions for key markets</h3>
    </div>
  </section>

  <!-- Features Grid -->
  <section class="content-section">
    <div class="container">
      <div class="features-grid">
        <div class="feature-card">
          <h3 class="feature-title">Luxury Goods</h3>
          <p class="feature-description">
            Accept cryptocurrencies for high-value purchases online or in-store. Serve a global, privacy-conscious clientele with secure, fast settlement and minimal data sharing. Reduce card issues on high-ticket sales - no card chargebacks and fewer international card declines.
          </p>
        </div>
        
        <div class="feature-card">
          <h3 class="feature-title">Forex</h3>
          <p class="feature-description">
            Enable fast, borderless deposits and withdrawals for traders worldwide. Accept crypto without banking friction, delays, or local restrictions. Securely track payments with unique deposit addresses for each trader. Let traders pay with debit/credit cards while you receive crypto.
          </p>
        </div>
        
        <div class="feature-card">
          <h3 class="feature-title">Ecommerce</h3>
          <p class="feature-description">
            Easily integrate crypto payments via pre-built plugins. Accept borderless payments instantly without banking delays or high FX costs. Reach new customers by accepting popular cryptocurrencies.
          </p>
        </div>
        
        <div class="feature-card">
          <h3 class="feature-title">iGaming</h3>
          <p class="feature-description">
            Reach a global player base with fast crypto deposits and timely payouts. Reduce payment friction by avoiding card issuer declines and limits. Assign unique deposit addresses to players. Let players pay with debit/credit cards while you receive crypto.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Benefits Section -->
  <section class="benefits-section">
    <div class="container">
      <h2 class="benefits-title">Ready to Speak</h2>
      <h3 class="benefits-subtitle">to the Experts?</h3>
      <p class="benefits-intro">
        Connect with our team to explore how crypto payments can expand your business.
      </p>
      <button class="btn btn-secondary-hero mb-5">Book a Demo</button>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="footer-logo"><i class="fas fa-university"></i> GETNOWPAY</div>
          <p class="footer-description">
            Instant and reliable payments for businesses and individuals, built on Multi-Party Computation (MPC) custody.
          </p>
          <div class="social-icons">
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 mb-4">
          <h4 class="footer-heading">Products</h4>
          <ul class="footer-links">
            <li><a href="#">Crypto Payments</a></li>
            <li><a href="#">Crypto Wallet</a></li>
            <li><a href="#">Invoicing</a></li>
            <li><a href="#">Merchant Tools</a></li>
            <li><a href="#">API Documentation</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 mb-4">
          <h4 class="footer-heading">Solutions</h4>
          <ul class="footer-links">
            <li><a href="#">For Businesses</a></li>
            <li><a href="#">For Individuals</a></li>
            <li><a href="#">Luxury Goods</a></li>
            <li><a href="#">Forex</a></li>
            <li><a href="#">Ecommerce</a></li>
            <li><a href="#">iGaming</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 mb-4">
          <h4 class="footer-heading">Resources</h4>
          <ul class="footer-links">
            <li><a href="#">Help Center</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Developers</a></li>
            <li><a href="#">Status</a></li>
            <li><a href="#">Partners</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 mb-4">
          <h4 class="footer-heading">Company</h4>
          <ul class="footer-links">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Press</a></li>
            <li><a href="#">Security</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2023 GETNOWPAY. All rights reserved. | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Navbar scroll effect
    window.addEventListener('scroll', function() {
      const navbar = document.querySelector('.navbar');
      if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });

    // Copy button functionality
    document.querySelectorAll('.copy-btn').forEach(button => {
      button.addEventListener('click', function() {
        const textToCopy = this.parentElement.textContent.replace('📋 Copy', '').trim();
        navigator.clipboard.writeText(textToCopy).then(() => {
          const originalText = this.textContent;
          this.textContent = 'Copied!';
          setTimeout(() => {
            this.textContent = originalText;
          }, 2000);
        });
      });
    });
  </script>
</body>
</html>