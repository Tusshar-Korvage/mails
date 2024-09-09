<!DOCTYPE html>
<html lang="en">
@include('emails.header')
<!-- Subject: Your Activity is Now Active!
Notification: You have successfully changed the status of {activity name} to 'Active'. -->
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear {{ $vendor_name }},</b></p>
        <div>
            <p>Great news!</p>
            <p>Your "{{ $activity_title }}" is now active on our platform. Customers can now view and book it.</p>
            <p>Thank you for being part of our platform and offering exciting experiences. If you need any help or have questions, feel free to reach out.</p>
        </div>
        <p>Best regards,</p>
        <p>Team Join Habibi</p>
    </div>
</body>
@include('emails.footer')
</html>