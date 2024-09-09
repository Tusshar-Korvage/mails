<!DOCTYPE html>
<html lang="en">
@include('emails.header')
{{-- Subject: Welcome to Join Habibi {Customer’s Full Name}!
Notification: {Customer Name}, Welcome to Join Habibi! --}}
<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;">
            <b>Dear {{ isset($customer_name) ? $customer_name : 'Customer' }},</b>
        </p>
        <div>
            <p>We're thrilled to have you join our community. Now that you're all set up, you can start exploring and booking a wide range of exciting activities, travel experiences, cultural events, and sporting adventures. From thrilling adventures to relaxing getaways, there’s something for everyone!</p>
            <p>Here's what you can do next:</p>
            <ul>
                <li>Browse Activities: Explore our diverse range of activities and find something that excites you.</li>
                <li>Easy Booking: Enjoy a seamless booking experience right at your fingertips.</li>
                <li>Exclusive Deals: Get access to special offers and promotions.</li>
            </ul>
            <p>To get started, simply log in to your account <a href="{{ url('login') }}">here</a> and begin planning your next adventure.</p>
            <p>If you have any questions or need assistance, our support team is always here to help. Just reply to this email or contact us at support@joinhabibi.com.</p>
        </div>
        <p>We hope you have a fantastic time with us!</p>
        <p>Best regards,</p>
        <p>Join Habibi</p>
    </div>
</body>
@include('emails.footer')
</html>