<!DOCTYPE html>
<html lang="en">
@include('emails.header')
{{-- Subject: Vendor Activity Rejection Confirmation
Notification: Activity titled {{ activity_title }} by {{ vendor_name }} has been rejected. --}}

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
            <p>Please be informed that the activity titled
                "<b>{{ isset($activity_title) ? $activity_title : 'Activity Name' }}</b>" submitted by
                {{ isset($vendor_name) ? $vendor_name : 'Vendor' }} has been rejected. The rejection was due to the
                following concerns:</p>
            <p><i>{{ isset($cancellation_reason) ? $cancellation_reason : 'Not Given' }}</i></p>
            <p>Please take the necessary steps to communicate the outcome to the vendor and offer guidance if needed.
            </p>
            <p>Kind regards,</p>
            <p>Team Join Habibi</p>
        </div>
    </div>
</body>
@include('emails.footer')

</html>
