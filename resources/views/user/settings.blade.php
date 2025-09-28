@include('user.header')

<div class="content settings-page">
    <!-- Page Header -->
    <div class="page-header">
        <h1 class="dashboard-title">⚙️ Settings</h1>
        <p class="dashboard-subtitle">Manage your account details, bank info, and security settings.</p>
    </div>

    <div class="settings-container">
        <!-- Profile Info -->
        <div class="settings-card">
            <h2 class="settings-title"><i class="fas fa-user"></i> Profile Information</h2>
            <form action="{{ route('settings.profile.update') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ Auth::user()->name }}" required>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ Auth::user()->email }}" required>
                </div>

                <button type="submit" class="btn-save">
                    <i class="fas fa-save"></i> Save Changes
                </button>
            </form>
        </div>

        <!-- Bank Details -->
        <div class="settings-card">
            <h2 class="settings-title"><i class="fas fa-university"></i> Bank Details</h2>
            <form action="{{ route('settings.bank.update') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="bank_name">Bank Name</label>
                    <input type="text" id="bank_name" name="bank_name" class="form-control" placeholder="Update Bank" required>
                </div>

                <div class="form-group">
                    <label for="account_name">Account Name</label>
                    <input type="text" id="account_name" name="account_name" class="form-control" placeholder="Update Name" required>
                </div>

                <div class="form-group">
                    <label for="account_number">Account Number</label>
                    <input type="text" id="account_number" name="account_number" class="form-control" placeholder="Update Number" required>
                </div>

                <button type="submit" class="btn-save">
                    <i class="fas fa-wallet"></i> Update Bank Info
                </button>
            </form>
        </div>

        <!-- Password Reset -->
        <div class="settings-card">
            <h2 class="settings-title"><i class="fas fa-lock"></i> Security</h2>
            <form action="{{ route('settings.password.update') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="current_password">Current Password</label>
                    <input type="password" id="current_password" name="current_password" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="new_password">New Password</label>
                    <input type="password" id="new_password" name="new_password" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="new_password_confirmation">Confirm New Password</label>
                    <input type="password" id="new_password_confirmation" name="new_password_confirmation" class="form-control" required>
                </div>

                <button type="submit" class="btn-save">
                    <i class="fas fa-shield-alt"></i> Update Password
                </button>
            </form>
        </div>
    </div>
</div>

<style>
.settings-page {
    max-width: 1000px;
    margin: 0 auto;
    padding: 30px 15px;
}
.page-header {
    text-align: center;
    margin-bottom: 30px;
}
.dashboard-title {
    font-size: 26px;
    font-weight: 700;
    margin-bottom: 10px;
    color: #2c3e50;
}
.dashboard-subtitle {
    font-size: 15px;
    color: #7f8c8d;
}
.settings-container {
    display: grid;
    grid-template-columns: 1fr;
    gap: 25px;
}
.settings-card {
    background: #fff;
    border-radius: 14px;
    padding: 25px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
}
.settings-title {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 18px;
    display: flex;
    align-items: center;
    gap: 8px;
    color: #34495e;
}
.form-group {
    margin-bottom: 16px;
}
.form-group label {
    font-weight: 600;
    margin-bottom: 6px;
    display: block;
}
.form-control {
    border-radius: 10px;
    padding: 12px;
    border: 1px solid #dcdde1;
    font-size: 15px;
}
.form-control:focus {
    border-color: #3498db;
    box-shadow: 0 0 0 3px rgba(52,152,219,0.15);
}
.btn-save {
    background: linear-gradient(135deg, #3498db, #2ecc71);
    border: none;
    border-radius: 10px;
    padding: 12px 18px;
    color: #fff;
    font-size: 15px;
    font-weight: 600;
    cursor: pointer;
    transition: 0.3s;
    display: inline-flex;
    align-items: center;
    gap: 6px;
}
.btn-save:hover {
    background: linear-gradient(135deg, #2980b9, #27ae60);
    transform: scale(1.02);
}
@media (min-width: 768px) {
    .settings-container {
        grid-template-columns: repeat(2, 1fr);
    }
}
</style>

@include('user.footer')
