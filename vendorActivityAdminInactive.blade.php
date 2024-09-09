<!DOCTYPE html>
<html lang="en">
@include('emails.header')
<!-- Subject: Your Activity is Currently Inactive on Join Habibi
Notification: Your {activity name} status has been changed to 'Inactive' by the admin. -->
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear {{ $vendor_name }},</b></p>
        <div>
            <p>We regret to inform you that your "{{ $activity_title }}" has been set to inactive on our platform by the admin. This action has been taken due to [reason, if applicable].</p>
            <p>If you have any questions or need assistance regarding this change, please contact us at your earliest convenience.</p>
        </div>
        <p>Best regards,</p>
        <p>Team Join Habibi</p>
    </div>
</body>
@include('emails.footer')
</html>