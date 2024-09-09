<!DOCTYPE html>
<html lang="en">
@include('emails.header')
{{--Notification : You have successfully confirmed the booking for [Activity Name]. Get ready to welcome your customer!.
Subject: Vendor Confirmation of New Booking  --}}
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear {{ isset($vendor_name) ? $vendor_name : "Sir / Ma'am," }},</b></p>
        <div>
            <p>We are pleased to inform you that you have successfully confirmed a new booking for your activity, {{ isset($activity_title) ? $activity_title : '' }}.</p>
        </div>
        <div class="button text-center py-4">
            <p>Booking Details:</p>
            <div class="phone-img text-center">
                <p>Customer Name: {{ isset($customer_name) ? $customer_name : '' }}</p>
                <p>Booking Date & Slot: {{ isset($booking_date) ? $booking_date : '' }}</p>
                <p>Number of Participants: {{ isset($participants) ? $participants : '' }}</p>
                {{-- <p>Booked Slot: {{ isset($booked_slot) ? $booked_slot : '' }}</p> --}}
            </div>
        </div>
        <div>
            <p>Thank you for promptly confirming this booking. We encourage you to prepare for the upcoming experience to ensure it is as memorable and enjoyable as possible for the customer.</p>
            <p>If you have any questions or need assistance, feel free to contact us at support@joinhabibi.com or +971 52 853 8071.</p>
            <p>Thank you for being a valued partner of our platform.</p>

            <p>Best regards,</p>
            <p>Team Join Habibi</p>
        </div>
    </div>
</body>
@include('emails.footer')

</html>
