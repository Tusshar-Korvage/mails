<!DOCTYPE html>
<html lang="en">
@include('emails.header')
<!-- Subject: Activity Update Successful
Notification: You have successfully updated {activity name}. -->
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear {{ $vendor_name }},</b></p>
        <div>
            <p>We wanted to let you know that the "{{ $activity_title }}" you recently updated on our platform has been
                successfully saved.</p>
            <p>Our admin team will review the changes, and you can expect a response shortly. If any further information
                is needed, we will reach out to you.</p>
            <p>Thank you for keeping your activities up-to-date!</p>
        </div>
        <p>Best regards,</p>
        <p>Team Join Habibi</p>
    </div>
</body>
@include('emails.footer')

</html>
