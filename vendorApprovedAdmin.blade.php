<!DOCTYPE html>
<html lang="en">
@include('emails.header')
{{-- Subject: Vendor Registration Successfully Completed
Notification : {{vendor_name}} profile has been approved. --}}
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
            <p>We are pleased to inform you that the registration of <b> {{ isset($vendor_name) ? $vendor_name : '' }}</b> has been successfully completed. Their documents have been verified and approved.</p>
            <p><b>Vendor Details:</b></p>
            <p><b>Vendor Name:</b> {{ isset($vendor_name) ? $vendor_name : '' }}</p>
            <p><b>Email:</b> {{ isset($vendor_email) ? $vendor_email : '' }}</p>
            <p><b>Phone no.:</b> {{ isset($vendor_phone) ? $vendor_phone : '' }}</p>
            <br>
            <p>We are excited to have {{ isset($vendor_name) ? $vendor_name : '' }} join our platform and offer their activities to our users. Please ensure their listing is live and ready for bookings.</p>
            <p>If you have any questions or need further information, feel free to reach out.</p>
        </div>
        <div>
            <p>Best regards, </p>
            <p>Team Join Habibi</p><br>
        </div>
    </div>
</body>
@include('emails.footer')

</html>
