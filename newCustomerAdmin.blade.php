<!DOCTYPE html>
<html lang="en">
@include('emails.header')
{{-- Subject: New customer Signup Successful
Notification: {customer_name} has signed up sucessfully as a customer. --}}
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
            <p>We are excited to inform you that a new customer has successfully signed up on our platform!</p><br>

            <p><b>customer Name:</b> {{ isset($customer_name) ? $customer_name : '' }}</p>
            <p><b>Email:</b> {{ isset($customer_email) ? $customer_email : '' }}</p>

            <br>
            <p>This new customer will soon start exploring and booking a wide range of exciting activities, travel experiences, cultural events, and sporting adventures..</p><br>

            <p>Thank you for your attention and support in helping us grow our vibrant community.</p><br>
        </div>
        <div>
            <p>Best regards, </p>
            <p>Team Join Habibi</p><br>
        </div>
    </div>
</body>
@include('emails.footer')

</html>