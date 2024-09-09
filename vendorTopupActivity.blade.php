<!DOCTYPE html>
<html lang="en">
@include('emails.header')
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;">
            <b>Dear {{ isset($vendor_name) ? $vendor_name : 'Vendor' }},</b>
        </p>
        <div>
            <p>We are pleased to inform you that your recent top-up has been successful!</p>
        </div>
        <div class="button text-center py-4">
            <p><b>Details of Your Top-Up:</b></p>
            <p>Subscription Plan: {{ isset($subscription_plan) ? $subscription_plan : 'Plan' }}</p>
            <p>Top up for: {{ isset($top_activity) ? $top_activity : 'Activity / Featured Activity / Package / Tag' }}</p>
            <p>Total Credits in Your Account: {{ isset($total_credits) ? $total_credits : 'N/A' }}</p>
        </div>
        <div>
            <p>You can now use these credits to create more activities, feature your existing activities, add packages, or assign tags on our platform. Make the most of your subscription by exploring all the opportunities available to grow your business.</p>
            <p>If you have any questions or need assistance, feel free to contact our support team.</p>
            <p>Thank you for being a valued part of our platform!</p>
            <p>Best regards,</p>
            <p>Team Join Habibi</p>
        </div>
    </div>
</body>
@include('emails.footer')
</html>