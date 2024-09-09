<!DOCTYPE html>
<html lang="en">
@include('emails.header')
<!-- Subject: {{ $vendor_name }} Rejection Notification
Notification : {{ $vendor_name }} has been rejected due to incorrect details. Please take the necessary action.-->
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear Admin,</b></p>
        <div>
            <p>This is to notify you that {{ $vendor_name }} has been rejected from the platform due to submission of “Incorrect Details”.</p>
            <p>Please proceed with the appropriate follow-up actions.</p>
        </div>
        <p>Thank you for your attention.</p>
        <p>Best regards,</p>
        <p>Team Join Habibi</p>
    </div>
</body>
@include('emails.footer')
</html>