<!DOCTYPE html>
<html lang="en">
@include('emails.header')
{{--Notification : { Vendor Name } has confirmed a new booking from a customer. Please review the details.
Subject : Vendor Confirmation of New Booking  --}}
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear Admin,</b></p>
        <div>
            <p>We are pleased to inform you that a vendor has just confirmed a new booking.</p>
        </div>
        <div class="button text-center py-4">
            <p>Booking Details:</p>
            <div class="phone-img text-center">
                <p>Customer Name: {{ isset($customer_name) ? $customer_name : '' }}</p>
                <p>Vendor Name : {{ isset($vendor_name) ? $vendor_name : '' }}</p>
                <p>Activity Booked: {{ isset($activity_title) ? $activity_title : '' }}</p>
                <p>Booking Date & Slot: {{ isset($booking_date) ? $booking_date : '' }}</p>
                <p>Activity Date: {{ isset($activity_date) ? $activity_date : '' }}</p>
            </div>
        </div>
        <div>
            <p>Please review the booking details and take any necessary actions to ensure a smooth experience for both the vendor and the customer.</p>
            <p>Thank you for your prompt attention to this matter.</p>

            <p>Best regards,</p>
            <p>Team Join Habibi</p>
        </div>
    </div>
</body>
@include('emails.footer')

</html>
