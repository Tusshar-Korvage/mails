<!DOCTYPE html>
<html lang="en">
@include('emails.header')
{{-- Subject: New Vendor Signup Successful
Notification: {vendor_name} has signed up sucessfully as a vendor. --}}
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
            <p>We are excited to inform you that a new vendor has successfully signed up on our platform!</p><br>

            <p><b>Vendor Name:</b> {{ isset($vendor_name) ? $vendor_name : '' }}</p>
            <p><b>Business Name:</b> {{ isset($business_name) ? $business_name : '' }}</p>
            <p><b>Email:</b> {{ isset($vendor_email) ? $vendor_email : '' }}</p>
            <p><b>Phone no.:</b> {{ isset($vendor_phone) ? $vendor_phone : '' }}</p>

            <br>
            <p>This new vendor will soon start offering their activities, adding to the diverse range of experiences we provide to our users. Please review their profile and ensure everything is set up correctly.</p><br>

            <p>Thank you for your attention and support in helping us grow our vibrant community.</p><br>
        </div>
        <div>
            <p>Best regards, </p>
            <p>Team Join Habibi</p><br>
        </div>
    </div>
</body>
@include('emails.footer')

</html>
