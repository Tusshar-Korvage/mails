<!DOCTYPE html>
<html lang="en">
@include('emails.header')
{{-- Subject: New Activity Listed by Vendor
Notification : { vendor name} has created an activity { activity name }. --}}
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
            <p>I hope this email finds you well.</p><br>
            <p>We wanted to inform you that a new activity has been listed on our platform by one of our vendors. Please find the details below:</p><br>
        </div>
            <p><b>Vendor Name:</b> {{ isset($vendor_name) ? $vendor_name : '' }}</p>
            <p><b>Activity Title</b>: {{ isset($activity_title) ? $activity_title : '' }}</p>
            <p><b>Category</b>: {{ isset($category) ? $category : '' }}</p>
            <p><b>Date</b>: {{ isset($date) ? $date : '' }}</p>
        <div>
            <p>Kindly review the new listing at your earliest convenience to ensure it meets our platform's standards and guidelines.</p><br>

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