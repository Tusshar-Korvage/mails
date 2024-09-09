<!DOCTYPE html>
<html lang="en">
@include('emails.header')
{{-- Subject: Your Wallet Has Been Successfully Topped Up!
Notification - Your wallet has been topped up successfully with [amount]. --}}
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;">
            <b>Dear {{ isset($customer_name) ? $customer_name : 'Customer' }},</b>
        </p>
        <div>
            <p>We're happy to let you know that {{ isset($amount) ? $amount : 'an amount' }} has been successfully added to your wallet on Joinhabibi.</p>
            <p>You can now use this amount to book your favorite activities, travel experiences, cultural events, and more on our platform.</p>
            <p>Thank you for choosing Joinhabibi to explore the best experiences. If you have any questions or need help, feel free to reach out to our support team.</p>
        </div>
        <div>
            <p>Happy Exploring!</p>
            <p>Best regards,</p>
            <p>Team Join Habibi</p>
        </div>
    </div>
</body>
@include('emails.footer')
</html>
