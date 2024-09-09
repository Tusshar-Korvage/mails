<!DOCTYPE html>
<html lang="en">
@include('emails.header')
<!-- Subject: Label Assigned to Your Activity
Notification: You have successfully assigned a label to {activity name} and {X} credits have been dedcuted from your account. -->
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear {{ $vendor_name }},</b></p>
        <div>
            <p>Thank you for updating your activity with a new label. We have received your request and are reviewing the changes.</p>
            <p>Our admin team will reply back to you shortly with any necessary feedback or confirmation.</p>
        </div>
        <p>If you have any questions in the meantime, please feel free to reach out.</p>
        <p>Best regards,</p>
        <p>Team Join Habibi</p>
    </div>
</body>
@include('emails.footer')
</html>
