<!DOCTYPE html>
<html lang="en">
@include('emails.header')
{{-- Subject: Welcome Aboard ( Vendor Name )! 
Notification: Congratulations, your profile has been approved. Welcome aboard ! --}}
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear {{ isset($name) ? $name : "Sir / Ma'am," }},</b></p>
        <div>
            <p>Greetings from Join Habibi!</p>

            <p>Congratulations! Your registration as a vendor partner on Join Habibi has been successfully processed. We
            are thrilled to have you onboard.</p>

            <p>To start featuring your exciting activities and experiences on Join Habibi and reaching a broader audience,
            you are required to purchase a subscription plan. This will enable you to showcase your offerings
            effectively and take the benefit of our extensive user base looking for unique experiences.</p>

            <p>If you have any questions or need assistance at any step of the way, our support team is here to help. Feel
            free to reach out to support@joinhabibi.com for any queries.</p>
            
            <p>Thank you once again for trusting Join Habibi. We are excited about the opportunity to work together and
                grow with you.</p>
        </div>
        <div>
            <p>Best regards,
            <p>Team Join Habibi</p>
        </div>
    </div>
</body>
@include('emails.footer')

</html>
