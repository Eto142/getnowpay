<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Supported Cryptocurrencies | GETNOWPAY</title>
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

    .navbar-nav .nav-link.active {
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

    .navbar-nav .nav-link:hover::after,
    .navbar-nav .nav-link.active::after {
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
    .coins-hero {
      min-height: 60vh;
      display: flex;
      align-items: center;
      position: relative;
      background: url('images/crypto-bg.jpg') no-repeat center center/cover;
      color: white;
      text-align: center;
      padding: 8rem 0 4rem;
    }

    .coins-hero::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.7);
      z-index: 1;
    }

    .coins-hero-content {
      z-index: 2;
      position: relative;
    }

    .coins-hero-title {
      font-size: 3.5rem;
      font-weight: 900;
      letter-spacing: 0.05em;
      margin-bottom: 1.5rem;
      text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6);
    }

    .coins-hero-subtitle {
      font-size: 1.25rem;
      margin-bottom: 2.5rem;
      max-width: 700px;
      margin-left: auto;
      margin-right: auto;
      opacity: 0.9;
      font-weight: 400;
      line-height: 1.6;
    }

    .highlight {
      color: var(--primary-blue);
    }

    /* Coins Section */
    .coins-section {
      padding: 5rem 0;
    }

    .section-title {
      font-size: 3.2rem;
      font-weight: 800;
      text-align: center;
      margin-bottom: 4rem;
      letter-spacing: 0.05em;
    }

    .coins-filter {
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 15px;
      padding: 1.5rem;
      margin-bottom: 3rem;
    }

    .filter-title {
      font-size: 1.2rem;
      font-weight: 600;
      margin-bottom: 1rem;
    }

    .filter-options {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem;
    }

    .filter-btn {
      background: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.2);
      color: white;
      padding: 0.5rem 1.5rem;
      border-radius: 25px;
      font-weight: 500;
      transition: all 0.3s ease;
    }

    .filter-btn:hover, .filter-btn.active {
      background: var(--primary-blue);
      border-color: var(--primary-blue);
    }

    .search-box {
      position: relative;
      max-width: 400px;
      margin-left: auto;
    }

    .search-box input {
      background: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.2);
      color: white;
      padding: 0.75rem 1rem 0.75rem 3rem;
      border-radius: 25px;
      width: 100%;
    }

    .search-box input:focus {
      outline: none;
      border-color: var(--primary-blue);
      box-shadow: 0 0 0 2px rgba(66, 133, 244, 0.2);
    }

    .search-box i {
      position: absolute;
      left: 1rem;
      top: 50%;
      transform: translateY(-50%);
      color: rgba(255, 255, 255, 0.7);
    }

    .coins-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 2rem;
    }

    .coin-card {
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 15px;
      padding: 2rem;
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .coin-card::before {
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

    .coin-card:hover {
      transform: translateY(-10px);
      border-color: rgba(255, 255, 255, 0.2);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }

    .coin-card:hover::before {
      transform: scaleX(1);
    }

    .coin-header {
      display: flex;
      align-items: center;
      margin-bottom: 1.5rem;
    }

    .coin-icon {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      color: white;
      font-size: 1.5rem;
      margin-right: 1rem;
    }

    .coin-name {
      font-size: 1.5rem;
      font-weight: 700;
      margin-bottom: 0.25rem;
    }

    .coin-symbol {
      font-size: 1rem;
      color: rgba(255, 255, 255, 0.7);
      text-transform: uppercase;
    }

    .coin-details {
      margin-bottom: 1.5rem;
    }

    .coin-detail {
      display: flex;
      justify-content: space-between;
      margin-bottom: 0.75rem;
      padding-bottom: 0.75rem;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .coin-detail:last-child {
      border-bottom: none;
    }

    .detail-label {
      color: rgba(255, 255, 255, 0.7);
      font-weight: 500;
    }

    .detail-value {
      font-weight: 600;
    }

    .price-up {
      color: #4ade80;
    }

    .price-down {
      color: #f87171;
    }

    .coin-actions {
      display: flex;
      gap: 1rem;
    }

    .coin-btn {
      flex: 1;
      text-align: center;
      padding: 0.75rem;
      border-radius: 10px;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .btn-buy {
      background: var(--primary-blue);
      color: white;
    }

    .btn-buy:hover {
      background: #3367d6;
      transform: translateY(-2px);
    }

    .btn-info {
      background: rgba(255, 255, 255, 0.1);
      color: white;
      border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .btn-info:hover {
      background: rgba(255, 255, 255, 0.2);
      transform: translateY(-2px);
    }

    /* Supported Chains Section */
    .chains-section {
      padding: 5rem 0;
      background: rgba(0, 0, 0, 0.3);
    }

    .chains-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
      gap: 1.5rem;
    }

    .chain-card {
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 15px;
      padding: 1.5rem;
      text-align: center;
      transition: all 0.3s ease;
    }

    .chain-card:hover {
      transform: translateY(-5px);
      border-color: rgba(255, 255, 255, 0.2);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .chain-icon {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 1rem;
      font-weight: bold;
      color: white;
      font-size: 1.5rem;
    }

    .chain-name {
      font-size: 1.2rem;
      font-weight: 600;
      margin-bottom: 0.5rem;
    }

    .chain-coins {
      color: rgba(255, 255, 255, 0.7);
      font-size: 0.9rem;
    }

    /* FAQ Section */
    .faq-section {
      padding: 5rem 0;
    }

    .faq-item {
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 15px;
      margin-bottom: 1rem;
      overflow: hidden;
    }

    .faq-question {
      padding: 1.5rem;
      font-size: 1.2rem;
      font-weight: 600;
      cursor: pointer;
      display: flex;
      justify-content: space-between;
      align-items: center;
      transition: all 0.3s ease;
    }

    .faq-question:hover {
      background: rgba(255, 255, 255, 0.05);
    }

    .faq-answer {
      padding: 0 1.5rem;
      max-height: 0;
      overflow: hidden;
      transition: all 0.3s ease;
    }

    .faq-item.active .faq-answer {
      padding: 0 1.5rem 1.5rem;
      max-height: 500px;
    }

    .faq-item.active .faq-question i {
      transform: rotate(180deg);
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
      .coins-hero-title {
        font-size: 3rem;
      }
      .section-title {
        font-size: 2.8rem;
      }
    }

    @media (max-width: 992px) {
      .coins-hero-title {
        font-size: 2.5rem;
      }
      .section-title {
        font-size: 2.5rem;
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
      .coins-filter {
        flex-direction: column;
      }
      .search-box {
        margin-left: 0;
        margin-top: 1rem;
        max-width: 100%;
      }
    }

    @media (max-width: 768px) {
      .coins-hero-title {
        font-size: 2.2rem;
      }
      .section-title {
        font-size: 2.2rem;
      }
      .coins-grid {
        grid-template-columns: 1fr;
      }
      .chains-grid {
        grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
      }
      .coin-actions {
        flex-direction: column;
      }
    }

    @media (max-width: 576px) {
      .coins-hero-title {
        font-size: 1.8rem;
      }
      .section-title {
        font-size: 1.8rem;
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
@include('home.header')
  <!-- Hero Section -->
  <section class="coins-hero">
    <div class="container">
      <div class="coins-hero-content">
        <h1 class="coins-hero-title">SUPPORTED <span class="highlight">CRYPTOCURRENCIES</span></h1>
        <p class="coins-hero-subtitle">
          Explore our extensive list of supported cryptocurrencies for payments, trading, and secure storage. 
          GETNOWPAY supports 40+ digital assets across multiple blockchain networks.
        </p>
      </div>
    </div>
  </section>

  <!-- Coins Section -->
<section class="coins-section">
  <div class="container">
    <h2 class="section-title">ALL SUPPORTED COINS</h2>
    
    <div class="coins-filter d-flex justify-content-between align-items-center flex-wrap">
      <div>
        <h3 class="filter-title">Filter by Category:</h3>
        <div class="filter-options">
          <button class="filter-btn active" data-filter="all">All Coins</button>
          <button class="filter-btn" data-filter="payments">Payments</button>
          <button class="filter-btn" data-filter="trading">Trading</button>
          <button class="filter-btn" data-filter="staking">Staking</button>
          <button class="filter-btn" data-filter="defi">DeFi</button>
        </div>
      </div>
      <div class="search-box">
        <i class="fas fa-search"></i>
        <input type="text" id="coin-search" placeholder="Search coins...">
      </div>
    </div>

    <div class="coins-grid" id="coins-container">
      <!-- Live coins will load here -->
    </div>

    <div class="text-center mt-5">
      <button class="btn btn-secondary-hero">Load More Coins</button>
    </div>
  </div>

  <script>
    const coinsList = [
      { id: "bitcoin", name: "Bitcoin", symbol: "BTC", icon: "₿", color: "#f7931a", categories: "payments,trading" },
      { id: "ethereum", name: "Ethereum", symbol: "ETH", icon: "Ξ", color: "#627eea", categories: "payments,trading,defi,staking" },
      { id: "litecoin", name: "Litecoin", symbol: "LTC", icon: "Ł", color: "#345d9d", categories: "payments,trading" },
      { id: "bitcoin-cash", name: "Bitcoin Cash", symbol: "BCH", icon: "$", color: "#00d4aa", categories: "payments,trading" },
      { id: "dogecoin", name: "Dogecoin", symbol: "DOGE", icon: "Ð", color: "#c2a633", categories: "payments,trading" },
      { id: "cardano", name: "Cardano", symbol: "ADA", icon: "A", color: "#0033ad", categories: "trading,staking,defi" },
      { id: "polkadot", name: "Polkadot", symbol: "DOT", icon: "●", color: "#e6007a", categories: "trading,staking,defi" },
      { id: "chainlink", name: "Chainlink", symbol: "LINK", icon: "●", color: "#2a5ada", categories: "trading,defi" }
    ];

    async function loadLiveData() {
      const ids = coinsList.map(c => c.id).join(",");
      const url = `https://api.coingecko.com/api/v3/simple/price?ids=${ids}&vs_currencies=usd&include_market_cap=true&include_24hr_change=true`;

      try {
        const response = await fetch(url);
        const data = await response.json();

        const container = document.getElementById("coins-container");
        container.innerHTML = "";

        coinsList.forEach(coin => {
          if (data[coin.id]) {
            const price = data[coin.id].usd;
            const change = data[coin.id].usd_24h_change;
            const marketCap = data[coin.id].usd_market_cap;

            const card = document.createElement("div");
            card.className = "coin-card";
            card.setAttribute("data-categories", coin.categories);
            card.setAttribute("data-name", coin.name.toLowerCase());

            card.innerHTML = `
              <div class="coin-header">
                <div class="coin-icon" style="background: ${coin.color};">${coin.icon}</div>
                <div>
                  <div class="coin-name">${coin.name}</div>
                  <div class="coin-symbol">${coin.symbol}</div>
                </div>
              </div>
              <div class="coin-details">
                <div class="coin-detail"><span class="detail-label">Price</span><span class="detail-value">$${price.toLocaleString()}</span></div>
                <div class="coin-detail"><span class="detail-label">24h Change</span><span class="detail-value ${change >= 0 ? "price-up" : "price-down"}">${(change > 0 ? "+" : "") + change.toFixed(2)}%</span></div>
                <div class="coin-detail"><span class="detail-label">Market Cap</span><span class="detail-value">$${(marketCap/1e9).toFixed(2)}B</span></div>
                <div class="coin-detail"><span class="detail-label">Network</span><span class="detail-value">${coin.name}</span></div>
              </div>
              <div class="coin-actions">
                <a href="#" class="coin-btn btn-buy">Buy</a>
                <a href="#" class="coin-btn btn-info">Details</a>
              </div>
            `;
            container.appendChild(card);
          }
        });
      } catch (error) {
        console.error("Error fetching data:", error);
      }
    }

    // Filter buttons
    document.addEventListener("click", e => {
      if (e.target.classList.contains("filter-btn")) {
        document.querySelectorAll(".filter-btn").forEach(b => b.classList.remove("active"));
        e.target.classList.add("active");
        const filter = e.target.dataset.filter;
        document.querySelectorAll(".coin-card").forEach(card => {
          if (filter === "all" || card.dataset.categories.includes(filter)) {
            card.style.display = "block";
          } else {
            card.style.display = "none";
          }
        });
      }
    });

    // Search
    document.addEventListener("input", e => {
      if (e.target.id === "coin-search") {
        const value = e.target.value.toLowerCase();
        document.querySelectorAll(".coin-card").forEach(card => {
          const name = card.dataset.name;
          card.style.display = name.includes(value) ? "block" : "none";
        });
      }
    });

    // Load data now + refresh every 60s
    loadLiveData();
    setInterval(loadLiveData, 60000);
  </script>
</section>


  <!-- Supported Chains Section -->
  <section class="chains-section">
    <div class="container">
      <h2 class="section-title">SUPPORTED BLOCKCHAINS</h2>
      <p class="text-center mb-5" style="font-size: 1.2rem; opacity: 0.9;">
        GETNOWPAY supports coins and tokens across multiple blockchain networks
      </p>
      
      <div class="chains-grid">
        <div class="chain-card">
          <div class="chain-icon" style="background: #f7931a;">₿</div>
          <div class="chain-name">Bitcoin</div>
          <div class="chain-coins">5+ coins</div>
        </div>
        
        <div class="chain-card">
          <div class="chain-icon" style="background: #627eea;">Ξ</div>
          <div class="chain-name">Ethereum</div>
          <div class="chain-coins">20+ tokens</div>
        </div>
        
        <div class="chain-card">
          <div class="chain-icon" style="background: #345d9d;">Ł</div>
          <div class="chain-name">Litecoin</div>
          <div class="chain-coins">3+ coins</div>
        </div>
        
        <div class="chain-card">
          <div class="chain-icon" style="background: #00d4aa;">$</div>
          <div class="chain-name">Bitcoin Cash</div>
          <div class="chain-coins">2+ coins</div>
        </div>
        
        <div class="chain-card">
          <div class="chain-icon" style="background: #0033ad;">A</div>
          <div class="chain-name">Cardano</div>
          <div class="chain-coins">5+ tokens</div>
        </div>
        
        <div class="chain-card">
          <div class="chain-icon" style="background: #e6007a;">●</div>
          <div class="chain-name">Polkadot</div>
          <div class="chain-coins">8+ tokens</div>
        </div>
        
        <div class="chain-card">
          <div class="chain-icon" style="background: #00d8ff;">S</div>
          <div class="chain-name">Solana</div>
          <div class="chain-coins">10+ tokens</div>
        </div>
        
        <div class="chain-card">
          <div class="chain-icon" style="background: #f0b90b;">B</div>
          <div class="chain-name">BNB Chain</div>
          <div class="chain-coins">15+ tokens</div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="faq-section">
    <div class="container">
      <h2 class="section-title">FREQUENTLY ASKED QUESTIONS</h2>
      
      <div class="faq-list">
        <div class="faq-item">
          <div class="faq-question">
            How many cryptocurrencies does GETNOWPAY support?
            <i class="fas fa-chevron-down"></i>
          </div>
          <div class="faq-answer">
            GETNOWPAY currently supports 40+ cryptocurrencies across multiple blockchain networks. We're continuously adding support for new coins and tokens based on market demand and security considerations.
          </div>
        </div>
        
        <div class="faq-item">
          <div class="faq-question">
            Can I use any supported cryptocurrency for payments?
            <i class="fas fa-chevron-down"></i>
          </div>
          <div class="faq-answer">
            Yes, all cryptocurrencies marked with the "Payments" category can be used for sending and receiving payments. Some coins are optimized specifically for fast, low-cost transactions ideal for payment processing.
          </div>
        </div>
        
        <div class="faq-item">
          <div class="faq-question">
            Are there any fees for holding cryptocurrencies?
            <i class="fas fa-chevron-down"></i>
          </div>
          <div class="faq-answer">
            GETNOWPAY does not charge any fees for holding cryptocurrencies in your wallet. However, standard network fees apply when sending transactions on the blockchain, which vary depending on network congestion.
          </div>
        </div>
        
        <div class="faq-item">
          <div class="faq-question">
            How secure are my cryptocurrencies on GETNOWPAY?
            <i class="fas fa-chevron-down"></i>
          </div>
          <div class="faq-answer">
            Your cryptocurrencies are protected by our MPC (Multi-Party Computation) custody solution, which ensures private keys are never stored in one place or exposed in full. Additionally, our custody services are insured to protect your assets.
          </div>
        </div>
        
        <div class="faq-item">
          <div class="faq-question">
            Can I stake my cryptocurrencies on GETNOWPAY?
            <i class="fas fa-chevron-down"></i>
          </div>
          <div class="faq-answer">
            Yes, we offer staking services for selected proof-of-stake cryptocurrencies. Coins marked with the "Staking" category are eligible for staking, allowing you to earn rewards on your holdings.
          </div>
        </div>
      </div>
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
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2025 GETNOWPAY. All rights reserved. | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
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

    // Coin filtering functionality
    document.querySelectorAll('.filter-btn').forEach(button => {
      button.addEventListener('click', function() {
        // Remove active class from all buttons
        document.querySelectorAll('.filter-btn').forEach(btn => {
          btn.classList.remove('active');
        });
        
        // Add active class to clicked button
        this.classList.add('active');
        
        const filter = this.getAttribute('data-filter');
        const coins = document.querySelectorAll('.coin-card');
        
        coins.forEach(coin => {
          if (filter === 'all' || coin.getAttribute('data-categories').includes(filter)) {
            coin.style.display = 'block';
          } else {
            coin.style.display = 'none';
          }
        });
      });
    });

    // Coin search functionality
    document.getElementById('coin-search').addEventListener('input', function() {
      const searchTerm = this.value.toLowerCase();
      const coins = document.querySelectorAll('.coin-card');
      
      coins.forEach(coin => {
        const coinName = coin.querySelector('.coin-name').textContent.toLowerCase();
        const coinSymbol = coin.querySelector('.coin-symbol').textContent.toLowerCase();
        
        if (coinName.includes(searchTerm) || coinSymbol.includes(searchTerm)) {
          coin.style.display = 'block';
        } else {
          coin.style.display = 'none';
        }
      });
    });

    // FAQ accordion functionality
    document.querySelectorAll('.faq-question').forEach(question => {
      question.addEventListener('click', function() {
        const faqItem = this.parentElement;
        faqItem.classList.toggle('active');
      });
    });
  </script>
</body>
</html>