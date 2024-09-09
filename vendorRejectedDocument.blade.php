<!DOCTYPE html>
<html lang="en">
@include('emails.header')
<!-- Subject: Your Profile Has Been Rejected
Notification: Your profile has been rejected due to incorrect documents. Please upload the correct documents to proceed. -->

<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear {{ $vendor_name }},</b></p>
        <div>
            <p>We regret to inform you that your profile has been rejected due to submission of incorrect documents. The
                documents you have submitted do not meet the necessary criteria.</p>
            <p>Please resubmit the correct documents for verification. We encourage you to address the issues mentioned
                and reapply if you wish to be a part of our platform.</p>
            <p>Our support team is available to assist you with any queries or concerns at support@joinhabibi.com.</p>
            <p>Thank you for your understanding.</p>
        </div>
        <p>Best regards,</p>
        <p>Team Join Habibi</p>
    </div>
</body>
@include('emails.footer')

</html>
