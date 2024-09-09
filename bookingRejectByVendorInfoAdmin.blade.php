<!DOCTYPE html>
<html lang="en">
@include('emails.header')
{{-- Subject: Vendor Rejected a Customer Booking
Notification: A vendor has rejected a new booking request from a customer. Please review the details. --}}
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear Admin,</b></p>
        <div>
            <p>I hope this email finds you well.</p>
            <p>Please be informed that a vendor has rejected a new booking from a customer.</p>
        </div>
        <div class="button text-center py-4">
            <p>Below are the details of the rejected booking:</p>
            <div class="phone-img text-center">
                <p>Customer Name: {{ isset($customer_name) ? $customer_name : '' }}</p>
                <p>Ticket ID: {{ isset($unique_ticket_id) ? $unique_ticket_id : '' }}</p>
                <p>Activity: {{ isset($activity_title) ? $activity_title : '' }}</p>
                <p>Vendor Name: {{ isset($vendor_name) ? $vendor_name : '' }}</p>
                <p>{{ isset($comment) ? 'Reason for Rejection (if provided)' . $comment : '' }}</p>
            </div>
        </div>
        <div>
            <p>Please take any necessary action or reach out to the vendor for further clarification if needed.</p>
            <p>Thank you for your attention to this matter.</p>

            <p>Best regards,</p>
            <p>Team Join Habibi</p>
        </div>
    </div>
</body>
@include('emails.footer')

</html>
