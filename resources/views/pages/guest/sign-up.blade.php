@extends('layouts.wide')
@section('content')
    <div class="get-started-email">
        @if($errors->any())
            @include('components.guest.danger-message')
        @endif

        <h1 class="heading-4">Welcome to Qisimah</h1>
        <div class="form-block-4 w-form">
            <form id="" data-name="Email Form" class="w-clearfix" method="post"
                  action="{{ route('users.sign.up') }}">
                {{ csrf_field() }}
                <label for="Sign-up-email" class="welcome-form-label">Get Started by entering and verifying
                    your
                    email</label>
                <input type="email" class="select-field-3 w-input" maxlength="100" name="email"
                       data-name="Sign up email"
                       placeholder="enter your email" id="Sign-up-email" required="">
                <input type="submit" value="next" data-wait="Please wait..." class="welcome-button w-button"
                       data-ix="">
            </form>
            <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
            </div>
        </div>
    </div>
@endsection