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
                    <h1 class="find-and-rename2">Update Artist Details</h1>

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
                    <label for="Password" class="welcome-form-label">Artist Profile Picture</label>
                    <input type="text" class="artist-field w-input" maxlength="256" name="comp logo" data-name="Comp Logo" placeholder="no file selected" id="comp-logo" required="">
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
                            <a href="#" class="connect-inactive w-inline-block">
                                <img src="images/029-instagram.svg" width="32">
                            </a>
                        </div>
                        <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                            <a href="#" class="connect-inactive w-inline-block">
                                <img src="images/001-youtube.svg" width="32">
                            </a>
                        </div>
                    </div>
                    <input type="submit" value="Update" data-wait="Please wait..." class="_50 w-button">
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

@endsection
