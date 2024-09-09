<!DOCTYPE html>
<html lang="en">
@include('emails.header')
{{-- Subject: Status of Your Refund Inquiry
Notification: Your refund request is in progress. --}}
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
            <p>Thank you for reaching out to us regarding the status of your refund. We understand that waiting for a refund can be concerning, and we appreciate your patience.</p>
            <p>We have received your request and our team is currently processing it. Refunds typically take 7  to 10 business days to be processed and reflected in your account. We are working diligently to ensure that your refund is completed as quickly as possible.</p>
            <p>If you have any further questions or need additional assistance, please do not hesitate to contact us. We are here to help!</p>
        </div>
        <p>Thank you for choosing our platform for your activities and travel experiences.</p>
        <p>Best regards,</p>
        <p>Team Join Habibi</p>
    </div>
</body>
@include('emails.footer')
</html>