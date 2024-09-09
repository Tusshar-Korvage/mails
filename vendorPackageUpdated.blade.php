<!DOCTYPE html>
<html lang="en">
@include('emails.header')
{{-- Notification : You have successfully updated { package name}.
Subject: Confirmation of Your Activity Package Update --}}
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear {{ isset($vendor_name) ? $vendor_name : "Sir / Ma'am," }},</b></p>
        <div>
            We are excited to inform you that your package, {{ isset($package_title) ? $package_title : "" }} for Activity {{ isset($activity_title) ? $activity_title : "" }}, has been successfully updated on our platform!
            Your activity is now under review by our admin team for final verification. We will notify you once the verification process is complete and your activity is live.
        </div>
        <div>
            Thank you for being a part of our platform and contributing to our diverse range of experiences!

            Best regards,
            Team Join Habibi
        </div>
    </div>
</body>
@include('emails.footer')

</html>
