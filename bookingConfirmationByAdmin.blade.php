<!DOCTYPE html>
<html lang="en">
@include('emails.header')
<!-- Subject: Booking Confirmation from Admin
Notification: Good news! Your booking has been confirmed by the admin. Check your dashboard for more details. -->
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear {{ $vendor_name }},</b></p>
        <div>
            <p>We are pleased to inform you that your recent booking has been successfully confirmed by our admin team.</p>
            <p><b>Booking Details:</b></p>
            <p><b>Customer Name:</b> {{ $customer_name }}</p>
            <p><b>Activity:</b> {{ $activity_title }}</p>
            <p><b>Booking Date & Slot:</b> {{ $booking_date }}</p>
            <p>Please ensure that all arrangements are in place for the booking. If you have any questions or need further assistance, feel free to contact us.</p>
            <p>Thank you for partnering with us!</p>
        </div>
        <p>Best regards,</p>
        <p>Team Join Habibi</p>
    </div>
</body>
@include('emails.footer')
</html>