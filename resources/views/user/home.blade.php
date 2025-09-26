@include('user.header')
        <!-- Content -->
        <div class="content">
            <h1 class="dashboard-title">Dashboard</h1>
            <p class="dashboard-subtitle">In this section, you will be able to find your account's statistics. Now get ready to start with your integration!</p>

            <div class="row-custom">
                <div class="left-column">
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
    </div>

   @include('user.footer')