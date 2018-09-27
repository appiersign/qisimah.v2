@extends('layouts.dashboard')
@section('content')
    <div class="">
        <div class="inner-top-wrapper">
            <div class="div-block-16">
                <h1 class="heading-2">Upload Song</h1>
                <div>
                    <a href="#" class="upload-song-button w-inline-block" data-ix="upload-song-modal-trigger">
                        <img src="https://uploads-ssl.webflow.com/5ace5bf2286b145321f46e32/5ad49a1a0e93f33a9edcb8eb_upload-to-the-cloud.svg" width="30">
                        <div class="div-block-18">
                            <div class="text-block-6">Upload Song</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        @include('components.guest.danger-message')

        <div class="qisimah-container-main">
            <div class="form-block w-form" style="margin: auto;">
                <form action="{{ route("songs.store") }}" method="post" class="modal-upload-song w-clearfix" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <h1 class="upload-modal-title"></h1>
                    <div class="w-row">
                        <div class="column-24 w-col w-col-12">
                            <input type="file" class="text-field w-input" name="song" required>
                        </div>
                    </div>
                    <div class="text-block-9">* Recommended file type(s): mp3</div>
                    <br>
                    <div class="text-block-9">* Maximum file size: 7mb</div>
                    <input type="submit" value="Upload" class="submit-button w-button" style="text-align: center;">
                </form>
            </div>
        </div>
    </div>
@endsection