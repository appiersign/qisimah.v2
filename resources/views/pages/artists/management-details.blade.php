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

                @if($errors->any())
                    @include('components.guest.danger-message')
                @endif

                <form action="{{ route('artists.management.details.store', ['qisimah_id' => $artist->qisimah_id]) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="div-block-158">
                        <div class="form-block-4 w-form">
                            <label for="role" class="welcome-form-label">Your role</label>
                            <select id="role" name="role" data-name="Field" class="name-fields w-select">
                                <option value="" disabled selected>Select one...</option>
                                <option value="artist">Artist</option>
                                <option value="manager">Manager</option>
                                <option value="label">Label Rep</option>
                            </select>
                        </div>
                    </div>

                    <div class="label-contact">
                        <div class="form-block-4 w-form">

                            <h1 class="sometigs-head">Label</h1>
                            <label for="label-name" class="welcome-form-label">Name</label>
                            <input type="text" class="name-fields w-input" maxlength="256" name="label_name"
                                   placeholder="enter label name" id="label-name" required="">

                            <label for="label-logo" class="welcome-form-label">logo</label>
                            <input type="file" class="name-fields w-input" maxlength="256" name="label_logo"
                                   placeholder="enter your email" id="label-logo" required="">

                            <label for="label-rep" class="welcome-form-label">Contact Name</label>
                            <input type="text" class="name-fields w-input" placeholder="enter label rep's name"
                                   name="label_rep" id="label-rep" required="">

                            <label for="label-email" class="welcome-form-label">Email Address</label>
                            <input type="text" class="name-fields w-input" placeholder="yourlabel@email.com"
                                   name="label_email" id="label-email" required="">

                            <label for="label-telephone" class="welcome-form-label">Phone Number</label>
                            <input type="text" class="name-fields w-input" placeholder="02XXXXXXXX"
                                   name="label_telephone" id="label-telephone" required="">

                            <label for="label-website" class="welcome-form-label">website</label>
                            <input type="text" class="name-fields w-input" placeholder="www.yourlabel.com"
                                   name="label_website" id="label-website">
                            <div class="spacer"></div>

                            <h1 class="sometigs-head">Management Contact</h1>

                            {{--<label for="same-as-label">Same as Label</label>--}}
                            <input type="checkbox" id="same-as-label" name="autofill-management"> <strong>Same as Label</strong>
                            <div class="spacer"></div>

                            <label for="management-name" class="welcome-form-label">Company Name</label>
                            <input type="text" class="name-fields w-input management-fields" name="management_name"
                                   placeholder="management name" id="management-name" required="">

                            <label for="management-rep" class="welcome-form-label">Contact Name</label>
                            <input type="email" class="name-fields w-input management-fields" name="management_rep"
                                   placeholder="management rep's name" id="management-rep" required="">

                            <label for="management-logo" class="welcome-form-label">Company Logo</label>
                            <input type="file" class="name-fields w-input management-fields" name="management_logo"
                                   id="management-logo" required="">

                            <label for="management-email" class="welcome-form-label">Email Address</label>
                            <input type="text" class="name-fields w-input management-fields" name="management_email"
                                   placeholder="yourmanagement@email.com" id="management-email" required="">

                            <label for="management-telephone" class="welcome-form-label">Phone Number</label>
                            <input type="text" class="name-fields w-input management-fields" name="management_telephone"
                                   placeholder="02XXXXXXXX" id="management-telephone" required="">

                            <label for="management-website" class="welcome-form-label">website</label>
                            <input type="text" class="name-fields w-input management-fields" name="management_website"
                                   placeholder="www.yourmanagement.com" id="management-website">

                            {{--<input type="submit" value="Verify" data-wait="Please wait..." class="w-button">--}}
                            {{--<div class="spacer"></div>--}}

                            {{--<h1 class="sometigs-head">Social Media Connection</h1>--}}
                            {{--<label for="Personal-Name" class="welcome-form-label">Connect Social Media ...</label>--}}
                            {{--<div class="connect-social-here w-row">--}}
                                {{--<div class="column-68 w-col w-col-3 w-col-small-3 w-col-tiny-3">--}}
                                    {{--<a href="#" class="connect-active w-inline-block" data-ix="facebook-connect">--}}
                                        {{--<img src="https://uploads-ssl.webflow.com/5ace5bf2286b145321f46e32/5ade2f6c4682eaa5b7e28353_036-facebook.svg"--}}
                                             {{--width="32"></a></div>--}}
                                {{--<div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">--}}
                                    {{--<a href="#" class="connect-inactive w-inline-block" data-ix="connect-twitter">--}}
                                        {{--<img src="https://uploads-ssl.webflow.com/5ace5bf2286b145321f46e32/5ade301a4682ea0de0e283b8_008-twitter.svg"--}}
                                             {{--width="32">--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">--}}
                                    {{--<a href="#" class="connect-inactive w-inline-block"></a>--}}
                                {{--</div>--}}
                                {{--<div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">--}}
                                    {{--<a href="#" class="connect-inactive w-inline-block"></a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <input type="submit" value="save" data-wait="Please wait..." class="_50 w-button">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="div-block-160"></div>
    </div>
@endsection