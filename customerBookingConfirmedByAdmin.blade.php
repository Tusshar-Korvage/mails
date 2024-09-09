<!DOCTYPE html>
<html lang="en">
@include('emails.header')
<!-- Subject: Your Booking Has Been Confirmed!
Notification: Your booking has been confirmed. Get ready to explore! -->
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear {{ $customer_name }},</b></p>
        <div>
            <p>We are excited to inform you that your booking for {{ $activity_title }} on {{ $booking_date }} has been successfully confirmed. Thank you for choosing Join Habibi as your adventure partner!</p>
            <p><b>Here are the details of your booking:</b></p>
            <p><b>Activity/Event:</b> {{ $activity_title }}</p>
            <p><b>Booking Date and Slot:</b> {{ $date_and_time }}</p>
            <p><b>Location:</b> {{ $location }}</p>
            <p><b>Booking Reference:</b> {{ $booking_reference }}</p>
            <p>Please make sure to arrive on time and /ping any necessary items as mentioned in the booking details. If you have any questions or need further assistance, feel free to contact us.</p>
            <p>We hope you have an amazing experience!</p>
        </div>
        <p>Best regards,</p>
        <p>Team Join Habibi</p>
    </div>
</body>
@include('emails.footer')
</html>