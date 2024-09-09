<!DOCTYPE html>
<html lang="en">
@include('emails.header')
<!-- Subject: Vendor Activity Verification Request
Notification: {Vendor name} has submitted {activity name} for verification. Please review and take the necessary action. -->

<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear Admin,</b></p>
        <div>
            <p>A vendor has submitted a request for verification of their newly created activity. Please review the
                details below and proceed with the necessary verification process.</p>
            <p><b>Vendor Name:</b> {{ $vendor_name }}</p>
            <p> <b>Activity Name:</b> {{ $activity_title }}</p>
            <p> <b>Submission Date:</b> {{ $date }}</p>
            <p>Please review and verify the activity at your earliest convenience. If there are any issues or additional
                information needed, let us know.</p>
        </div>
        <p>Thanks for your attention to this matter.</p>
        <p>Best regards,</p>
        <p>Team Join Habibi</p>
    </div>
</body>
@include('emails.footer')

</html>
