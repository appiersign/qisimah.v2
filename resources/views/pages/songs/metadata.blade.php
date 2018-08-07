@extends('layouts.dashboard')
@section('content')
    <div class="">
        <div class="inner-top-wrapper">
            <div class="div-block-16">
                <h1 class="heading-2">Music Metadata</h1>
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

        <div class="page-wrapper">
            <div class="meta-data-form-block w-form">
                <form class="modal-upload-song">
                    <h1 class="upload-modal-title"></h1>
                    <div class="row-6 w-row">
                        <div class="column-47 w-col w-col-6">
                            <label for="Song-Title" class="meta-data-label">Title</label>
                            <input type="text" class="meta-data-field w-input" maxlength="256" name="Song-Title" data-name="Song Title" placeholder="song title" id="Song-Title" required="">
                        </div>
                        <div class="column-48 w-col w-col-6">
                            <label for="Song-Version" class="meta-data-label">Version</label>
                            <select id="Song-Version" name="Song-Version" data-name="Song Version" class="meta-data-field w-select">
                                <option value="Select version">Select version</option>
                                <option value="Original">Original</option>
                                <option value="Remix">Remix</option>
                                <option value="Cover">Cover</option>
                            </select>
                        </div>
                    </div>
                    <div class="row-6 w-row">
                        <div class="column-47 w-col w-col-6">
                            <label for="Artist-name" class="meta-data-label">Artist</label>
                            <input type="text" class="meta-data-field w-input" maxlength="256" name="Artist-name" data-name="Artist Name" placeholder="Select artist" id="Artist-name" required="">
                        </div>
                        <div class="column-48 w-col w-col-6">
                            <label for="Featured-artist" class="meta-data-label">Featured Artist</label>
                            <input type="text" class="meta-data-field w-input" maxlength="256" name="Featured-artist" data-name="Featured Artist" placeholder="select artist" id="Featured-artist" required="">
                        </div>
                    </div>
                    <div class="row-6 w-row">
                        <div class="column-47 w-col w-col-6">
                            <label for="Genre" class="meta-data-label">Genre</label>
                            <input type="text" class="meta-data-field w-input" maxlength="256" name="Genre" data-name="Genre" placeholder="select Genre " id="Genre" required="">
                        </div>
                        <div class="column-48 w-col w-col-6">
                            <label for="producer" class="meta-data-label">Produced by</label>
                            <input type="text" class="meta-data-field w-input" maxlength="256" name="producer" data-name="Producer" placeholder="select producer" id="producer" required="">
                        </div>
                    </div>
                    <div class="row-6 w-row">
                        <div class="column-47 w-col w-col-6">
                            <label for="album-name" class="meta-data-label">Album</label>
                            <input type="text" class="meta-data-field w-input" maxlength="256" name="album-name" data-name="Album Name" placeholder="album name" id="album-name" required="">
                        </div>
                        <div class="column-48 w-clearfix w-col w-col-6">
                            <label for="cover-art" class="meta-data-label">Cover Art</label>
                            <input type="text" class="cover-art-field w-input" maxlength="256" name="cover-art" data-name="Cover Art" placeholder="no file selected" id="cover-art" required="">
                            <a href="#" class="meta-data-button-file w-button">Select file</a>
                        </div>
                    </div>
                    <div class="w-row">
                        <div class="column-24 w-col w-col-7"></div>
                        <div class="column-24 w-col w-col-5"></div>
                    </div>
                    <div class="row-6 w-row">
                        <div class="column-47 w-col w-col-6">
                            <label class="meta-data-label">Label</label>
                            <select id="label-name" name="label-name" data-name="label-name" class="meta-data-field w-select">
                                <option value="Select version">Select Label</option>
                                <option value="Original">Zylofone</option>
                                <option value="Remix">Lynx entertainment</option>
                                <option value="Cover">Black Avenue</option>
                            </select>
                        </div>
                        <div class="column-48 w-col w-col-6">
                            <label class="meta-data-label">Release Date</label>
                            <input type="text" class="meta-data-field w-input" maxlength="256" name="audio-file-2" data-name="Audio File 2" placeholder="no audio file selected" id="audio-file-2" required="">
                        </div>
                    </div>
                    <input type="submit" value="Save" data-wait="Please wait..." class="meta-data-submit-button w-button">
                </form>
            </div>
        </div>
    </div>
@endsection