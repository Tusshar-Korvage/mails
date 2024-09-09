<!DOCTYPE html>
<html lang="en">
@include('emails.header')

<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear {{ isset($name) ? $name : "Sir / Ma'am," }},</b></p>
        <div>
            <p>We are excited to inform you that you have received a new booking from a customer on our platform!</p>
        </div>
        <div class="button text-center py-4">
            <p>Booking Details:</p>
            <div class="phone-img text-center">
                <p>Customer Name: {{ isset($customer_name) ? $customer_name : '' }}</p>
                <p>Activity Booked: {{ isset($activity_title) ? $activity_title : '' }}</p>
                <p>Package Booked: {{ isset($package_title) ? $package_title : '' }}</p>
                <p>Booking Date: {{ isset($booking_date) ? $booking_date : '' }}</p>
                <p>Number of Participants: {{ isset($participants) ? $participants : '' }}</p>
            </div>
        </div>
        <div>
            <p>Please review the booking details and confirm the reservation. If you have any questions or need assistance,
            feel free to contact us.</p>

            <p>Best regards,<br>
            Team Join Habibi</p>
        </div>
    </div>
</body>
@include('emails.footer')

</html>
