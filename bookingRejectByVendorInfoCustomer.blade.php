<!DOCTYPE html>
<html lang="en">
@include('emails.header')
<!-- Subject: Your Booking Request Has Been Rejected
Notification: Your booking request has been declined by the vendor. -->
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear
                {{ isset($customer_name) ? $customer_name : "Sir / Ma'am," }},</b></p>
        <div>
            <p>We regret to inform you that the booking request for ,
                {{ isset($activity_title) ? $activity_title : '' }} on {{ isset($booking_date) ? $booking_date : '' }}
                has been rejected by the vendor.</p>
        </div>
        <div class="button text-center py-4">
            <p>We understand this may be disappointing, and we sincerely apologize for any inconvenience
                this may cause. Please know that your payment will be refunded to your original payment
                method within 7 days.</p>
        </div>
        <div>
            <p>We encourage you to explore other exciting activities and experiences available on our platform.
                If you need assistance or have any questions, please don’t hesitate to reach out to our support
                team.</p>
            <p>Thank you for choosing Join Habibi, and we hope to serve you again soon.</p>

            <p>Best regards,</p>
            <p>Team Join Habibi</p>
        </div>
    </div>
</body>
@include('emails.footer')

</html>
