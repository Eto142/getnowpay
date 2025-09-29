@include('user.header')

<div class="content withdrawal-page">
    <!-- Header -->
    <div class="page-header">
        <h1 class="dashboard-title">💳 Withdrawal</h1>
        <p class="dashboard-subtitle">
            Provide your bank details and withdrawal amount below. 
            Once submitted, our team will process your request securely.
        </p>
    </div>


    <!-- Status Alert -->
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

    <!-- Withdrawal Form Card -->
    <div class="withdrawal-card">
       <form action="{{ route('withdraw.store') }}" method="POST">
    @csrf

    <!-- Amount -->
    <div class="form-group">
        <label for="amount">Withdrawal Amount</label>
        <input type="number" id="amount" name="amount" class="form-control" placeholder="Enter amount in USD" required>
    </div>

    <!-- Bank Name -->
    <div class="form-group">
        <label for="bank_name">Bank Name</label>
        <input type="text" id="bank_name" name="bank_name" class="form-control" placeholder="Enter Bank Name" required>
    </div>

    <!-- Account Name -->
    <div class="form-group">
        <label for="account_name">Account Name</label>
        <input type="text" id="account_name" name="account_name" class="form-control" placeholder="Enter Account Name" required>
    </div>

    <!-- Account Number -->
    <div class="form-group">
        <label for="account_number">Account Number</label>
        <input type="text" id="account_number" name="account_number" class="form-control" placeholder="Enter Account Number" required>
    </div>

    <!-- Swift Code -->
    <div class="form-group">
        <label for="swift_code">Swift Code</label>
        <input type="text" id="swift_code" name="swift_code" class="form-control" placeholder="Enter Swift Code" required>
    </div>

    <!-- Narration -->
    <div class="form-group">
        <label for="narration">Narration</label>
        <input type="text" id="narration" name="narration" class="form-control" placeholder="Enter Narration" required>
    </div>

    <!-- Submit Button -->
    <button type="submit" class="btn-withdraw">
        <i class="fas fa-paper-plane"></i> Request Withdrawal
    </button>
</form>

    </div>
</div>

<style>
/* General Layout */
.withdrawal-page {
    max-width: 600px;
    margin: 0 auto;
    padding: 30px 15px;
}

.page-header {
    text-align: center;
    margin-bottom: 25px;
}

.dashboard-title {
    font-size: 26px;
    font-weight: 700;
    margin-bottom: 8px;
    color: #2c3e50;
}

.dashboard-subtitle {
    font-size: 15px;
    color: #7f8c8d;
    line-height: 1.6;
}

/* Card */
.withdrawal-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 30px 25px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    transition: transform 0.2s ease;
}

.withdrawal-card:hover {
    transform: translateY(-2px);
}

/* Form */
.form-group {
    margin-bottom: 18px;
}

.form-group label {
    font-weight: 600;
    margin-bottom: 6px;
    display: block;
    color: #34495e;
}

.form-control {
    border-radius: 10px;
    padding: 12px 14px;
    border: 1px solid #dcdde1;
    font-size: 15px;
    transition: border 0.2s;
}

.form-control:focus {
    border-color: #3498db;
    box-shadow: 0 0 0 3px rgba(52,152,219,0.15);
    outline: none;
}

/* Button */
.btn-withdraw {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    padding: 14px;
    font-size: 16px;
    font-weight: 600;
    background: linear-gradient(135deg, #3498db, #2ecc71);
    border: none;
    border-radius: 12px;
    color: #fff;
    cursor: pointer;
    transition: background 0.3s ease, transform 0.2s ease;
}

.btn-withdraw i {
    margin-right: 8px;
}

.btn-withdraw:hover {
    background: linear-gradient(135deg, #2980b9, #27ae60);
    transform: scale(1.02);
}
</style>

@include('user.footer')
