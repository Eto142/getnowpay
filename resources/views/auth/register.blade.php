<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GETNOWPAY - Registration</title>
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

        .registration-container {
            width: 100%;
            max-width: 900px;
            margin: 0 auto;
        }

        .registration-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            color: #333;
            width: 100%;
        }

        .registration-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .registration-title {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
            color: #333;
        }

        .registration-subtitle {
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

        .upload-area {
            border: 2px dashed #ddd;
            border-radius: 10px;
            padding: 2rem;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 1rem;
            background: #f8f9fa;
        }

        .upload-area:hover {
            border-color: var(--primary-blue);
            background-color: rgba(66, 133, 244, 0.05);
        }

        .upload-icon {
            font-size: 3rem;
            color: #666;
            margin-bottom: 1rem;
        }

        .file-input {
            display: none;
        }

        .preview-container {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-top: 1rem;
        }

        .preview-item {
            position: relative;
            width: 150px;
            height: 150px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        .preview-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .preview-item .remove-btn {
            position: absolute;
            top: 5px;
            right: 5px;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            border: none;
            border-radius: 50%;
            width: 25px;
            height: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .employment-section {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .employment-option {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            cursor: pointer;
        }

        .employment-option input {
            margin-right: 0.5rem;
        }

        .form-section {
            margin-bottom: 2rem;
            padding-bottom: 1.5rem;
            border-bottom: 1px solid #eee;
        }

        .form-section-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: #333;
            display: flex;
            align-items: center;
        }

        .form-section-title i {
            margin-right: 0.5rem;
            color: var(--primary-blue);
        }

        .btn-submit {
            background: var(--primary-blue);
            color: white;
            border: none;
            padding: 1rem 2rem;
            border-radius: 25px;
            font-size: 1.1rem;
            font-weight: 600;
            transition: all 0.3s ease;
            width: 100%;
            margin-top: 1rem;
        }

        .btn-submit:hover {
            background: var(--secondary-blue);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(66, 133, 244, 0.3);
        }

        .progress-bar {
            display: flex;
            justify-content: space-between;
            margin-bottom: 2rem;
            position: relative;
        }

        .progress-bar::before {
            content: '';
            position: absolute;
            top: 15px;
            left: 0;
            right: 0;
            height: 4px;
            background: #eee;
            z-index: 1;
        }

        .progress-step {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .step-number {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            margin-bottom: 0.5rem;
            transition: all 0.3s ease;
        }

        .step-label {
            font-size: 0.9rem;
            font-weight: 500;
            color: #999;
            text-align: center;
        }

        .progress-step.active .step-number {
            background: var(--primary-blue);
            color: white;
        }

        .progress-step.active .step-label {
            color: var(--primary-blue);
            font-weight: 600;
        }

        .progress-step.completed .step-number {
            background: #4caf50;
            color: white;
        }

        .form-step {
            display: none;
        }

        .form-step.active {
            display: block;
        }

        .form-navigation {
            display: flex;
            justify-content: space-between;
            margin-top: 2rem;
        }

        .btn-prev, .btn-next {
            background: #f8f9fa;
            color: #333;
            border: 1px solid #ddd;
            padding: 0.75rem 1.5rem;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-prev:hover, .btn-next:hover {
            background: #e9ecef;
        }

        .btn-next {
            background: var(--primary-blue);
            color: white;
            border-color: var(--primary-blue);
        }

        .btn-next:hover {
            background: var(--secondary-blue);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .registration-card {
                padding: 1.5rem;
            }
            
            .registration-title {
                font-size: 2rem;
            }
            
            .preview-item {
                width: 120px;
                height: 120px;
            }
            
            .progress-bar {
                flex-wrap: wrap;
                justify-content: center;
                gap: 1rem;
            }
            
            .progress-bar::before {
                display: none;
            }
            
            .step-label {
                font-size: 0.8rem;
            }
        }

        @media (max-width: 576px) {
            body {
                padding: 0.5rem;
            }
            
            .registration-title {
                font-size: 1.8rem;
            }
            
            .form-section-title {
                font-size: 1.3rem;
            }
            
            .upload-area {
                padding: 1.5rem;
            }
            
            .upload-icon {
                font-size: 2.5rem;
            }
            
            .preview-item {
                width: 100px;
                height: 100px;
            }
            
            .employment-option {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .employment-option input {
                margin-bottom: 0.5rem;
            }
            
            .form-navigation {
                flex-direction: column;
                gap: 1rem;
            }
            
            .btn-prev, .btn-next {
                width: 100%;
                text-align: center;
            }
        }

        @media (max-width: 400px) {
            .registration-card {
                padding: 1rem;
            }
            
            .registration-title {
                font-size: 1.6rem;
            }
            
            .form-section {
                padding-bottom: 1rem;
                margin-bottom: 1.5rem;
            }
            
            .form-section-title {
                font-size: 1.2rem;
                margin-bottom: 1rem;
            }
            
            .upload-area {
                padding: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="registration-container">
        <div class="registration-card">
            <!-- Progress Bar -->
            <div class="progress-bar">
                <div class="progress-step active" data-step="1">
                    <div class="step-number">1</div>
                    <div class="step-label">Personal Info</div>
                </div>
                <div class="progress-step" data-step="2">
                    <div class="step-number">2</div>
                    <div class="step-label">ID Verification</div>
                </div>
                <div class="progress-step" data-step="3">
                    <div class="step-number">3</div>
                    <div class="step-label">Employment</div>
                </div>
                <div class="progress-step" data-step="4">
                    <div class="step-number">4</div>
                    <div class="step-label">Review</div>
                </div>
            </div>

            <!-- Registration Header -->
            <div class="registration-header">
                <h1 class="registration-title">Create Your Account</h1>
                <p class="registration-subtitle">Join GETNOWPAY and start banking yourself today</p>
            </div>
            
            <!-- Multi-step Form -->
           <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Multi-Step Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/your-kit-code.js" crossorigin="anonymous"></script>
  <style>
    .form-step { display: none; }
    .form-step.active { display: block; }
    .upload-area { border: 2px dashed #ccc; padding: 20px; text-align: center; cursor: pointer; border-radius: 10px; }
    .preview-item img { max-width: 100%; height: auto; margin-top: 10px; border-radius: 6px; }
    .remove-btn { margin-top: 5px; background: red; color: white; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer; }
  </style>
</head>
<body class="container py-5">

 <!-- Multi-step Form -->
    <form id="registrationForm" method="POST" action="{{ route('register.submit') }}" enctype="multipart/form-data" class="p-4 shadow-lg bg-white rounded-4">
    @csrf

    <!-- Step Progress -->
    <div class="mb-4 d-flex justify-content-between align-items-center">
        <div class="progress flex-grow-1" style="height: 8px;">
            <div class="progress-bar bg-primary" id="formProgress" role="progressbar" style="width: 25%;"></div>
        </div>
        <span class="ms-3 fw-bold text-muted">Step <span id="stepIndicator">1</span> of 4</span>
    </div>

    <!-- Step 1: Personal Information -->
    <div class="form-step active" id="step1">
        <h4 class="mb-3"><i class="fas fa-user-circle text-primary"></i> Personal Information</h4>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" 
                       id="name" name="name" value="{{ old('name') }}" required>
                @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" 
                       id="email" name="email" value="{{ old('email') }}" required>
                @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="ssn" class="form-label">SSN</label>
                <input type="text" class="form-control @error('ssn') is-invalid @enderror" 
                       id="ssn" name="ssn" value="{{ old('ssn') }}" required>
                @error('ssn') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="tel" class="form-control @error('phone') is-invalid @enderror" 
                       id="phone" name="phone" value="{{ old('phone') }}" required>
                @error('phone') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control @error('address') is-invalid @enderror" 
                       id="address" name="address" value="{{ old('address') }}" required>
                @error('address') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" 
                       id="password" name="password" required>
                @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" 
                   id="password_confirmation" name="password_confirmation" required>
            @error('password_confirmation') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <button type="button" class="btn btn-primary w-100 py-2" onclick="nextStep(1)">Next</button>
    </div>

    <!-- Step 2: Identity Verification -->
    <div class="form-step" id="step2">
        <h4 class="mb-3"><i class="fas fa-id-card text-primary"></i> Identity Verification</h4>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label>ID Front</label>
                <input type="file" class="form-control @error('frontId') is-invalid @enderror" name="frontId" required>
                @error('frontId') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label>ID Back</label>
                <input type="file" class="form-control @error('backId') is-invalid @enderror" name="backId" required>
                @error('backId') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <button type="button" class="btn btn-outline-secondary" onclick="prevStep(2)">Previous</button>
            <button type="button" class="btn btn-primary" onclick="nextStep(2)">Next</button>
        </div>
    </div>

    <!-- Step 3: Employment -->
    <div class="form-step" id="step3">
        <h4 class="mb-3"><i class="fas fa-briefcase text-primary"></i> Employment</h4>
        <div class="mb-3">
            <div class="form-check">
                <input type="radio" class="form-check-input" name="employment" value="employed" checked>
                <label class="form-check-label">Employed (W-2)</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="employment" value="selfEmployed">
                <label class="form-check-label">Self-Employed (1099)</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="employment" value="unemployed">
                <label class="form-check-label">Unemployed</label>
            </div>
        </div>
        <div class="mb-3" id="w2Section">
            <label>Upload W-2</label>
            <input type="file" class="form-control @error('w2Form') is-invalid @enderror" name="w2Form">
            @error('w2Form') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3" id="form1099Section" style="display:none;">
            <label>Upload 1099</label>
            <input type="file" class="form-control @error('form1099') is-invalid @enderror" name="form1099">
            @error('form1099') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="d-flex justify-content-between">
            <button type="button" class="btn btn-outline-secondary" onclick="prevStep(3)">Previous</button>
            <button type="button" class="btn btn-primary" onclick="nextStep(3)">Next</button>
        </div>
    </div>

    <!-- Step 4: Review & Submit -->
    <div class="form-step" id="step4">
        <h4 class="mb-3"><i class="fas fa-check-circle text-success"></i> Review & Submit</h4>
        <div class="form-check mb-3">
            <input class="form-check-input @error('terms') is-invalid @enderror" type="checkbox" name="terms" required>
            <label class="form-check-label">I agree to the Terms & Privacy Policy</label>
            @error('terms') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="d-flex justify-content-between">
            <button type="button" class="btn btn-outline-secondary" onclick="prevStep(4)">Previous</button>
            <button type="submit" class="btn btn-success px-4">Create Account</button>
        </div>
    </div>
</form>

<script>
let currentStep = 1;
function updateProgress(step) {
    document.getElementById("formProgress").style.width = (step * 25) + "%";
    document.getElementById("stepIndicator").innerText = step;
}
function nextStep(step) {
    document.getElementById(`step${step}`).classList.remove('active');
    currentStep = step + 1;
    document.getElementById(`step${currentStep}`).classList.add('active');
    updateProgress(currentStep);
}
function prevStep(step) {
    document.getElementById(`step${step}`).classList.remove('active');
    currentStep = step - 1;
    document.getElementById(`step${currentStep}`).classList.add('active');
    updateProgress(currentStep);
}
document.querySelectorAll('input[name="employment"]').forEach(radio => {
    radio.addEventListener('change', function() {
        document.getElementById('w2Section').style.display = this.value === 'employed' ? 'block' : 'none';
        document.getElementById('form1099Section').style.display = this.value === 'selfEmployed' ? 'block' : 'none';
    });
});
</script>

<style>
.form-step { display: none; }
.form-step.active { display: block; }
</style>

</body>
</html>
