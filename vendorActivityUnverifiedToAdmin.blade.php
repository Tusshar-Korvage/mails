<!DOCTYPE html>
<html lang="en">
@include('emails.header')
{{-- Subject: Vendor Activity Unverified and Pending Review
Notification: Status of Activity titled {{ activity_title }} by {{ vendor_name }} has been changed to “unverified.” --}}

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
            <p>The activity titled "<b>{{ isset($activity_title) ? $activity_title : '' }}</b>" listed by
                {{ isset($vendor_name) ? $vendor_name : '' }} has been changed to "unverified" status. Please take the
                appropriate steps to review and confirm or remove the activity as per our guidelines.</p>
            <p>We appreciate your prompt attention to this matter.</p>
            <p>Best regards,</p>
            <p>Team Join Habibi</p>
        </div>
    </div>
</body>
@include('emails.footer')

</html>
