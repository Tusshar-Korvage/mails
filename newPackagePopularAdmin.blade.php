<!DOCTYPE html>
<html lang="en">
@include('emails.header')
{{-- Subject: Action Needed: Vendor Package Creation Pending Approval
Notification: A popular activity package has been successfully created by { vendor name }. Please review the details. --}}
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
            <p>{{ isset($vendor_name) ? $vendor_name : 'A vendor' }} has created a new package for the popular activity, “{{ isset($activity_title) ? $activity_title : 'an activity' }}”. The package is now ready for your review and approval.</p>
            <p><b>Package Summary:</b></p>
            <ul>
                <li><b>Vendor:</b> {{ isset($vendor_name) ? $vendor_name : 'Vendor Name' }}</li>
                <li><b>Activity:</b> {{ isset($activity_title) ? $activity_title : 'Activity Name' }}</li>
                <li><b>Package Name:</b> {{ isset($package_title) ? $package_title : 'Package Title' }}</li>
                <li><b>Creation Date:</b> {{ isset($creation_date) ? $creation_date : 'Creation Date' }}</li>
            </ul>
            <p>Please review the package at your earliest convenience.</p>
            <p>Your prompt action will help maintain the quality of experiences offered on our platform.</p>
        </div>
        <div>
            <p>Best regards,</p>
            <p>Team Join Habibi</p>
        </div>
    </div>
</body>
@include('emails.footer')
</html>
