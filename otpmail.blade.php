<!DOCTYPE html>
<html lang="en">
@include('emails.header')

<body>
    <div class="header mobile-responsive">
        <img src="{{ asset('uploads/logo.png') }}" alt="Logo">
    </div>
    <hr style="margin: 0px; border: 1px solid rgba(188, 187, 187, 1);">
    <div class="container">
        <p class="mb-0" style="text-align: left;"><b>Dear {{ isset($name) ? $name : "Sir / Ma'am," }},</b></p>
        <div>
            <p>Welcome to Join Habibi!</p>
        <p>The One Time Password (OTP) for email verification is <b>{{ $otp }}</b>.</p>
            <p>This OTP is valid only for 30 minutes. Don't share this OTP with anyone.</p>
            <p>Our customer service team will never ask you for your password, OTP, credit card, or banking info.</p>
        </div>
        {{-- <div style="text-align: left;">{{ isset($content) ? $content : '' }}</div> --}}
        <div class="button text-center py-4">
            <div class="phone-img text-center">
                <img src=" {!! isset($email['creative']) ? $email['creative'] : '' !!}" alt="{!! isset($email['creative']) ? $email['creative'] : '' !!}">
            </div>
        </div>
        <div>
            <p>Best regards,</p>
            <p>Team Join Habibi</p>
            {{-- {!! isset($email['other_content']) ? $email['other_content'] : '' !!} --}}
        </div>
    </div>
</body>
@include('emails.footer')

</html>
