@extends('layouts.wide')
@section('content')
    <div class="get-started-email">
        @if($errors->any())
            <div class="tag-wrapper">
                <div class="alert error-alert">
                    <div class="alert-content">
                        <img src="https://uploads-ssl.webflow.com/5af07f2ff396aa76e7a9deae/5af07f30f396aab96ca9dedd_Error%20Icon%402x.svg"
                             class="alert-icon">
                        @foreach($errors->all() as $error)
                            <div class="alert-message">
                                {{ $error }}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif

        <h1 class="heading-4">Welcome to Qisimah</h1>
        <div class="form-block-4 w-form">
            <form id="" data-name="Email Form" class="w-clearfix" method="post"
                  action="{{ url('sign.up') }}">
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