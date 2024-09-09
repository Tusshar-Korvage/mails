<!DOCTYPE html>
<html lang="en">
@include('emails.header')
<!-- Subject: Confirmation of Your Activity Package Update
Notification: You have successfully updated {package name}. -->
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear {{ $vendor_name }},</b></p>
        <div>
            <p>We have successfully received your request to update the package for "{{ $activity_name }}".</p>
            <p>Our admin team is currently reviewing the changes and will respond to you shortly.</p>
            <p>Thank you for your patience. If you have any questions, please let us know.</p>
        </div>
        <p>Warm regards,</p>
        <p>Team Join Habibi</p>
    </div>
</body>
@include('emails.footer')
</html>