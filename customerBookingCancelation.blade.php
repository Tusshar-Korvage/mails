<!DOCTYPE html>
<html lang="en">
@include('emails.header')
<!-- Subject: Booking Cancellation Confirmation
Notification: Your booking has been successfully canceled. -->
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear {{ $customer_name }},</b></p>
        <div>
            <p>We hope this message finds you well.</p>
            <p>We want to let you know that your booking for {{ $activity_title }} on {{ $date }} has been successfully canceled.</p>
            <p>Please know that your payment will be refunded to your original payment method within 7 days.</p>
            <p>If you have any questions or need further assistance, please feel free to reach out to us at support@joinhabibi.com.</p>
            <p>Thank you for using our platform. We look forward to serving you again in the future!</p>
        </div>
        <p>Best regards,</p>
        <p>Team Join Habibi</p>
    </div>
</body>
@include('emails.footer')
</html>