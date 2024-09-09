<!DOCTYPE html>
<html lang="en">
@include('emails.header')
{{-- Subject: Your Package Creation is Successful
Notification : Your Package Creation has been sucessfully created and pending for admin verification.--}}
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear {{ isset($vendor_name) ? $vendor_name : "Sir / Ma'am," }},</b></p>
        <div>
            <p>Congratulations on successfully creating a new package! We appreciate your contribution to our platform.</p>
            <p>Your package is now pending admin verification. Our team will review it soon, and we will update you once the verification is complete.</p>
            <p>Thank you for being a part of our community.</p>
        </div>
        <div>
            <p>Thank you for being a part of our platform and contributing to our diverse range of experiences!</p>
            <p>Best regards,</p>
            <p>Team Join Habibi</p>
        </div>
    </div>
</body>
@include('emails.footer')

</html>
