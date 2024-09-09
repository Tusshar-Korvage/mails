<!DOCTYPE html>
<html lang="en">
@include('emails.header')
<!-- Notification: { Vendor name} has rejected a new booking request from a customer. Please review the details.
Subject: Vendor Rejected a Customer Booking -->

<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear Admin,</b></p>
        <div>
            <p>I hope this email finds you well.</p>
            <p>Please be informed that a vendor has rejected a new booking from a customer. Below are the details of the
                rejected booking:</p>
            <p><b>Customer Name:</b> {{ $customer_name }}</p>
            <p> <b>Booking ID:</b> {{ $booking_id }}</p>
            <p> <b>Activity:</b> {{ $activity_title }}</p>
            <p> <b>Vendor Name:</b> {{ $vendor_name }}</p>
            <p> <b>Reason for Rejection (if provided):</b> {{ isset($reason) ? $reason : 'no reason' }}
            </p>
            <p>Please take any necessary action or reach out to the vendor for further clarification if needed.</p>
            <p>Thank you for your attention to this matter.</p>
        </div>
        <p>Best regards,</p>
        <p>Team Join Habibi</p>
    </div>
</body>
@include('emails.footer')

</html>
