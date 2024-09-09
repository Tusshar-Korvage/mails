<!DOCTYPE html>
<html lang="en">
@include('emails.header')
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
            <p>We regret to inform you that your package for {{ isset($activity_name) ? $activity_name : 'a popular activity' }} has been rejected after admin verification due to {{ isset($rejection_reason) ? $rejection_reason : 'an unspecified reason' }}.</p>
            <p>Please review our guidelines and resubmit the package with the necessary adjustments.</p>
            <p>For assistance, contact us at support@joinhabibi.com.</p>
        </div>
        <div>
            <p>Thank you for your understanding.</p>
            <p>Best regards,</p>
            <p>Team Join Habibi</p>
        </div>
    </div>
</body>
@include('emails.footer')
</html>
