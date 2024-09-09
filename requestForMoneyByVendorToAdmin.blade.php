<!DOCTYPE html>
<html lang="en">
@include('emails.header')
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
            <p>A vendor has submitted a request for a money transfer from their wallet balance. Here are the details of the request:</p>
            <ul>
                <li><b>Vendor Name:</b> {{ isset($vendor_name) ? $vendor_name : 'Vendor Name' }}</li>
                <li><b>Amount Requested:</b> {{ isset($amount) ? $amount : 'Amount Requested' }}</li>
                <li><b>Current Wallet Balance:</b> {{ isset($remaining_balance) ? $remaining_balance : 'Current Wallet Balance' }}</li>
                <li><b>Request Date:</b> {{ isset($request_date) ? $request_date : 'Request Date' }}</li>
            </ul>
            <p>Kindly review the request and proceed with the necessary steps to approve or decline the transfer.</p>
            <p>Thank you for handling this in a timely manner.</p>
        </div>
        <div>
            <p>Best regards,</p>
            <p>Team Join Habibi</p>
        </div>
    </div>
</body>
@include('emails.footer')
</html>