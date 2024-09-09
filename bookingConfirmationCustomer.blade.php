<!DOCTYPE html>
<html lang="en">
@include('emails.header')
{{--Notification : Your booking has been confirmed. Get ready to explore!.
Subject : Your Booking Has Been Confirmed!  --}}
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear {{ isset($customer_name) ? $customer_name : "Sir / Ma'am," }},</b></p>
        <div>
            <p>We are excited to inform you that your booking for, {{ isset($activity_title) ? $activity_title : '' }} on {{ isset($booking_date) ? $booking_date : '' }}. has been successfully confirmed by the vendor. Thank you for choosing Join Habibi as your adventure partner!
            </p>
        </div>
        <div class="button text-center py-4">
            <p>Here are the details of your booking:</p>
            <div class="phone-img text-center">
                <p>Activity/Event: {{ isset($activity_title) ? $activity_title : '' }}</p>
                <p>Date & Time : {{ isset($activity_date) ? $activity_date : '' }}</p>
                {{-- <p>Location : {{ isset($location) ? $location : '' }}</p> --}}
                <p>Booking Reference: {{ isset($unique_ticket_id) ? $unique_ticket_id : '' }}</p>
            </div>
        </div>
        <div>
            <p>Please make sure to arrive on time and bring any necessary items as mentioned in the booking details. If you have any questions or need further assistance, feel free to contact us.</p>
            <p>We hope you have an amazing experience!</p>

            <p>Best regards,</p>
            <p>Team Join Habibi</p>
        </div>
    </div>
</body>
@include('emails.footer')

</html>
