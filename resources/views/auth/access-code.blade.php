<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Code Verification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .access-card {
            background: #fff;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 420px;
        }
        .access-card h3 {
            font-weight: bold;
            text-align: center;
            margin-bottom: 1.5rem;
        }
        .code-inputs {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1rem;
        }
        .code-inputs input {
            width: 70px;
            height: 70px;
            font-size: 2rem;
            text-align: center;
            border-radius: 10px;
            border: 2px solid #ced4da;
            transition: all 0.2s ease;
        }
        .code-inputs input:focus {
            border-color: #198754;
            outline: none;
            box-shadow: 0 0 6px rgba(25, 135, 84, 0.5);
        }
        .btn-verify {
            font-size: 1.1rem;
            padding: 0.75rem;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<div class="access-card">
    <h3>Enter Access Code</h3>
    <form method="POST" action="{{ route('access.code.verify') }}">
        @csrf
        <div class="code-inputs">
            <input type="text" name="code1" maxlength="1" class="form-control @error('code1') is-invalid @enderror" autofocus>
            <input type="text" name="code2" maxlength="1" class="form-control @error('code2') is-invalid @enderror">
            <input type="text" name="code3" maxlength="1" class="form-control @error('code3') is-invalid @enderror">
            <input type="text" name="code4" maxlength="1" class="form-control @error('code4') is-invalid @enderror">
        </div>

        @if($errors->any())
            <div class="alert alert-danger small">{{ $errors->first() }}</div>
        @endif

        <button type="submit" class="btn btn-success w-100 btn-verify">Verify</button>
    </form>
</div>

<script>
    // Auto focus next input on typing
    document.querySelectorAll('.code-inputs input').forEach((input, index, arr) => {
        input.addEventListener('input', () => {
            if (input.value.length === 1 && index < arr.length - 1) {
                arr[index + 1].focus();
            }
        });
        input.addEventListener('keydown', (e) => {
            if (e.key === "Backspace" && input.value === "" && index > 0) {
                arr[index - 1].focus();
            }
        });
    });
</script>

</body>
</html>
