<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GetNowPay Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --sidebar-bg: #1a1a1a;
            --sidebar-text: #9ca3af;
            --sidebar-active: #ffffff;
            --primary-blue: #4f9cf9;
            --light-bg: #f8fafc;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background-color: var(--light-bg);
            margin: 0;
            overflow-x: hidden;
        }

        .sidebar {
            background-color: var(--sidebar-bg);
            min-height: 100vh;
            width: 280px;
            position: fixed;
            left: 0;
            top: 0;
            padding: 0;
            z-index: 1100;
            transition: transform 0.3s ease;
        }

        .sidebar-brand {
            padding: 1.5rem;
            border-bottom: 1px solid #333;
        }

        .sidebar-brand h4 {
            color: var(--primary-blue);
            font-weight: 600;
            margin: 0;
            font-size: 1.5rem;
        }

        .sidebar-nav {
            padding: 1rem 0;
        }

        .nav-item {
            margin: 0.25rem 0;
        }

        .nav-link {
            color: var(--sidebar-text);
            padding: 0.75rem 1.5rem;
            display: flex;
            align-items: center;
            text-decoration: none;
            transition: all 0.2s;
            border: none;
            background: none;
        }

        .nav-link:hover {
            color: var(--sidebar-active);
            background-color: rgba(255, 255, 255, 0.05);
        }

        .nav-link.active {
            color: var(--sidebar-active);
            background-color: rgba(79, 156, 249, 0.1);
        }

        .nav-link i {
            width: 20px;
            margin-right: 0.75rem;
            font-size: 1rem;
        }

        .nav-link .badge {
            margin-left: auto;
            background-color: #6b7280;
            font-size: 0.75rem;
        }

        .sidebar-footer {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 1.5rem;
            border-top: 1px solid #333;
        }

        .sidebar-footer a {
            color: var(--primary-blue);
            text-decoration: none;
            font-size: 0.875rem;
        }

        .sidebar-footer .copyright {
            color: var(--sidebar-text);
            font-size: 0.875rem;
            margin-top: 0.5rem;
        }

        .main-content {
            margin-left: 280px;
            min-height: 100vh;
            transition: margin-left 0.3s ease;
        }

        .top-banner {
            background: linear-gradient(135deg, #e0e7ff 0%, #f0f4ff 100%);
            padding: 0.75rem 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #e5e7eb;
        }

        .top-banner-text {
            color: #4338ca;
            font-weight: 500;
            display: flex;
            align-items: center;
        }

        .top-banner-arrow {
            background-color: var(--primary-blue);
            color: white;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 0.5rem;
            font-size: 0.75rem;
        }

        .header {
            background: white;
            padding: 1rem 2rem;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .user-avatar {
            width: 32px;
            height: 32px;
            background-color: #e5e7eb;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            color: #6b7280;
        }

        .username {
            font-weight: 500;
            color: #374151;
        }

        .language-selector {
            display: flex;
            align-items: center;
            gap: 0.25rem;
            color: #6b7280;
            font-size: 0.875rem;
        }

        .content {
            padding: 2rem;
        }

        .dashboard-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #111827;
            margin-bottom: 1rem;
        }

        .dashboard-subtitle {
            color: #6b7280;
            font-size: 1rem;
            margin-bottom: 3rem;
        }

        .get-started-section {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            margin-bottom: 3rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .get-started-title {
            font-size: 1.75rem;
            font-weight: 600;
            color: #111827;
            margin-bottom: 1rem;
        }

        .get-started-title .now-text {
            color: var(--primary-blue);
        }

        .get-started-description {
            color: #6b7280;
            margin-bottom: 2rem;
        }

        .start-integration-btn {
            background-color: var(--primary-blue);
            color: white;
            border: none;
            padding: 0.75rem 2rem;
            border-radius: 8px;
            font-weight: 500;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.2s;
        }

        .start-integration-btn:hover {
            background-color: #3b82f6;
            color: white;
        }

        .action-items {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .action-item {
            background: white;
            border-radius: 8px;
            padding: 1rem;
            display: flex;
            align-items: center;
            text-decoration: none;
            color: inherit;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .action-item:hover {
            transform: translateY(-1px);
            color: inherit;
        }

        .action-icon {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            font-size: 1.25rem;
        }

        .action-icon.pink {
            background-color: #fce7f3;
            color: #ec4899;
        }

        .action-icon.blue {
            background-color: #dbeafe;
            color: #3b82f6;
        }

        .action-icon.green {
            background-color: #d1fae5;
            color: #10b981;
        }

        .action-text {
            flex: 1;
            font-weight: 500;
            color: #374151;
        }

        .action-arrow {
            color: #9ca3af;
        }

        .products-section {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .products-title {
            font-size: 1.75rem;
            font-weight: 600;
            color: #111827;
            margin-bottom: 1rem;
        }

        .products-description {
            color: #6b7280;
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        .industry-dropdown {
            border: 1px solid #d1d5db;
            border-radius: 8px;
            padding: 0.75rem 1rem;
            background: white;
            color: var(--primary-blue);
            font-weight: 500;
            width: 250px;
        }

        .row-custom {
            display: flex;
            gap: 2rem;
            align-items: flex-start;
        }

        .left-column {
            flex: 2;
        }

        .right-column {
            flex: 1;
        }

        /* Mobile adjustments */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
                position: fixed;
                top: 0;
                bottom: 0;
                z-index: 2000;
            }
            .sidebar.show {
                transform: translateX(0);
            }
            .main-content {
                margin-left: 0 !important;
            }
            .row-custom {
                flex-direction: column;
                gap: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-brand">
            <h4>GetNowPay</h4>
        </div>
        
        <nav class="sidebar-nav">
            <div class="nav-item">
                <a href="{{ route('home') }}" class="nav-link active">
                    <i class="fas fa-home"></i>
                    Dashboard
                </a>
            </div>

            <div class="nav-item">
                <a href="{{ route('withdraw') }}" class="nav-link">
                    <i class="fas fa-money-bill-wave"></i>
                    Withdrawal
                </a>
            </div>


            <div class="nav-item">
                <a href="{{ route('payment.history') }}" class="nav-link">
                    <i class="fas fa-history"></i>
                    Payments History
                </a>
            </div>

            <div class="nav-item">
                <a href="{{ route('settings.index') }}" class="nav-link">
                     <i class="fas fa-cog"></i>
                 
                   Settings
                </a>
            </div>

             <div class="nav-item">
                <a href="{{ route('user.logout') }}" class="nav-link">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
            
           
          
            
        </nav>
        
        <div class="sidebar-footer">
            <a href="mailto:support@getnowpay.online">support@getnowpay.online</a>
            <div class="copyright">2025 © GetNowPay</div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Top Banner -->
        <div class="top-banner">
            <div class="top-banner-text">
                Enable Custody for secure fund storage
                <div class="top-banner-arrow">
                    <i class="fas fa-chevron-right"></i>
                </div>
            </div>
        </div>

      <!-- Header -->
<div class="header">
    <!-- Mobile Toggle Button -->
    <button class="btn btn-link text-dark d-md-none" id="sidebarToggle">
        <i class="fas fa-bars fa-lg"></i>
    </button>

    <div></div>
    <div class="user-info" id="profileBtn" style="cursor:pointer;">
        <div class="user-avatar">{{ Auth::user()->name }}</div>
        <div class="username">{{ Auth::user()->name }}</div>
        <div class="language-selector">
            
            <i class="fas fa-chevron-down"></i>
        </div>
    </div>
</div>

<!-- Profile Bottom Drawer -->
<div class="profile-drawer" id="profileDrawer">
    <div class="drawer-content">
        <!-- Custody Balance -->
        <div class="drawer-item balance-box">
            <strong>Custody Balance:</strong> $0.00
        </div>

        <!-- Notifications -->
        <a href="#" class="drawer-item">
            <i class="fas fa-bell"></i> Notifications
        </a>

        <!-- Support -->
        <a href="mailto:support@getnowpay.online" class="drawer-item">
            <i class="fas fa-headset"></i> Support
        </a>

        <!-- Sign Out -->
        <form method="POST" action="{{ route('user.logout') }}">
            @csrf
            <button type="submit" class="drawer-item logout">
                <i class="fas fa-sign-out-alt"></i> Sign Out
            </button>
        </form>
    </div>
</div>

<style>
/* Profile Drawer */
.profile-drawer {
    position: fixed;
    bottom: -100%;
    left: 0;
    width: 100%;
    background: #fff;
    box-shadow: 0 -2px 10px rgba(0,0,0,0.1);
    border-top-left-radius: 16px;
    border-top-right-radius: 16px;
    transition: bottom 0.3s ease;
    z-index: 3000;
}

.profile-drawer.show {
    bottom: 0;
}

.drawer-content {
    padding: 1rem 1.5rem;
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.drawer-item {
    padding: 0.75rem 1rem;
    border-radius: 8px;
    background: #f9fafb;
    display: flex;
    align-items: center;
    gap: 0.75rem;
    font-weight: 500;
    color: #374151;
    text-decoration: none;
    transition: background 0.2s;
}

.drawer-item:hover {
    background: #f3f4f6;
}

.drawer-item.logout {
    background: #fee2e2;
    color: #b91c1c;
    border: none;
    width: 100%;
    text-align: left;
}

.balance-box {
    background: #dbeafe;
    color: #1d4ed8;
    border: 1px solid #bfdbfe;
}
</style>

<script>
const profileBtn = document.getElementById('profileBtn');
const profileDrawer = document.getElementById('profileDrawer');

profileBtn.addEventListener('click', () => {
    profileDrawer.classList.toggle('show');
});

// Close drawer if clicked outside
document.addEventListener('click', (e) => {
    if (!profileDrawer.contains(e.target) && !profileBtn.contains(e.target)) {
        profileDrawer.classList.remove('show');
    }
});
</script>
