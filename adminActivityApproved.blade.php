<!DOCTYPE html>
<html lang="en">
@include('emails.header')
{{-- Subject: Activity Verification Successfully Completed
Notification: Activity titled {{ activity_title }} by {{ vendor_name }} has been successfully verified. --}}

<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;">
            <b>Dear Admin,</b>
        </p>
        <div>
            <p>We are pleased to inform you that the activity titled
                "<b>{{ isset($activity_title) ? $activity_title : 'an activity' }},</b>" by vendor
                {{ isset($vendor_name) ? $vendor_name : 'Vendor' }} has been successfully verified.</p>
            <p>Thank you for your prompt action in reviewing and approving the activity. It is now live and available
                for customers to book.</p>
            <p>Best regards,</p>
            <p>Team Join Habibi</p>
        </div>
    </div>
</body>
@include('emails.footer')

</html>