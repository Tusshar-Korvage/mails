<!DOCTYPE html>
<html lang="en">
@include('emails.header')
<!-- Subject : Activity Creation Successful!
Notification: Your activity creation was successful! Please create a package before requesting admin for verification. -->
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear {{ $vendor_name }},</b></p>
        <div>
            <p>Congratulations! Your activity, "{{ $activity_title }}", has been successfully created on our platform. We’re excited to have you offer this experience to our customers.</p>
            <p><b>Next Steps:</b></p>
            <ul>
                <li>Create a Package: To make your activity available for booking, please create a package that includes all the details such as pricing, availability, and any special offers you’d like to provide.</li>
                <li>Request Admin Verification: Once your package is ready, you can send it for admin verification. After approval, your activity will go live and be available for customers to book.</li>
            </ul>
            <p>We're here to help you every step of the way. If you have any questions or need assistance, please don’t hesitate to reach out to our support team.</p>
        </div>
        <p>Best regards,</p>
        <p>Team Join Habibi</p>
    </div>
</body>
@include('emails.footer')
</html>