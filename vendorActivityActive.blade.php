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
            <p>Congratulations! Your activity, {{ isset($activity_title) ? $activity_title : 'an activity' }}, has been successfully verified and is now live on our platform.</p>
            <p>We are thrilled to have you offer such an exciting experience to our users. If you have any questions or need further assistance, please don't hesitate to reach out to us.</p>
            <p>Thank you for choosing our platform and contributing to our vibrant community!</p>
        </div>
        <div>
            <p>Best regards,</p>
            <p>Team Join Habibi</p>
        </div>
    </div>
</body>
@include('emails.footer')
</html>