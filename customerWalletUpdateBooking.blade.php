<!DOCTYPE html>
<html lang="en">
@include('emails.header')
{{-- Subject: Your Wallet Balance Has Been Updated
Notification - Your payment was successful, and the booking amount has been deducted from your wallet balance.  --}}
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
            <p>Your recent booking {{ isset($booking_id) ? $booking_id : 'Booking id' }} on {{ isset($date) ? $date : 'a date' }} was successful!</p>
            <p>We've deducted {{ isset($amount) ? $amount : 'an amount' }} from your wallet balance.</p>
            <p><b>Updated Wallet Balance:</b> {{ isset($remaining_balance) ? $remaining_balance : 'a remaining balance' }}</p>
            <p>Thank you for choosing us for your adventures. We hope you have a fantastic experience!</p>
            <p>If you need any help or have any questions, we're just an email away.</p>
        </div>
        <div>
            <p>Best regards,</p>
            <p>Team Join Habibi</p>
        </div>
    </div>
</body>
@include('emails.footer')
</html>
