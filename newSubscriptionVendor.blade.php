<!DOCTYPE html>
<html lang="en">
@include('emails.header')
{{-- Subject: Congratulations! Your Subscription has been activated 
Notification: Congratulations! Your Subscription has been activated  --}}
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;">
            <b>Dear {!! $data['vendor-name'] !!},</b>
        </p>
        <div>
            <p>Congratulations and welcome to our platform! We are thrilled to have you on board as a new subscriber. Your subscription is now active, and you can start listing your activities, travel experiences, cultural events, and sporting adventures.</p>

            <p>Here are your subscription details:</p>

            <p><b>Subscription Plan:</b> {{ isset($subscription_plan) ? $subscription_plan : '' }}</p>
            <p><b>Subscription Start Date:</b> {{ isset($subscription_start_date) ? $subscription_start_date : '' }}</p>
            <p><b>Subscription End Date:</b> {{ isset($subscription_end_date) ? $subscription_end_date : '' }}</p>
            <Br>
            <p>If you have any questions or need assistance, please don't hesitate to contact our support team.</p>

            <p>Thank you for choosing us. We look forward to a successful partnership.</p><br>
        </div>
        <div>
            <p>Best regards, </p>
            <p>Team Join Habibi</p><br>
        </div>
    </div>
</body>
@include('emails.footer')

</html>