<!DOCTYPE html>
<html lang="en">
@include('emails.header')
<!-- Subject: Vendor Activity Status Updated to Inactive
Notification: You have successfully changed the status of {vendor_name} {activity name} to 'Inactive'. -->

<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear Admin,</b></p>
        <div>
            <p>This is to notify you that the "{{ $activity_title }}", listed by {{ $vendor_name }}, has been
                successfully marked as inactive on the platform.</p>
            <p>Please let us know if any further actions are required.</p>
        </div>
        <p>Best regards,</p>
        <p>Team Join Habibi</p>
    </div>
</body>
@include('emails.footer')

</html>
