<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Your Access Code</title>
</head>
<body>
    <h2>Hello {{ $user->name }},</h2>
    <p>Thank you for registering! Your 4-digit access code is:</p>
    <h1 style="font-size: 36px; letter-spacing: 10px;">{{ $accessCode }}</h1>
    <p>Please enter this code on the verification page to access your account.</p>
    <p>Best regards,<br>The Team</p>
</body>
</html>
