<!DOCTYPE html>
<html lang="en">
@include('emails.header')
{{-- Subject: Update on Your Vendor Application
Notification : Your profile was declined. The reason given was: {{reason}} --}}
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear {{ isset($vendor_name) ? $vendor_name : "Sir / Ma'am," }},</b></p>
        <div>
            <p>Thank you for your interest in partnering with us to feature your activities on Join Habibi. We appreciate
            the effort you put into your application.</p>

            <p>After careful consideration, we regret to inform you that we are unable to proceed with your vendor
            application at this time. While we genuinely value the diversity and uniqueness of each offering, we have to
            make selections that best align with our current strategic objectives and customer preferences.</p>

            {{ isset($reason) ? 'Reason Given :- ' . $reason : '' }}

            <p>Please note that this decision does not reflect on the quality of your activities or services. Our platform
            undergoes regular updates and changes, and we encourage you to keep an eye on future opportunities to
            collaborate.</p>

            <p> sincerely appreciate your understanding and interest in being part of our community. If you have any
            questions or require further feedback on your application, please do not hesitate to reach out to us at
            support@joinhabibi.com</p>
        </div>
        <div>
            <p>Thank you once again for considering us as a partner.</p>

            <p>Best regards,</br>
                Team Join Habibi</p>
        </div>
    </div>
</body>
@include('emails.footer')

</html>
