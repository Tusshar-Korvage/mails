<!DOCTYPE html>
<html lang="en">
@include('emails.header')
<!-- Subject: Your Account Status has been Changed to Unverified
Notification: Your account status has been changed to 'Unverified' by the admin. Please check your details and contact support if needed. -->
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear {{ $vendor_name }},</b></p>
        <div>
            <p>We hope this message finds you well.</p>
            <p>We wanted to inform you that your account on our platform has been marked as "Unverified." This change in status may affect your ability to list activities and manage bookings.</p>
            <p>Please review your account details and ensure that all the necessary information and documents are accurate and up to date. Once the required updates are made, you can request verification again.</p>
            <p>If you have any questions or need assistance, feel free to contact our support team at support@joinhabibi.com.</p>
            <p>Thank you for being a part of our platform.</p>
        </div>
        <p>Best regards,</p>
        <p>Team Join Habibi</p>
    </div>
</body>
@include('emails.footer')
</html>