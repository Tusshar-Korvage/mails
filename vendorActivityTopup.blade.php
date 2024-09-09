<!DOCTYPE html>
<html lang="en">
@include('emails.header')
{{-- Subject: Your Top-Up for Activity Has Been Successful
Notification: Your recent top-up for Activity was successful. {X} credits have been added to your account. --}}
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;">
            <b>Dear {{ isset($vendor_name) ? $vendor_name : 'Vendor' }},</b>
        </p>
        <div>
            <p>We are excited to inform you that your recent top-up for Activity was successful. A total of {{ isset($credits) ? $credits : 'X' }} credits have been added to your account.</p>
        </div>
        <div class="button text-center py-4">
            <p><b>Current Balance:</b> You now have a total of {{ isset($current_balance) ? $current_balance : 'X' }} credits in your account.</p>
            <p>These credits allow you to create and list more exciting activities on our platform, helping you reach a broader audience and grow your business.</p>
        </div>
        <div>
            <p>If you have any questions or need further assistance, please feel free to reach out to us.</p>
            <p>Thank you for choosing our platform to showcase your activities!</p>
            <p>Best regards,</p>
            <p>Team Join Habibi</p>
        </div>
    </div>
</body>
@include('emails.footer')
</html>