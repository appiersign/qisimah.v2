@extends('layouts.guest')
@section('content')
    <div class="login">
        <div class="div-block-20">
            <div class="form-block-2 w-form">
                <form id="qisimah-login-form" name="email-form" data-name="Email Form"
                      data-redirect="qisimah-login-dummy" redirect="qisimah-login-dummy" class="form">

                    <label for="username" class="field-label-2">Username:</label>
                    <input type="text" class="form-field w-input" maxlength="256" name="username" data-name="username"
                            placeholder="Enter your name" id="username" required="">
                    <label for="password" class="field-label">Password</label><input
                            type="password" class="form-field w-input" maxlength="256" name="password"
                            data-name="password" placeholder="Enter your email" id="password" required="">
                    <input type="submit" value="log in" data-wait="Please wait..." class="submit-button w-button">
                </form>
                <div class="w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                    <div>Oops! Something went wrong while submitting the form.</div>
                </div>
            </div>
        </div>
    </div>
@endsection