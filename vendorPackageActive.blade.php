<!DOCTYPE html>
<html lang="en">
@include('emails.header')
{{-- Subject: Your package is now live! 
Notification : Congratulations! Your package is live now and [X] credit has been deducted from your account successfully --}}
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
            <p>We are pleased to inform you that your package, "{{ isset($package_title) ? $package_title : 'Package Name' }}," has been approved by our admin team and is now live on our platform.</p>
            <p>Your package is now available for customers to book. We look forward to helping you connect with more customers.</p>
            <p>Thank you for being a valuable part of our community.</p>
        </div>
        <div>
            <p>Kind regards,</p>
            <p>Team Join Habibi</p>
        </div>
    </div>
</body>
@include('emails.footer')
</html>
