<!DOCTYPE html>
<html lang="en">
@include('emails.header')
<!-- Subject: Tag Added Successfully – Awaiting Admin Review
Notification: You have successfully assigned a Tag to {activity name} and {X} credits have been dedcuted from your account. -->
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear {{ $vendor_name }},</b></p>
        <div>
            <p>Thank you for creating a new tag on our platform! We’re excited to see how this will help enhance the experience for your customers.</p>
            <p>Please note that our admin team will review your new tag shortly. You will receive a response from us within a short time, confirming whether the tag has been approved or if further action is needed.</p>
            <p>We appreciate your patience and cooperation.</p>
        </div>
        <p>Best regards,</p>
        <p>Team Join Habibi</p>
    </div>
</body>
@include('emails.footer')
</html>
