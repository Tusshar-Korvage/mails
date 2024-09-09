<!DOCTYPE html>
<html lang="en">
@include('emails.header')
{{-- Subject: Important: Your Activity is Now Unverified
Notification: Status of your activity titled {{ activity_title }} has been changed to “unverified” by the admin. --}}

<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;">
            <b>Dear {{ isset($vendor_name) ? $vendor_name : '' }},</b>
        </p>
        <div>
            <p>We hope this email finds you well. We want to inform you that your activity titled
                "<b>{{ isset($activity_title) ? $activity_title : '' }}</b>" has been marked as unverified by our admin
                team. This means that the activity will not be visible to customers on our platform until it is verified
                again.</p>
            <p>To resolve this, please review your activity details and make any necessary updates. Once completed, you
                can resubmit the activity for verification.</p>
            <p>If you have any questions or need assistance, feel free to reach out to our support team at
                support@joinhabib.com</p>
            <p>Thank you for being a valued partner.</p>
            <p>Best regards,</p>
            <p>Team Join Habibi</p>
        </div>
    </div>
</body>
@include('emails.footer')

</html>
