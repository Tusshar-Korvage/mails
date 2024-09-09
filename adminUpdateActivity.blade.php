<!DOCTYPE html>
<html lang="en">
@include('emails.header')
<!-- Subject: Vendor Activity Update Notification
Notification: {vendor_name} has updated an existing {activity_title}. Please review the changes. -->
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear Admin,</b></p>
        <div>
            <p>This is to notify you that a vendor has recently updated their activity listing. The details are as follows:</p>
            <p><b>Vendor Name:</b> {{ $vendor_name }}</p>
            <p> <b>Activity Name:</b> {{ $activity_title }}</p>
            <p>Please review the updated details at your earliest convenience and proceed with the necessary action.</p>
        </div>
        <p>Thank you for your cooperation.</p>
        <p>Best regards,</p>
        <p>Team Join Habibi</p>
    </div>
</body>
@include('emails.footer')
</html>