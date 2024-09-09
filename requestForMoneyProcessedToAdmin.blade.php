<!DOCTYPE html>
<html lang="en">
@include('emails.header')
{{-- Subject: Vendor Money Transfer Request Successfully Processed
Notification for Admin - 
{ Vendor Name } fund transfer request has been completed successfully. --}}
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
            <p>I hope this message finds you well.</p>
            <p>This is to inform you that a money transfer request from a vendor has been successfully processed. The details are as follows:</p>
            <ul>
                <li><b>Vendor Name:</b> {{ isset($vendor_name) ? $vendor_name : 'Vendor Name' }}</li>
                <li><b>Transfer Amount:</b> {{ isset($amount) ? $amount : 'Amount' }}</li>
                <li><b>Date of Request:</b> {{ isset($request_date) ? $request_date : 'Date' }}</li>
                <li><b>Transaction ID:</b> {{ isset($transaction_id) ? $transaction_id : 'Transaction ID' }}</li>
            </ul>
            <p>Please ensure that the necessary records are updated, and the vendor is notified accordingly.</p>
            <p>Thank you for your attention to this matter.</p>
        </div>
        <div>
            <p>Best regards,</p>
            <p>Team Join Habibi</p>
        </div>
    </div>
</body>
@include('emails.footer')
</html>
