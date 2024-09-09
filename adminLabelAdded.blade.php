<!DOCTYPE html>
<html lang="en">
@include('emails.header')
<!-- Subject: Vendor Assigned a New Label to an Activity
Notification: {Vendor name} has assigned a new label to {activity name}. Please review it. -->
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear Admin,</b></p>
        <div>
            <p>We wanted to inform you that a vendor has recently assigned a new label to one of their activities on our platform. The details of the activity and the assigned label are as follows:</p>
            <p><b>Vendor Name:</b> {{ $vendor_name }}</p>
            <p><b>Activity Name:</b> {{ $activity_title }}</p>
            <p><b>Assigned Label:</b> {{ $label_name }}</p>
            <p>Please review the label assignment at your earliest convenience. If any action is required from your side, please take the necessary steps.</p>
        </div>
        <p>Thank you for your attention to this matter.</p>
        <p>Best regards,</p>
        <p>Team Join Habibi</p>
    </div>
</body>
@include('emails.footer')
</html>
