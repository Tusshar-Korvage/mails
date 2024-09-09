<!DOCTYPE html>
<html lang="en">
@include('emails.header')
{{-- Subject: Activity Submission Rejected
Notification: We've identified a problem with your activity listing. Please fix it to keep your activity live. --}}
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
            <p>We regret to inform you that your activity,
                {{ isset($activity_title) ? $activity_title : 'Activity Name' }}, has been rejected after admin
                verification. The rejection was due to the following concerns:</p>
                <p><i>{{ reason_for_rejection }}</i></p>
            <p>Please review the details and make necessary adjustments before resubmitting.</p>
            <p>Thank you for your understanding.</p>
        </div>
        <div>
            <p>Best regards,</p>
            <p>Team Join Habibi</p>
        </div>
    </div>
</body>
@include('emails.footer')

</html>
