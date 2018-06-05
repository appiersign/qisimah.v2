@extends('layouts.wide')
@section('content')
    <div class="verification">
        @if($errors->any())
            @include('components.guest.danger-message')
        @endif
        <h1 class="heading-4">Personal Details</h1>
        <div class="form-block-4 w-form">
            <form id="email-form" method="post" name="email-form" data-name="Email Form" data-redirect="/add-artist-filla"
                  redirect="/add-artist-filla" action="{{ route('user.register.handle') }}">
                {{ csrf_field() }}
                <label for="full-name" class="welcome-form-label">Your name</label>
                <input type="text" class="name-fields w-input" maxlength="256" name="name"
                       data-name="full-name" placeholder="enter your name" id="full-name" value="{{ old('name') }}" required="">
                <label for="Password" class="welcome-form-label">Create Password</label>
                <input type="password" class="name-fields w-input" maxlength="256" name="password"
                                           data-name="Password" placeholder="enter your password" id="Password"
                                           required="">
                <label for="Password-3" class="welcome-form-label">Retype Password</label>
                <input type="password" class="name-fields w-input" maxlength="256" name="password_confirmation"
                                           data-name="Password 2" placeholder="enter your password" id="Password-2"
                                           required=""><label for="Password-3" class="welcome-form-label">Select
                    account type</label>
                <select id="field" name="accounts[]" class="name-fields w-select" multiple>
                    <option value="" disabled selected>Select one...</option>
                    <option value="artist">Artist</option>
                    <option value="producer">Producer</option>
                    <option value="writer">Writer</option>
                    <option value="manager">Manager</option>
                    <option value="label_rep">Label Rep</option>
                </select>
                <input type="submit" value="register" data-wait="Please wait..." class="_50 w-button">
                {{--<input type="submit" value="Verify" data-wait="Please wait..." class="email-button w-button">--}}
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