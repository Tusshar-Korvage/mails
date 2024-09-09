<!DOCTYPE html>
<html lang="en">
@include('emails.header')
{{-- Subject: New Vendor Documents Submitted for Verification
Notification: Vendor Submitted Documents For Verification --}}
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
            <p>We hope this email finds you well.</p>
            <p>We are pleased to inform you that <b>{{ isset($vendor_name) ? $vendor_name : '' }}</b> has submitted their documents for verification. Please review the submitted documents to proceed with the next steps in their onboarding process.</p>

            <p><b>Vendor Details:</b></p>
            <p><b>Vendor Name:</b> {{ isset($vendor_name) ? $vendor_name : '' }}</p>
            <p><b>Submitted On:</b> {{ isset($submitted_date) ? $submitted_date : '' }}</p>
            <p><b>Vendor Email:</b> {{ isset($vendor_email) ? $vendor_email : '' }}</p>
            <p><b>Vendor Phone no.:</b> {{ isset($vendor_phone) ? $vendor_phone : '' }}</p>
            
            <p>You can access the documents and verify the information by logging into the admin portal.</p>

            <p>Thank you for your attention to this matter. Please let us know if you require any further assistance.</p>
        </div>
        <div>
            <p>Best regards, </p>
            <p>Team Join Habibi</p>
        </div>
    </div>
</body>
@include('emails.footer')

</html>
