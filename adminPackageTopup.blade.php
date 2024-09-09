<!DOCTYPE html>
<html lang="en">
@include('emails.header')
{{-- Subject: Notification for Vendor Subscription Plan Top-Up
Notification: {Vendor Name} has topped up for "<b><i>Packages</i></b>". Please review and update accordingly. --}}
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
            <p>We want to inform you that {{ isset($vendor_name) ? $vendor_name : 'Vendor' }} has successfully topped up their current subscription plan for the "Packages".</p>
        </div>
        <div class="button text-center py-4">
            <p><b>Details:</b></p>
            <p>Vendor Name: {{ isset($vendor_name) ? $vendor_name : 'Vendor' }}</p>
            <p>Subscription Plan: {{ isset($subscription_plan) ? $subscription_plan : '' }}</p>
            <p>Top-Up Amount: {{ isset($top_up_amount) ? $top_up_amount : 'Amount' }}</p>
            <p>Date of Top-Up: {{ isset($date) ? $date : 'Date' }}</p>
        </div>
        <div>
            <p>Please update the subscription records accordingly.</p>
            <p>Thank you!</p>
            <p>Best regards,</p>
            <p>Team Join Habibi</p>
        </div>
    </div>
</body>
@include('emails.footer')
</html>