<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="5;url={{ route('login') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirecting...</title>
    <style>
        body {
            background: linear-gradient(135deg, #1d1f21, #2c3e50);
            color: #fff;
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
        .box {
            background: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
        }
        h2 {
            font-size: 22px;
            margin-bottom: 10px;
        }
        p {
            opacity: 0.8;
            font-size: 15px;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            color: #00d8ff;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
        }
        a:hover {
            color: #1abc9c;
        }
    </style>
</head>
<body>
    <div class="box">
        <h2>Something went wrong…</h2>
        <p>You’ll be redirected to the login page in a few seconds.</p>
        <a href="{{ route('login') }}">Go to Login Now</a>
    </div>
</body>
</html>
