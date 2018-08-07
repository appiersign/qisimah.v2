@extends('layouts.dashboard')
@section('content')
    <div class="">
        <div class="inner-top-wrapper">
            <div class="div-block-16">
                <h1 class="heading-2">Albums</h1>
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

        <div class="form-modal-sub albums-column w-row form-block-7">
            <h1 class="heading-6">add album</h1>
            <a href="{{ route('albums.index') }}" class="proper-close-4-modal w-inline-block" data-ix="close-broadcaster-modal">
                <img src="{{ asset('images/ic_close_white_256dp_1x.png') }}" width="32">
            </a>
            <div class="div-block-82">
                <div class="w-form">
                    <form method="post" enctype="multipart/form-data" action="{{ route('albums.update', ['id' => $album->id]) }}" name="albums" data-name="Email Form 2">
                        {{ csrf_field() }}
                        <div class="w-row">
                            <div class="w-col w-col-6">
                                <label for="album-title" class="form-label">Album Title:</label>
                                <input id="album-title" value="{{ old('title') ?? $album->title }}" type="text" class="text-field-2 w-input" name="title" placeholder="Title">
                            </div>
                            <div class="w-col w-col-6">
                                <label for="album-year" class="form-label">Release Year:</label>
                                <input id="album-year" value="{{ old('year') ?? $album->release_year }}" type="text" class="text-field-2 w-input" name="year" placeholder="eg. {{ date('Y') }}">
                            </div>
                        </div>
                        <div class="w-row">
                            <div class="w-clearfix w-col w-col-6">
                                <label for="album-artist" class="form-label">Artist:</label>
                                <select id="album-artist" name="artist" class="meta-data-field w-select">
                                    <option value="">Select Artist</option>
                                    @if($artists)
                                        @foreach($artists as $artist)
                                            <option value="{{ $artist->id }}" {{ ($album->artist->id == $artist->id)? 'selected' : '' }}>{{ $artist->nick_name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="w-clearfix w-col w-col-6">
                                <label for="album-label" class="form-label">Label:</label>
                                <select id="album-label" name="label" class="meta-data-field w-select">
                                    <option value="">Select Label</option>
                                    @if($labels)
                                        @foreach($labels as $label)
                                            <option value="{{ $label->id }}" {{ ($album->label->id == $label->id)? 'selected' : '' }}>{{ $label->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="w-row">
                            <div class="w-clearfix w-col w-col-6">
                                <label for="logo" class="form-label">Album art:</label>
                                <input type="file" class="text-field-2 logo-field w-input" name="art">
                            </div>
                            <div class="w-clearfix w-col w-col-6">
                                <label for="logo" class="form-label"><p></p></label>
                                <div class="div-block-83">
                                    <input type="submit" value="update" data-wait="Please wait..." class="button w-button">
                                </div>
                            </div>
                        </div>
                        <div class="form-submit-wrapper">

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection