<!DOCTYPE html>
<html lang="en">
@include('emails.header')
<!-- Subject: Booking Cancellation Update
Notification: A booking has been canceled by the customer. Check the admin dashboard for more information. -->
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear {{ $admin_name }},</b></p>
        <div>
            <p>We wanted to inform you that a booking has been canceled by the customer.</p>
            <p><b>Booking Details:</b></p>
            <p><b>Booking ID:</b> {{ $booking_id }}</p>
            <p><b>Customer Name:</b> {{ $customer_name }}</p>
            <p><b>Activity:</b> {{ $activity_title }}</p>
            <p><b>Vendor of the Activity:</b> {{ $vendor_name }}</p>
            <p><b>Date of Cancellation:</b> {{ $cancellation_date }}</p>
            <p>Please take the necessary actions to update the booking status in our system.</p>
        </div>
        <p>Best regards,</p>
        <p>Team Join Habibi</p>
    </div>
</body>
@include('emails.footer')
</html>