<!DOCTYPE html>
<html lang="en">
@include('emails.header')
<!-- Subject: Booking Cancellation Update
Notification: A customer has canceled their booking for your activity. -->
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear {{ $vendor_name }},</b></p>
        <div>
            <p>We want to inform you that a booking for your activity has been canceled by the customer.</p>
            <p><b>Booking Details:</b></p>
            <p><b>Activity Name:</b> {{ $activity_title }}</p>
            <p><b>Booking ID:</b> {{ $booking_id }}</p>
            <p><b>Customer Name:</b> {{ $customer_name }}</p>
            <p>Please check your dashboard for more details. If you have any questions, feel free to reach out to us.</p>
        </div>
        <p>Best regards,</p>
        <p>Team Join Habibi</p>
    </div>
</body>
@include('emails.footer')
</html>
