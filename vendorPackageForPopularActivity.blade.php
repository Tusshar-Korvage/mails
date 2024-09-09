<!DOCTYPE html>
<html lang="en">
@include('emails.header')
{{-- Notification : Great job! You’ve used [X] credits to create a new package for { popular activity name}. Keep growing your business with us
Subject: Your Package Creation for {popular activity name} is Successful  --}}
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;">
            <b>Hi {{ isset($vendor_name) ? $vendor_name : 'Vendor' }},</b>
        </p>
        <div>
            <p>Congratulations on successfully creating a package for
                {{ isset($activity_title) ? $activity_title : 'a popular activity' }}. We appreciate your contribution to
                our platform.</p>
            <p>Your package is now pending admin verification. Our team will review it soon, and we will update you once
                the verification is complete.</p>
        </div>
        <div>
            <p>Thank you for being a part of our community.</p>
            <p>Best regards,</p>
            <p>Team Join Habibi</p>
        </div>
    </div>
</body>
@include('emails.footer')
</html>