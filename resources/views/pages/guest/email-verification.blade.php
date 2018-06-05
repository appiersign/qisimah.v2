@extends('layouts.wide')
@section('content')
    <div class="verification">
        @if($errors->any())
            @include('components.guest.danger-message')
        @endif
        <h1 class="heading-4">Email Verification</h1>
        <div class="form-block-4 w-form">
            <form id="" name="email-form" data-name="Email Form" method="post" action="{{ route('email.verification.handle') }}">
                {{ csrf_field() }}
                <label for="Email-verification-code" class="welcome-form-label">We have
                    sent a verification code to <strong>{{ \Illuminate\Support\Facades\Session::get('email') }}</strong>. <br>Please check you mail and enter the code in the text boxes below.</label>
                <div class="div-block-156">
                    <input type="text" class="verify-email-code the-cryer w-input"
                           style="font-size: 2.5em; text-align: center" maxlength="1"
                           name="verification_code[]" size="1"
                           data-name="Email verification code" id="Email-verification-code"
                           required autofocus>
                    <input type="text" class="verify-email-code next-numbe w-input"
                           style="font-size: 2.5em; text-align: center" maxlength="1"
                           name="verification_code[]"
                           data-name="Email Verification Code 2" id="Email-verification-code-2" required="" size="1">
                    <input type="text" class="verify-email-code next-numbe another w-input"
                           style="font-size: 2.5em; text-align: center" maxlength="1"
                           name="verification_code[]" data-name="Email Verification Code 2"
                           id="Email-verification-code-2" required="" size="1">
                    <div class="div-block-157"></div>
                    <input type="text" class="verify-email-code the-cryer w-input"
                           style="font-size: 2.5em; text-align: center" maxlength="1"
                           name="verification_code[]" data-name="Email Verification Code 3"
                           id="Email-verification-code-3" required="" size="1">
                    <input type="text" class="verify-email-code next-numbe w-input"
                           style="font-size: 2.5em; text-align: center" maxlength="1"
                           name="verification_code[]"
                           data-name="Email Verification Code 2" id="Email-verification-code-2" required="">
                    <input type="text" class="verify-email-code next-numbe another w-input"
                           style="font-size: 2.5em; text-align: center" maxlength="1"
                           name="verification_code[]" data-name="Email Verification Code 2"
                           id="Email-verification-code-2"
                           required="" size="1">
                    <input type="submit" value="verify" data-wait="Please wait..." class="send-verify-code w-button"
                           data-ix=""></div>
                <p class="paragraph-7">Keep this window open while checking for your code. <br>Haven&#x27;t received
                    our email? Try your spam folder!</p>
                <input type="submit" value="Verify" data-wait="Please wait..." class="email-button w-button"></form>
            <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
            </div>
        </div>
    </div>
@endsection