    <!DOCTYPE html>
    <html lang="en">
    @include('emails.header')
    {{-- Subject: New Package Created by Vendor
Notification : { vendor name} has created an package { package name }. --}}

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
                <p>I wanted to inform you that a vendor has just created a new package on our platform. Here are the
                    details of the new package:</p><br>
            </div>
            <p><b>Package Name:</b> {{ isset($package_title) ? $package_title : '' }}</p>
            <p><b>Vendor Name:</b> {{ isset($vendor_name) ? $vendor_name : '' }}</p>
            <p><b>Activity Title:</b> {{ isset($activity_title) ? $activity_title : '' }}</p>
            <p><b>Category</b>: {{ isset($category) ? $category : '' }}</p>
            <p><b>price</b>: {{ isset($price) ? $price : '' }}</p>
            <p><b>Availability Date</b>: {{ isset($start_date) ? $start_date : '' }} -
                {{ isset($end) ? $end_date : '' }}</p>
            <div>
                <p>Please review the package details at your earliest convenience and ensure it meets our standards
                    before it goes live on the platform.</p>
                <p>If you have any questions or need further information, feel free to reach out.</p>
            </div>
            <div>
                <p>Best regards, </p>
                <p>Team Join Habibi</p>
            </div>
        </div>
    </body>
    @include('emails.footer')

    </html>
