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
            <p>I hope this email finds you well.</p>
            <p>We are pleased to inform you that <b>{{ isset($vendor_name) ? $vendor_name : '' }}</b> has upgraded their current subscription on our platform. This upgrade will allow them to offer even more exciting activities and experiences to our users. Please find the details below:</p><br>
        </div>
        <div>
            <p>Please update our records accordingly and ensure that their new subscription benefits are activated.</p>
            <p>Thank you for your attention to this matter.</p><br>
        </div>
        <div>
            <p>Best regards, </p>
            <p>Team Join Habibi</p><br>
        </div>
    </div>
</body>
@include('emails.footer')

</html>
