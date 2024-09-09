<!DOCTYPE html>
<html lang="en">
@include('emails.header')
<!-- Subject: Vendor Tag Creation Notification
Notification: {Vendor name} has assigned a tag to their {activity name}. Please review it. -->

<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear Admin,</b></p>
        <div>
            <p>We hope you are doing well.</p>
            <p>This is to inform you that a vendor has assigned a {tag_name} to one of their activity on our platform. Please review the details
                at your earliest convenience.</p>
            <p>We kindly request that you reply back once the review is complete.</p>
        </div>
        <p>Thank you for your attention to this matter.</p>
        <p>Best regards,</p>
        <p>Team Join Habibi</p>
    </div>
</body>
@include('emails.footer')

</html>
