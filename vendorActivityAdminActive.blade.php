<!DOCTYPE html>
<html lang="en">
@include('emails.header')
<!-- Subject: Your Activity is Now Active on Join Habibi!
Notification: Your {activity name} status has been changed to 'Active' by the admin. -->
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear {{ $vendor_name }},</b></p>
        <div>
            <p>We are pleased to inform you that your activity, "{{ $activity_title }}", has been successfully activated on our platform by the admin. You can now start receiving bookings and enjoy the benefits of being featured on Join Habibi.</p>
            <p>If you have any questions or need further assistance, feel free to reach out to us.</p>
        </div>
        <p>Best regards,</p>
        <p>Team Join Habibi</p>
    </div>
</body>
@include('emails.footer')
</html>