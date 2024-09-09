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
            <b>Dear Admin,</b>
        </p>
        <div>
            <p>We are writing to inform you that a vendor has successfully topped up their current subscription plan. Below are the details of the transaction:</p>
        </div>
        <div class="button text-center py-4">
            <p><b>Details:</b></p>
            <p>Vendor Name: {{ isset($vendor_name) ? $vendor_name : 'Vendor' }}</p>
            <p>Subscription Plan: {{ isset($subscription_plan) ? $subscription_plan : 'Plan' }}</p>
            <p>Top up for: {{ isset($top_activity) ? $top_activity : 'Activity / Featured Activity / Package / Tag' }}</p>
            <p>Total Credits in Vendor Account: {{ isset($total_credits) ? $total_credits : 'N/A' }}</p>
        </div>
        <div>
            <p>Please review this update and let us know if further action is required.</p>
            <p>Best regards,</p>
            <p>Team Join Habibi</p>
        </div>
    </div>
</body>
@include('emails.footer')
</html>