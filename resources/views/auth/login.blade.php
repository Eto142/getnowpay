<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GETNOWPAY - Login</title>
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
            --secondary-blue: #3367d6;
            --light-bg: #f8f9fa;
            --dark-text: #333;
            --medium-text: #666;
            --light-text: #999;
        }

        body {
            background: linear-gradient(135deg, #0a0a0a 0%, #1a1a2e 50%, #16213e 100%);
            color: white;
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }

        .login-container {
            width: 100%;
            max-width: 450px;
            margin: 0 auto;
        }

        .login-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            color: #333;
            width: 100%;
        }

        .login-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .login-logo {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
            color: #333;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-logo i {
            margin-right: 0.5rem;
            color: var(--primary-blue);
        }

        .login-subtitle {
            color: #666;
            font-size: 1.1rem;
        }

        .form-label {
            font-weight: 600;
            color: #444;
            margin-bottom: 0.5rem;
        }

        .form-control {
            border-radius: 10px;
            padding: 0.75rem 1rem;
            border: 1px solid #ddd;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 0.2rem rgba(66, 133, 244, 0.25);
        }

        .input-group-text {
            background: #f8f9fa;
            border: 1px solid #ddd;
            border-radius: 10px 0 0 10px;
        }

        .btn-login {
            background: var(--primary-blue);
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 10px;
            font-size: 1.1rem;
            font-weight: 600;
            transition: all 0.3s ease;
            width: 100%;
            margin-top: 1rem;
        }

        .btn-login:hover {
            background: var(--secondary-blue);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(66, 133, 244, 0.3);
        }

        .divider {
            display: flex;
            align-items: center;
            margin: 1.5rem 0;
        }

        .divider::before,
        .divider::after {
            content: "";
            flex: 1;
            height: 1px;
            background: #ddd;
        }

        .divider-text {
            padding: 0 1rem;
            color: #666;
            font-size: 0.9rem;
        }

        .social-login {
            display: flex;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .btn-social {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 10px;
            background: white;
            color: #333;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-social:hover {
            background: #f8f9fa;
            transform: translateY(-2px);
        }

        .btn-google {
            color: #db4437;
        }

        .btn-facebook {
            color: #4267B2;
        }

        .login-footer {
            text-align: center;
            margin-top: 1.5rem;
        }

        .login-footer a {
            color: var(--primary-blue);
            text-decoration: none;
            font-weight: 500;
        }

        .login-footer a:hover {
            text-decoration: underline;
        }

        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 1rem;
        }

        .form-check-input:checked {
            background-color: var(--primary-blue);
            border-color: var(--primary-blue);
        }

        .password-toggle {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #666;
            cursor: pointer;
        }

        .password-container {
            position: relative;
        }

        .alert {
            border-radius: 10px;
            padding: 0.75rem 1rem;
            margin-bottom: 1rem;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .login-card {
            animation: fadeIn 0.5s ease-out;
        }

        /* Responsive Design */
        @media (max-width: 576px) {
            .login-card {
                padding: 1.5rem;
            }
            
            .login-logo {
                font-size: 2rem;
            }
            
            .social-login {
                flex-direction: column;
            }
            
            .remember-forgot {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.5rem;
            }
            
            .remember-forgot a {
                align-self: flex-end;
            }
        }

        @media (max-width: 400px) {
            .login-card {
                padding: 1rem;
            }
            
            .login-logo {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <!-- Login Header -->
            <div class="login-header">
                <h1 class="login-logo"><i class="fas fa-university"></i> GETNOWPAY</h1>
                <p class="login-subtitle">Sign in to your account</p>
            </div>

           <!-- Error/Success Messages -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('warning'))
        <div class="alert alert-warning">{{ session('warning') }}</div>
    @endif
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif

    <!-- Login Form -->
    <form method="POST" action="{{ route('login.submit') }}">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                <input type="email" class="form-control @error('email') is-invalid @enderror"
                       id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}" required>
            </div>
            @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3 password-container">
            <label for="password" class="form-label">Password</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                <input type="password" class="form-control @error('password') is-invalid @enderror"
                       id="password" name="password" placeholder="Enter your password" required>
                <button type="button" id="togglePassword"><i class="fas fa-eye"></i></button>
            </div>
            @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="d-flex justify-content-between mb-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="rememberMe">
                <label class="form-check-label" for="rememberMe">Remember me</label>
            </div>
        
        </div>
        
    <a href="{{ route('forgot.password.form') }}" 
   style="display:inline-block;
          margin-top:15px;
          padding:8px 15px;
          background:#305C89;
          color:#fff;
          border-radius:8px;
          font-size:14px;
          text-decoration:none;
          transition:all 0.3s ease;">
   Forgot Password?
</a>

<style>
a[href*="forgot-password"]:hover {
  background:#264c73;
}
</style>

        <button type="submit" class="btn btn-primary w-100">Sign In</button>
    </form>
</div>


            
            <!-- Registration Link -->
            <div class="login-footer">
                <p>Don't have an account? <a href="{{ url('register') }}">Sign up here</a></p>
            </div>
        </div>
    </div>

    <!-- Forgot Password Modal -->
    <div class="modal fade" id="forgotPasswordModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Reset Your Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Enter your email address and we'll send you a link to reset your password.</p>
                    <div class="mb-3">
                        <label for="resetEmail" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="resetEmail" placeholder="Enter your email">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="sendResetLink">Send Reset Link</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Toggle password visibility
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const icon = this.querySelector('i');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });

        // Forgot password modal
        document.getElementById('forgotPassword').addEventListener('click', function(e) {
            e.preventDefault();
            const modal = new bootstrap.Modal(document.getElementById('forgotPasswordModal'));
            modal.show();
        });

        // Send reset link
        document.getElementById('sendResetLink').addEventListener('click', function() {
            const email = document.getElementById('resetEmail').value;
            const modal = bootstrap.Modal.getInstance(document.getElementById('forgotPasswordModal'));
            
            if (!email) {
                showMessage('Please enter your email address.', 'error');
                return;
            }
            
            // Simulate sending reset link
            showMessage('Password reset link has been sent to your email.', 'success');
            modal.hide();
            
            // Clear the input
            document.getElementById('resetEmail').value = '';
        });

        // Show message function
        function showMessage(message, type) {
            const messageContainer = document.getElementById('messageContainer');
            const alertClass = type === 'error' ? 'alert-danger' : 'alert-success';
            
            messageContainer.innerHTML = `
                <div class="alert ${alertClass} alert-dismissible fade show" role="alert">
                    ${message}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            `;
            
            // Auto dismiss after 5 seconds
            setTimeout(() => {
                const alert = document.querySelector('.alert');
                if (alert) {
                    bootstrap.Alert.getInstance(alert).close();
                }
            }, 5000);
        }

        // Form submission
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const rememberMe = document.getElementById('rememberMe').checked;
            
            // Basic validation
            if (!email || !password) {
                showMessage('Please fill in all required fields.', 'error');
                return;
            }
            
            // Email format validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                showMessage('Please enter a valid email address.', 'error');
                return;
            }
            
            // Simulate login process
            showMessage('Signing you in...', 'success');
            
            // In a real application, you would send the data to a server here
            setTimeout(() => {
                // Simulate successful login
                showMessage('Login successful! Redirecting...', 'success');
                
                // Redirect to dashboard after a short delay
                setTimeout(() => {
                    window.location.href = 'dashboard.html';
                }, 1500);
            }, 1000);
        });

        // Demo credentials for testing
        document.addEventListener('DOMContentLoaded', function() {
            // Pre-fill demo credentials for testing
            document.getElementById('email').value = 'demo@getnowpay.com';
            document.getElementById('password').value = 'demopassword123';
            
            // Add a note about demo credentials (would be removed in production)
            const demoNote = document.createElement('div');
            demoNote.className = 'alert alert-info mt-3';
            demoNote.innerHTML = '<small><strong>Demo Credentials:</strong> demo@getnowpay.com / demopassword123</small>';
            document.querySelector('.login-footer').appendChild(demoNote);
        });
    </script>
</body>
</html>