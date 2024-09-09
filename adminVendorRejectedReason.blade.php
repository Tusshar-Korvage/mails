<!DOCTYPE html>
<html lang="en">
@include('emails.header')
<!-- Subject: vendor_name Rejection Notification
Notification : vendor_name has been rejected for reasons other than incorrect details or documents. Please review the case.-->

<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear Admin,</b></p>
        <div>
            <p>This is to notify you that the profile of {{ isset($vendor_name) ? $vendor_name : "Sir / Ma'am" }} has been rejected from the platform due to
                {{ isset($reason) ? $reason : 'some “Other Reasons”.' }}</p>
            <p>Please proceed with the appropriate follow-up actions.</p>
        </div>
        <p>Thank you for your attention.</p>
        <p>Best regards,</p>
        <p>Team Join Habibi</p>
    </div>
</body>
@include('emails.footer')

</html>
