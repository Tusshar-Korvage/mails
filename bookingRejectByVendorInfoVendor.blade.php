<!DOCTYPE html>
<html lang="en">
@include('emails.header')
<!-- Subject: Booking Rejection for [Activity Name]
Notification: You have declined a booking request. Please review the details -->
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear {{ isset($vendor_name) ? $vendor_name : "Sir / Ma'am," }},</b>
        </p>
        <div>
            <p>We hope this email finds you well.</p>
            <p>
                We wanted to inform you that the booking request from
                {{ isset($customer_name) ? $customer_name : 'Customer' }}for
                {{ isset($activity_title) ? $activity_title : '' }} on {{ isset($booking_date) ? $booking_date : '' }}
                has been rejected. Please ensure you review the reason for rejection and take any necessary
                actions to avoid such situations in the future.</p>
        </div>
        <div>
            <p>If you have any questions or need assistance, feel free to reach out to us.</p>
            <p>Thank you for your understanding.
            </p>

            <p>Best regards,</p>
            <p>Team Join Habibi</p>
        </div>
    </div>
</body>
@include('emails.footer')

</html>
