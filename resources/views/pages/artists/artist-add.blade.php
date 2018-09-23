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
                <form id="email-form-2" name="email-form-2" data-name="Email Form 2">
                    <h1 class="find-and-rename2">Request Artist Access</h1>
                    <div class="w-row">
                        <div class="w-col w-col-6">
                            <label for="Station" class="form-label">Select artist:</label>
                            <select id="field-3" name="field-3" data-name="Field 3" class="text-field-2 w-select">
                                <option value="">Select one...</option>
                                <option value="First">First Choice</option>
                                <option value="Second">Second Choice</option>
                                <option value="Third">Third Choice</option>
                            </select>

                        </div>
                        <div class="w-col w-col-6">
                            <label for="Frequency" class="form-label">Select label</label>
                            <select id="field-2" name="field-2" data-name="Field 2" class="text-field-2 w-select">
                                <option value="">Select one...</option>
                                <option value="First">First Choice</option>
                                <option value="Second">Second Choice</option>
                                <option value="Third">Third Choice</option>
                            </select>
                        </div>
                        <a href="#" class="link-3">Cant find your artist? Click here to request addition</a>
                    </div>
                    <div class="form-submit-wrapper">
                        <div class="div-block-83">
                            <input type="submit" value="Request" data-wait="Please wait..." class="button w-button">
                        </div>
                    </div>
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
