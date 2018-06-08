@extends('layouts.wide')
@section('content')
    <div class="welcome-parent w-clearfix">
        <div class="div-block-159">
            <div class="div-block-162">
                <div class="filla"><img src="{{ asset('images/adina10.jpg') }}"
                                        srcset="{{ asset('images/adina10-p-500.jpeg') }} 500w, {{ asset('images/adina10.jpg') }} 575w"
                                        sizes="50px" class="sarkodie-fake-pic">
                    <h1 class="find-and-rename">{{ $artist->nick_name }}</h1>
                </div>
                <div class="div-block-64">
                    <div class="text-block-54">Artists</div>
                </div>
                <div class="div-block-158">
                    <div class="form-block-4 w-form">
                        <form id="email-form" name="email-form" data-name="Email Form"><label for="Password"
                                                                                              class="welcome-form-label">Your
                                role</label><select id="field" name="field" data-name="Field"
                                                    class="name-fields w-select">
                                <option value="">Select one...</option>
                                <option value="Manager">Manager</option>
                                <option value="Side Chick">Side Chick</option>
                                <option value="Massager">Massager</option>
                            </select><input type="submit" value="Verify" data-wait="Please wait..."
                                            class="email-button w-button"></form>
                        <div class="w-form-done">
                            <div>Thank you! Your submission has been received!</div>
                        </div>
                        <div class="w-form-fail">
                            <div>Oops! Something went wrong while submitting the form.</div>
                        </div>
                    </div>
                </div>
                <div class="label-contact">
                    <div class="form-block-4 w-form">
                        <form id="email-form" name="email-form" data-name="Email Form" class="form-3">

                            <h1 class="sometigs-head">Label</h1>
                            <label for="Personal-Name" class="welcome-form-label">Company Name</label>
                            <input type="text" class="name-fields w-input" maxlength="256" name="Personal-Name-2" data-name="Personal Name 2" placeholder="enter your name" id="Personal-Name-2" required=""><input type="text" class="name-fields w-input" maxlength="256" name="Personal-Name-2" data-name="Personal Name 2" placeholder="enter your name" id="Personal-Name-2" required="">

                            <label for="Password" class="welcome-form-label">Company logo</label>
                            <input type="email" class="name-fields w-input" maxlength="256" name="Password-3" data-name="Password 3" placeholder="enter your email" id="Password-3" required="">

                            <label for="Password" class="welcome-form-label">Contact Name</label>
                            <input type="text" class="name-fields w-input" maxlength="256" name="Password-2" data-name="Password 2" id="Password-2" required="">

                            <label for="Password" class="welcome-form-label">Email Address</label>
                            <input type="text" class="name-fields w-input" maxlength="256" name="Password-2" data-name="Password 2" id="Password-2" required="">

                            <label for="Password" class="welcome-form-label">Phone Number</label>

                            <input type="text" class="name-fields w-input" maxlength="256" name="Password-2" data-name="Password 2" id="Password-2" required="">
                            <label for="Password" class="welcome-form-label">website</label>

                            <input type="text" class="name-fields w-input" maxlength="256" name="Password-2" data-name="Password 2" id="Password-2" required="">
                            <div class="spacer"></div>

                            <h1 class="sometigs-head">Management Contact</h1>
                            <label for="Personal-Name" class="welcome-form-label">Company Name</label>
                            <input type="text" class="name-fields w-input" maxlength="256" name="Personal-Name-2" data-name="Personal Name 2" placeholder="enter your name" id="Personal-Name-2" required=""><label for="Password" class="welcome-form-label">Contact Name</label>
                            <input type="email" class="name-fields w-input" maxlength="256" name="Password-3" data-name="Password 3" placeholder="enter your email" id="Password-3" required=""><label for="Password" class="welcome-form-label">Company Logo</label>
                            <input type="text" class="name-fields w-input" maxlength="256" name="Password-2" data-name="Password 2" id="Password-2" required=""><label
                                    for="Password" class="welcome-form-label">Email Address</label>
                            <input type="text" class="name-fields w-input" maxlength="256" name="Password-2" data-name="Password 2" id="Password-2" required=""><label
                                    for="Password" class="welcome-form-label">Phone Number</label>
                            <input type="text" class="name-fields w-input" maxlength="256" name="Password-2" data-name="Password 2" id="Password-2" required=""><label
                                    for="Password" class="welcome-form-label">website</label>
                            <input type="text" class="name-fields w-input" maxlength="256" name="Password-2" data-name="Password 2"
                                   id="Password-2" required="">
                            <input type="submit" value="Verify" data-wait="Please wait..." class="email-button w-button">
                            <div class="spacer"></div>

                            <h1 class="sometigs-head">Social Media Connection</h1>
                            <label for="Personal-Name" class="welcome-form-label">Connect Social Media ...</label>
                            <div class="connect-social-here w-row">
                                <div class="column-68 w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                    <a href="#" class="connect-active w-inline-block" data-ix="facebook-connect">
                                        <img src="https://uploads-ssl.webflow.com/5ace5bf2286b145321f46e32/5ade2f6c4682eaa5b7e28353_036-facebook.svg" width="32"></a></div>
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
                            <input type="submit" value="Request" data-wait="Please wait..." class="_50 w-button"></form>
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
        <div class="div-block-160"></div>
    </div>
@endsection