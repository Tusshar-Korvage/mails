<!DOCTYPE html>
<html lang="en">
@include('emails.header')
<!-- Subject: Vendor Activity Status Update
Notification: {Vendor name} has changed the status of {activity name} to 'Active'. Please review the activity. -->
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear Admin,</b></p>
        <div>
            <p>I hope this message finds you well.</p>
            <p>We wanted to inform you that an activity listed by {{ $vendor_name }} has been marked as "Active" on our platform. Please review the activity to ensure it meets our standards and is ready for customers to book.</p>
            <p><b>Activity Details:</b></p>
            <p><b>Activity Name:</b> {{ $activity_title }}</p>
            <p><b>Vendor:</b> {{ $vendor_name }}</p>
            <p>Please verify that the activity complies with our guidelines and is available for customers to book. If there are any issues or if further action is required, please advise.</p>
        </div>
        <p>Thank you for your prompt attention to this matter.</p>
        <p>Best regards,</p>
        <p>Team Join Habibi</p>
    </div>
</body>
@include('emails.footer')
</html>