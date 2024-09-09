<!DOCTYPE html>
<html lang="en">
@include('emails.header')
{{-- Subject: Your Profile Has Been Successfully Updated!
Notification: Your profile has been successfully updated! --}}
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;">
            <b>Dear {{ isset($customer_name) ? $customer_name : 'Customer' }},</b>
        </p>
        <div>
            <p>We are excited to inform you that your profile has been successfully updated!</p>
            <p>Thank you for keeping your information current. This helps us serve you better and ensure you have the best experience on our platform.</p>
            <p>If you have any questions or need further assistance, feel free to reach out to our support team at support@joinhabibi.com or call us at +971 52 853 8071..</p>
        </div>
        <p>Thank you for being a valued member of our community!</p>
        <p>Best regards,</p>
        <p>Team Join Habibi</p>
    </div>
</body>
@include('emails.footer')
</html>