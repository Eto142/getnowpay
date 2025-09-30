<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Your Access Code</title>
</head>
<body style="margin:0; padding:0; font-family: Arial, Helvetica, sans-serif; background-color:#f4f6f8; color:#333;">

  <!-- Wrapper -->
  <table align="center" width="100%" border="0" cellspacing="0" cellpadding="0" style="max-width:600px; background:#ffffff; border-radius:10px; overflow:hidden; box-shadow:0 2px 6px rgba(0,0,0,0.1);">
    <!-- Header / Logo -->
    <tr>
      <td align="center" style="background:#007BFF; padding:20px;">
        <h1 style="margin:0; font-size:28px; font-weight:bold; color:#ffffff; letter-spacing:1px;">
          Get<span style="color:#eaf4ff;">Now</span>Pay
        </h1>
      </td>
    </tr>

    <!-- Content -->
    <tr>
      <td style="padding:30px;">
        <h2 style="margin-top:0; color:#333;">Hello {{ $user->name }},</h2>
        <p style="font-size:16px; line-height:1.5; margin:15px 0;">
          Thank you for generating your 4-digit access code!  
          Your secure access code is:
        </p>

        <div style="text-align:center; margin:25px 0;">
          <h1 style="display:inline-block; font-size:40px; font-weight:bold; color:#007BFF; letter-spacing:15px; margin:0; padding:15px 30px; border:2px dashed #007BFF; border-radius:8px;">
            {{ $accessCode }}
          </h1>
        </div>

        <p style="font-size:16px; line-height:1.5; margin:15px 0;">
          Please enter this code on the verification page to access your account securely.
        </p>

        <p style="margin:25px 0 0 0; font-size:16px;">
          Best regards,<br>
          <strong>The GetNowPay Team</strong>
        </p>
      </td>
    </tr>

    <!-- Footer -->
    <tr>
      <td align="center" style="background:#f0f4f8; padding:15px; font-size:13px; color:#777;">
        &copy; {{ date('Y') }} GetNowPay. All rights reserved.
      </td>
    </tr>
  </table>

</body>
</html>
