<!DOCTYPE html>
<html>
<head>
    <title>New Announcement</title>
</head>
<body style="font-family: sans-serif; line-height: 1.6; color: #333; padding: 20px;">
    <div style="max-width: 600px; margin: auto; border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px;">
        <h2 style="color: #2563eb; margin-top: 0;">{{ $announcement['title'] }}</h2>
        <p>{{ $announcement['message'] }}</p>
        <hr style="border: 0; border-top: 1px solid #e2e8f0; margin: 20px 0;">
        <p style="font-size: 12px; color: #64748b;">
            Sent from kyle Car Shop System on {{ date('F d, Y h:i A') }}
        </p>
    </div>
</body>
</html>
