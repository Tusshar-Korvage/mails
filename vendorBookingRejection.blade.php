<!DOCTYPE html>
<html lang="en">
@include('emails.header')
<!-- Subject: Booking Rejection Notification
Notification: Your booking has been rejected by the admin. Check your dashboard for more details. -->
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear {{ $vendor_name }},</b></p>
        <div>
            <p>We regret to inform you that the booking for your activity, {{ $activity_title }}, has been rejected by our admin team.</p>
            <p>If you have any questions or need further details, please feel free to contact us.</p>
            <p>Thank you for your understanding.</p>
        </div>
        <p>Best regards,</p>
        <p>Team Join Habibi</p>
    </div>
</body>
@include('emails.footer')
</html>