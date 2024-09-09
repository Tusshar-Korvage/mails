<!DOCTYPE html>
<html lang="en">
@include('emails.header')
<!-- Subject: Activity Status Updated to Inactive
Notification: {Vendor name} has changed the status of {activity name} to 'Inactive'. Please review the activity. -->

<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear Admin,</b></p>
        <div>
            <p>Just a quick update: the activity "{{ $activity_title }}" has been marked as Inactive by
                {{ $vendor_name }}. Kindly review the update and take appropriate action.</p>
            <p>Let us know if you have any questions or need further details.</p>
        </div>
        <p>Best regards,</p>
        <p>Team Join Habibi</p>
    </div>
</body>
@include('emails.footer')

</html>
