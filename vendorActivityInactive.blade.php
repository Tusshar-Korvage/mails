<!DOCTYPE html>
<html lang="en">
@include('emails.header')
<!-- Subject: Activity Status Updated to "Inactive"
Notification: You have successfully changed the status of {activity name} to 'Inactive'. -->
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear {{ $vendor_name }},</b></p>
        <div>
            <p>We have updated the status of your "{{ $activity_title }}" to "Inactive."</p>
            <p>If you need any support or have any queries, please contact us.</p>
        </div>
        <p>Warm regards,</p>
        <p>Team Join Habibi</p>
    </div>
</body>
@include('emails.footer')
</html>