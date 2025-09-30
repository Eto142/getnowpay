<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resources | GETNOWPAY</title>
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

    /* Header Styles */
    .navbar {
      background: rgba(0, 0, 0, 0.95);
      backdrop-filter: blur(10px);
      padding: 1rem 0;
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
      transition: all 0.3s ease;
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
      font-weight: 500;
    }

    .btn-signup {
      background: white;
      color: #000;
      padding: 0.5rem 1.5rem;
      border-radius: 25px;
      border: none;
      font-weight: 600;
    }

    /* Hero Section */
    .resources-hero {
      min-height: 40vh;
      display: flex;
      align-items: center;
      text-align: center;
      padding: 8rem 0 4rem;
    }

    .resources-hero-title {
      font-size: 3.5rem;
      font-weight: 900;
      margin-bottom: 1.5rem;
    }

    .highlight {
      color: var(--primary-blue);
    }

    /* Resources Grid */
    .resources-section {
      padding: 5rem 0;
    }

    .resources-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 2rem;
    }

    .resource-card {
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 15px;
      padding: 2.5rem;
      text-align: center;
      transition: all 0.3s ease;
    }

    .resource-card:hover {
      transform: translateY(-10px);
      border-color: var(--primary-blue);
    }

    .resource-icon {
      font-size: 3rem;
      margin-bottom: 1.5rem;
      color: var(--primary-blue);
    }

    .resource-title {
      font-size: 1.5rem;
      font-weight: 700;
      margin-bottom: 1rem;
    }

    .resource-description {
      color: rgba(255, 255, 255, 0.8);
      margin-bottom: 1.5rem;
    }

    .resource-link {
      color: var(--primary-blue);
      text-decoration: none;
      font-weight: 600;
    }

    /* Footer */
    footer {
      background: #0a0a0a;
      color: white;
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
      .resources-hero-title {
        font-size: 2.5rem;
      }
      .resources-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>
  <!-- Navigation -->
  @include('home.header')
  <!-- Hero Section -->
  <section class="resources-hero">
    <div class="container">
      <h1 class="resources-hero-title">RESOURCES</h1>
      <p class="lead">Everything you need to succeed with GETNOWPAY</p>
    </div>
  </section>

  <!-- Resources Grid -->
  <section class="resources-section">
    <div class="container">
      <div class="resources-grid">
        <!-- Documentation -->
        <div class="resource-card">
          <div class="resource-icon">
            <i class="fas fa-book"></i>
          </div>
          <h3 class="resource-title">Documentation</h3>
          <p class="resource-description">
            Comprehensive guides and API documentation for developers and businesses.
          </p>
          <a href="#" class="resource-link">Explore Docs →</a>
        </div>

        <!-- Help Center -->
        <div class="resource-card">
          <div class="resource-icon">
            <i class="fas fa-question-circle"></i>
          </div>
          <h3 class="resource-title">Help Center</h3>
          <p class="resource-description">
            Find answers to common questions and troubleshooting guides.
          </p>
          <a href="#" class="resource-link">Get Help →</a>
        </div>

        <!-- API Reference -->
        <div class="resource-card">
          <div class="resource-icon">
            <i class="fas fa-code"></i>
          </div>
          <h3 class="resource-title">API Reference</h3>
          <p class="resource-description">
            Technical documentation for integrating GETNOWPAY into your applications.
          </p>
          <a href="#" class="resource-link">View API →</a>
        </div>

        <!-- Blog -->
        <div class="resource-card">
          <div class="resource-icon">
            <i class="fas fa-blog"></i>
          </div>
          <h3 class="resource-title">Blog</h3>
          <p class="resource-description">
            Latest updates, industry insights, and crypto payment trends.
          </p>
          <a href="#" class="resource-link">Read Blog →</a>
        </div>

        <!-- Status -->
        <div class="resource-card">
          <div class="resource-icon">
            <i class="fas fa-server"></i>
          </div>
          <h3 class="resource-title">System Status</h3>
          <p class="resource-description">
            Check the current status of all GETNOWPAY services and APIs.
          </p>
          <a href="#" class="resource-link">View Status →</a>
        </div>

        <!-- Community -->
        <div class="resource-card">
          <div class="resource-icon">
            <i class="fas fa-users"></i>
          </div>
          <h3 class="resource-title">Community</h3>
          <p class="resource-description">
            Join our community of developers, merchants, and crypto enthusiasts.
          </p>
          <a href="#" class="resource-link">Join Community →</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="footer-logo">GETNOWPAY</div>
      <p>Instant and reliable payments for businesses and individuals</p>
      <div class="footer-bottom">
        <p>&copy; 2025 GETNOWPAY. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>