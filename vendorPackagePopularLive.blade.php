<!DOCTYPE html>
<html lang="en">
@include('emails.header')
{{-- Notification : Congratulations! Your package has been successfully created and is now live.
Subject: Your Package is Live and Ready for Bookings! --}}
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;">
            <b>Dear {{ isset($vendor_name) ? $vendor_name : 'Vendor' }},</b>
        </p>
        <div>
            <p>We are pleased to inform you that your package for
                {{ isset($activity_title) ? $activity_title : 'a popular activity' }}, has been approved by our admin team
                and is now live on our platform.</p>
            <p>Your package is now available for customers to book. We look forward to helping you connect with more
                customers.</p>
        </div>
        <div>
            <p>Thank you for being a valuable part of our community.</p>
            <p>Kind regards,</p>
            <p>Team Join Habibi</p>
        </div>
    </div>
</body>
@include('emails.footer')

</html>
