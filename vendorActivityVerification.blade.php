<!DOCTYPE html>
<html lang="en">
@include('emails.header')
<!-- Subject: Your Activity Verification Request Has Been Successfully Submitted!
Notification: Your {activity name} has been created successfully & submitted for admin verification. -->
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear {{ $vendor_name }},</b></p>
        <div>
            <p>We are pleased to inform you that your request for activity verification has been successfully submitted for admin review. Our team will carefully review the details to ensure everything meets our platform's standards.</p>
            <p>Once the verification process is complete, we will notify you of the outcome. In the meantime, feel free to reach out if you have any questions.</p>
        </div>
        <p>Thank you for choosing us as your platform to showcase your activities.</p>
        <p>Best regards,</p>
        <p>Team Join Habibi</p>
    </div>
</body>
@include('emails.footer')
</html>
