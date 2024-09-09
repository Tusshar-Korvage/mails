<!DOCTYPE html>
<html lang="en">
@include('emails.header')

<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;">
            <b>Dear Admin,</b>
        </p>
        <div>
            <p>I hope this message finds you well.</p>
            <p>I am writing to inform you that the current subscription for one of our vendors has expired. Please find the details below:</p>
        </div>
            <p><b>Vendor Name:</b> {{ isset($vendor_name) ? $vendor_name : '' }}</p>
            <p><b>Subscription Plan:</b> {{ isset($subscription_plan) ? $subscription_plan : '' }}</p>
            <p><b>Subscription Expiry Date:</b> {{ isset($subscription_end_date) ? $subscription_end_date : '' }}</p>
        <div>
            <p>Please review this vendor’s status and take the necessary steps to update their subscription. If you need any assistance or additional information, feel free to reach out.</p>
            <p>Thank you for your attention to this matter.</p>
        </div>
        <div>
            <p>Best regards, </p>
            <p>Team Join Habibi</p><br>
        </div>
    </div>
</body>
@include('emails.footer')

</html>
