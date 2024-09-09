<!DOCTYPE html>
<html lang="en">
@include('emails.header')
<!-- Subject: vendor_name Status Updated to "Unverified"
Notification :  vendor_name has been marked as 'Unverified.' Please review their details. -->
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear Admin,</b></p>
        <div>
            <p>We wanted to inform you that the status of {{ isset($vendor_name) ? $vendor_name : '' }} has been updated to "Unverified" on the platform.</p>
            <p>Please review the vendor's profile and take any necessary actions.</p>
        </div>
        <p>Thank you for your attention.</p>
        <p>Best regards,</p>
        <p>Team Join Habibi</p>
    </div>
</body>
@include('emails.footer')
</html>