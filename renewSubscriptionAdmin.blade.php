<!DOCTYPE html>
<html lang="en">
@include('emails.header')
{{-- Subject: Vendor Subscription Renewal Notification
Notification : {Vendor name } has sucessfully renewed their subscription.--}}
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
            <p>I hope this email finds you well.</p><br>

            <p>We are pleased to inform you that one of our vendors, <b>{{ isset($vendor_name) ? $vendor_name : '' }}</b>, has successfully renewed their subscription with us. Please find the details below:</p><br>
        </div>
            <p><b>Vendor Name:</b> {{ isset($vendor_name) ? $vendor_name : '' }}</p>
            <p><b>Subscription Plan:</b> {{ isset($subscription_plan) ? $subscription_plan : '' }}</p>
            <p><b>Renewal Date:</b> {{ isset($subscription_end_date) ? $subscription_end_date : '' }}</p>
        <div>
            <p>We are excited to continue our partnership with {{ isset($vendor_name) ? $vendor_name : '' }} and look forward to their continued success with Join Habibi.</p><br>
            <p>If you have any questions or need further information, please let us know.</p><br>
        </div>
        <div>
            <p>Best regards, </p>
            <p>Team Join Habibi</p><br>
        </div>
    </div>
</body>
@include('emails.footer')

</html>
