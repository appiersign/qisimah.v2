@extends('layouts.guest')
@section('content')
    <div class="login">
        <div class="div-block-20">
            <div class="form-block-2 w-form">
                <form action="{{ url('log.in') }}" method="post" id="qisimah-login-form" name="email-form" class="form">
                    {{ csrf_field() }}
                    <label for="username" class="field-label-2">Email:</label>
                    <input type="email" class="form-field w-input" name="email" data-name="username" placeholder="Enter your name" id="username" required="">
                    <label for="password" class="field-label">Password</label>
                    <input type="password" class="form-field w-input" name="password" placeholder="Enter your email" id="password" required="">
                    <input type="submit" value="log in" data-wait="Please wait..." class="submit-button w-button">
                </form>
            </div>
        </div>
    </div>
@endsection