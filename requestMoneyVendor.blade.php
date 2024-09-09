<!DOCTYPE html>
<html lang="en">
@include('emails.header')
{{-- Subject: Your Money Transfer Request Has Been Received
Notification - Your money transfer request has been received. We're processing it now. --}}
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;">
            <b>Dear {{ isset($vendor_name) ? $vendor_name : 'Vendor' }},</b>
        </p>
        <div>
            <p>We hope this email finds you well.</p>
            <p>We have received your request to transfer funds of {{ isset($amount) ? $amount : 'an amount' }} from your
                wallet balance. Our team is currently processing your request, and you will receive a confirmation once
                the transfer is complete.</p>
            <p>If you have any questions or need further assistance, please feel free to reach out.</p>
            <p>Thank you for choosing our platform!</p>
        </div>
        <div>
            <p>Best regards,</p>
            <p>Team Join Habibi</p>
        </div>
    </div>
</body>
@include('emails.footer')

</html>
