@extends('layouts.dashboard')
@section('content')

    <div class="tag-wrapper" style="height: 10px">
    </div>
    <div class="qisimah-container-main" style="width: 50%; margin: auto;">
    {{--<div class="meta-data-form-block">--}}
    {{--<div class="form-modal-sub">--}}
    <div class="div-block-122" style="padding: 0px 40px 0px 40px">
        <a href="#" class="song-upload-modal-close w-inline-block" data-ix="close-upload-song-modal-2">
            <img src="images/close-button.png" width="40" srcset="images/close-button-p-500.png 500w, images/close-button-p-800.png 800w, images/close-button-p-1080.png 1080w, images/close-button-p-1600.png 1600w, images/close-button.png 2133w" sizes="100vw" class="image-7">
        </a>
        <div class="filla2">
            {{--<img src="images/adina10.jpg" srcset="images/adina10-p-500.jpeg 500w, images/adina10.jpg 575w" sizes="50px" class="sarkodie-fake-pic">--}}

        </div>
        <div class="div-block-64">

        </div>
        <div class="label-contact">
            <div class="form-block-4 w-form" style="margin: auto;">
                <form id="email-form" name="email-form" data-name="Email Form" class="form-3">
                    <h1 class="find-and-rename2">Recommend artist</h1>

                    <label for="Password" class="welcome-form-label">Artist Name</label>
                    <input type="text" class="artist-field w-input" maxlength="256" name="Artistl-Name" data-name="Artist Name" placeholder="enter Artist name" id="Personal-Name" required="">

                    <input type="submit" value="Verify" data-wait="Please wait..." class="email-button w-button">
                    <div class="spacer"></div>
                    <h1 class="sometigs-head">Artist Details</h1>
                    <label for="Personal-Name" class="welcome-form-label">Full name</label>
                    <input type="text" class="artist-field w-input" maxlength="256" name="Personal-Name" data-name="Personal Name" placeholder="enter full name" id="Personal-Name" required="">
                    <label for="Password" class="welcome-form-label">Business email Address</label>
                    <input type="email" class="artist-field w-input" maxlength="256" name="Password" data-name="Password" placeholder="enter your email" id="Password" required="">
                    <label for="Password" class="welcome-form-label">Phone Number</label>
                    <input type="text" class="artist-field w-input" maxlength="256" name="Password-2" data-name="Password 2" placeholder="enter your password" id="Password-2" required="">
                    <div class="spacer"></div>
                    <h1 class="sometigs-head">Label</h1>
                    <label for="Personal-Name" class="welcome-form-label">Company Name</label>
                    <input type="text" class="artist-field w-input" maxlength="256" name="Personal-Name-2" data-name="Personal Name 2" placeholder="enter your name" id="Personal-Name-2" required="">
                    <label for="Password" class="welcome-form-label">Company logo</label>
                        <input type="text" class="artist-field w-input" maxlength="256" name="comp logo" data-name="Comp Logo" placeholder="no file selected" id="comp-logo" required="">

                    <label for="Password" class="welcome-form-label">Contact Name</label>
                    <input type="text" class="artist-field w-input" maxlength="256" name="Password-2" data-name="Password 2" id="Password-2" required="">
                    <label for="Password" class="welcome-form-label">Email Address</label>
                    <input type="text" class="artist-field w-input" maxlength="256" name="Password-2" data-name="Password 2" id="Password-2" required="">
                    <label for="Password" class="welcome-form-label">Phone Number</label>
                    <input type="text" class="artist-field w-input" maxlength="256" name="Password-2" data-name="Password 2" id="Password-2" required="">
                    <label for="Password" class="welcome-form-label">website</label>
                    <input type="text" class="artist-field w-input" maxlength="256" name="Password-2" data-name="Password 2" id="Password-2" required="">
                    <div class="spacer"></div>
                    <h1 class="sometigs-head">Management Contact</h1>
                    <label for="Personal-Name" class="welcome-form-label">Company Name</label>
                    <input type="text" class="artist-field w-input" maxlength="256" name="Personal-Name-2" data-name="Personal Name 2" placeholder="enter your name" id="Personal-Name-2" required="">
                    <label for="Password" class="welcome-form-label">Contact Name</label>
                    <input type="email" class="artist-field w-input" maxlength="256" name="Password-3" data-name="Password 3" placeholder="enter your email" id="Password-3" required="">
                    <label for="Password" class="welcome-form-label">Company Logo</label>
                    <input type="text" class="artist-field w-input" maxlength="256" name="Password-2" data-name="Password 2" id="Password-2" required="">
                    <label for="Password" class="welcome-form-label">Email Address</label>
                    <input type="text" class="artist-field w-input" maxlength="256" name="Password-2" data-name="Password 2" id="Password-2" required="">
                    <label for="Password" class="welcome-form-label">Phone Number</label>
                    <input type="text" class="artist-field w-input" maxlength="256" name="Password-2" data-name="Password 2" id="Password-2" required="">
                    <label for="Password" class="welcome-form-label">website</label>
                    <input type="text" class="artist-field w-input" maxlength="256" name="Password-2" data-name="Password 2" id="Password-2" required="">
                    <input type="submit" value="Verify" data-wait="Please wait..." class="email-button w-button">
                    <div class="spacer"></div>
                    <h1 class="sometigs-head">Social Media Connection</h1>
                    <label for="Personal-Name" class="welcome-form-label">Connect Social Media ...</label>
                    <div class="connect-social-here w-row">
                        <div class="column-68 w-col w-col-3 w-col-small-3 w-col-tiny-3">
                            <a href="#" class="connect-active w-inline-block" data-ix="facebook-connect">
                                <img src="https://uploads-ssl.webflow.com/5ace5bf2286b145321f46e32/5ade2f6c4682eaa5b7e28353_036-facebook.svg" width="32">
                            </a>
                        </div>
                        <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                            <a href="#" class="connect-inactive w-inline-block" data-ix="connect-twitter">
                                <img src="https://uploads-ssl.webflow.com/5ace5bf2286b145321f46e32/5ade301a4682ea0de0e283b8_008-twitter.svg" width="32">
                            </a>
                        </div>
                        <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                            <a href="#" class="connect-inactive w-inline-block"></a>
                        </div>
                        <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                            <a href="#" class="connect-inactive w-inline-block"></a>
                        </div>
                    </div>
                    <input type="submit" value="Request" data-wait="Please wait..." class="_50 w-button">
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
    </div>
    {{--</div>--}}




    {{--<div class="welcome-parent w-clearfix">--}}
        {{--<div class="div-block-159">--}}
            {{--<div class="div-block-162">--}}
                {{--<div class="div-block-163">--}}
                    {{--<h1 class="heading-4-copy _2014">Welcome to Qisimah</h1>--}}
                {{--</div>--}}
                {{--<div>--}}
                    {{--<h1 class="heading-4">Find artist</h1>--}}
                    {{--<div>Request access to your artist to start monitoring</div>--}}
                    {{--<div class="find-artist-form-copy">--}}
                        {{--<form action="{{ url('artists/request.do') }}" method="post" class="w-clearfix w-form">--}}
                            {{--{{ csrf_field() }}--}}
                            {{--<input type="search" value="" class="search-box w-input" maxlength="256" name="artist"--}}
                                   {{--placeholder="Search…" id="search" required="">--}}
                            {{--<input type="submit" value="Search" class="search-button-2 w-button">--}}
                        {{--</form>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--@if(count($artists))--}}
                    {{--<div class="free-the-wrapper-copy">--}}
                        {{--@foreach($artists as $artist)--}}
                            {{--<a href="{{ route('artists.management.details', ['qisimah_id' => $artist->qisimah_id]) }}">--}}
                                {{--<div class="dont-mind-them w-row">--}}
                                    {{--<div class="w-col w-col-1 w-col-small-6 w-col-tiny-6"><img--}}
                                                {{--src="{{ asset('images/adina10.jpg') }}"--}}
                                                {{--srcset="{{ asset('images/adina10-p-500.jpeg') }} 500w, {{ asset('images/adina10.jpg') }} 575w"--}}
                                                {{--sizes="(max-width: 767px) 50px, (max-width: 991px) 3vw, 1vw"--}}
                                                {{--class="image-13"></div>--}}
                                    {{--<div class="column-67 w-col w-col-11 w-col-small-6 w-col-tiny-6">--}}
                                        {{--<div class="text-block-55">{{ $artist->nick_name }}</div>--}}
                                        {{--<div>{{ $artist->full_name }}</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                        {{--@endforeach--}}
                    {{--</div>--}}
                {{--@endif--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="div-block-160"></div>--}}
    {{--</div>--}}
    {{--<div class="verification">--}}
        {{--@if($errors->any())--}}
            {{--@include('components.guest.danger-message')--}}
        {{--@endif--}}
        {{--<h1 class="heading-4">Personal Details</h1>--}}
        {{--<div class="form-block-4 w-form">--}}
            {{--<form id="email-form" method="post" name="email-form" data-name="Email Form" data-redirect="/add-artist-filla"--}}
                  {{--redirect="/add-artist-filla" action="{{ route('user.register.handle') }}">--}}
                {{--{{ csrf_field() }}--}}
                {{--<label for="full-name" class="welcome-form-label">Your name</label>--}}
                {{--<input type="text" class="artist-field w-input" maxlength="256" name="name"--}}
                       {{--data-name="full-name" placeholder="enter your name" id="full-name" value="{{ old('name') }}" required>--}}

                {{--<label for="nick_name" class="welcome-form-label">Nick name</label>--}}
                {{--<input type="text" class="artist-field w-input" maxlength="256" name="nick_name"--}}
                       {{--data-name="nick_name" placeholder="enter your nick name" id="nick_name" value="{{ old('nick_name') }}" required>--}}

                {{--<label for="gender" class="welcome-form-label">Gender</label>--}}
                {{--<select id="gender" name="gender" class="artist-field w-select">--}}
                    {{--<option value="" disabled selected>Select one...</option>--}}
                    {{--<option value="m">male</option>--}}
                    {{--<option value="f">female</option>--}}
                {{--</select>--}}
                {{--<label for="Password" class="welcome-form-label">Create Password</label>--}}
                {{--<input type="password" class="artist-field w-input" maxlength="256" name="password"--}}
                                           {{--data-name="Password" placeholder="enter your password" id="Password"--}}
                                           {{--required="">--}}
                {{--<label for="Password-3" class="welcome-form-label">Retype Password</label>--}}
                {{--<input type="password" class="artist-field w-input" maxlength="256" name="password_confirmation"--}}
                                           {{--data-name="Password 2" placeholder="confirm password" id="Password-2"--}}
                                           {{--required="">--}}
                {{--<label for="accounts" class="welcome-form-label">Select account type</label>--}}
                {{--<select id="accounts" name="accounts[]" class="artist-field w-select" multiple>--}}
                    {{--<option value="" disabled selected>Select one...</option>--}}
                    {{--<option value="artist">Artist</option>--}}
                    {{--<option value="producer">Producer</option>--}}
                    {{--<option value="writer">Writer</option>--}}
                    {{--<option value="manager">Manager</option>--}}
                    {{--<option value="label_rep">Label Rep</option>--}}
                {{--</select>--}}
                {{--<input type="submit" value="register" data-wait="Please wait..." class="_50 w-button">--}}
                {{--<input type="submit" value="Verify" data-wait="Please wait..." class="email-button w-button">--}}
            {{--</form>--}}
            {{--<div class="w-form-done">--}}
                {{--<div>Thank you! Your submission has been received!</div>--}}
            {{--</div>--}}
            {{--<div class="w-form-fail">--}}
                {{--<div>Oops! Something went wrong while submitting the form.</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
@endsection
