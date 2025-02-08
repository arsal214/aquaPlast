<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Account Password</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f3f4f6;">
<div style="width: 100%; max-width: 600px; margin: 0 auto; font-family: Arial, sans-serif; background-color: #ffffff;">
    <table cellpadding="0" cellspacing="0" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td style="background: linear-gradient(79deg,rgba(222, 202, 191, 1) 0%,rgba(176, 194, 200, 1) 100% ); padding: 40px 20px; text-align: center; border-radius: 10px;">
                <h1 style="color: #ffffff; font-size: 32px; margin: 0; font-weight: bold;">Welcome to Nautaes</h1>
            </td>
        </tr>

        <tr>
            <td style="padding: 30px 20px; background-color: #ffffff;">

                <p style="color: #4b5563; font-size: 18px; line-height: 1.6; margin: 0 0 25px 0; font-weight: bold">
                    Hi {{ $first_name }} {{ $last_name }}
                </p>

                <p style="color: #4b5563; font-size: 16px; line-height: 1.6; margin: 0 0 25px 0;">
                    Thank you for joining Nautaes! We're excited to have you on board. Below you'll find your account
                    information. Please keep this information secure.
                </p>

                <table style="width: 100%; margin-bottom: 25px; background-color: #f9fafb; border-radius: 8px;">
                    <tr>
                        <td style="padding: 15px 20px;">
                            <p style="margin: 0; color: #6b7280; font-size: 14px;">Email Address</p>
                            <p style="margin: 5px 0 0 0; color: #111827; font-weight: 500;">{{$email}}</p>
                        </td>
                    </tr>
                </table>

                <table style="width: 100%; margin-bottom: 25px; background-color: #f9fafb; border-radius: 8px;">
                    <tr>
                        <td style="padding: 15px 20px;">
                            <p style="margin: 0; color: #6b7280; font-size: 14px;">Temporary Password</p>
                            <p style="margin: 5px 0 0 0; color: #111827; font-weight: 500;">{{$password}}</p>
                        </td>
                    </tr>
                </table>

                <table style="width: 100%; margin-bottom: 30px;">
                    <tr>
                        <td align="center">
                            <a href="https://nautaes.com/en/signin"
                               style="display: inline-block; padding: 12px 24px; background: linear-gradient(135deg, #2563eb, #9333ea); color: #ffffff; text-decoration: none; border-radius: 25px; font-size: 16px; font-weight: 600;">
                                Get Started &rarr;
                            </a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td style="background-color: #f9fafb; padding: 30px 20px; text-align: center;">
                <div style="margin-bottom: 15px; font-size: 24px; color: #2563eb;">
                    &#9875;
                </div>
                <p style="margin: 0; font-size: 14px; color: #6b7280;">
                    &copy; 2025 Nautaes. All rights reserved.
                </p>
            </td>
        </tr>
    </table>
</div>
</body>
</html>
