<!DOCTYPE html>
<html lang="en">
@include('emails.header')
{{-- Subject: Your Booking Request Has Been Received!
Notification : Your Booking Has Been received but not yet confirmed by the vendor --}}
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear {{ isset($name) ? $name : "Sir / Ma'am," }},</b></p>
        <div>
            <p>Thank you for booking with us! We have received your booking request for
                {{ isset($activity_title) ? $activity_title : '' }}. We has sent your request to the
                vendor, and we are awaiting their confirmation.
            </p>
            <p>
                Rest assured, we'll notify you as soon as your booking is confirmed. In the meantime, if you have
                any questions or need further assistance, please don't hesitate to reach out to our support
                team.</p>
            <p>Thank you for choosing <b>Join Habibi</b> for your adventure and travel experiences!.</p>
        </div>
        <div>
            <p>Best regards,</p>
            <p>Team Join Habibi</p>
        </div>
    </div>
</body>
@include('emails.footer')

</html>
