<!DOCTYPE html>
<html lang="en">
@include('emails.header')
<!-- Subject: Notification for Vendor Package Update
Notification: {Vendor name} has updated an existing package. Please review the changes. -->
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear Admin,</b></p>
        <div>
            <p>This is to inform you that {{ $vendor_name }} has made changes to their popular activity {{$activity_title}} package: "{{ $package_name }}". 
                Kindly review the updated package details and take the necessary actions.</p>
            <p>Please reach out if you have any questions or need additional information.</p>
        </div>
        <p>Thank you,</p>
        <p>Team Join Habibi</p>
    </div>
</body>
@include('emails.footer')
</html>
