@extends('layouts.guest')
@section('content')
    <div class="login">
        <div class="div-block-20">
            <div class="form-block-2 w-form">
                <form action="{{ url('log.in') }}" method="post" id="qisimah-login-form" name="email-form" class="form">
                    {{ csrf_field() }}
                    <label for="username" class="field-label-2">Email:</label>
                    <input type="email" class="form-field w-input" name="email" data-name="username" placeholder="Enter your name" id="username" required="">
                    <p>Insert your email and we’ll send you a link to the password reset page.</p><br>
                    <input type="submit" value="Retrieve Password" data-wait="Please wait..." class="submit-button w-button">
                    <input type="submit" value="Wait, I Remember" data-wait="Please wait..." class="submit-button w-button">
                </form>
            </div>
        </div>
    </div>
@endsection