<!DOCTYPE html>
<html lang="en">
@include('emails.header')
{{-- Subject: { Vendor name } has purchased { Subscription name} 
Notification: { Vendor name } has purchased { Subscription name}  --}}
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
            <p>We are excited to inform you that <b>{{ isset($vendor_name) ? $vendor_name : '' }}</b> has just purchased a subscription to feature their activities on our platform. Please find the details of the new subscription below:</p>
        </div>
            <p><b>Vendor Name:</b> {{ isset($vendor_name) ? $vendor_name : '' }}</p>
            <p><b>Vendor Phone no.:</b> {{ isset($vendor_phone) ? $vendor_phone : '' }}</p>
            <p><b>Vendor Email:</b> {{ isset($vendor_email) ? $vendor_email : '' }}</p>
            <p><b>Subscription Plan:</b> {{ isset($subscription_plan) ? $subscription_plan : '' }}</p>
        <div>
            <p>Please review the vendor's information and ensure that their activities are properly featured on our platform. If there are any issues or additional steps required, kindly reach out to the vendor as soon as possible to assist them.</p>
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
