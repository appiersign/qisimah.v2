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
                <form action="{{ route('songs.metadata.update', ["qisimah_id" => $song->qisimah_id]) }}" method="post" class="modal-upload-song" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <h1 class="upload-modal-title"></h1>
                    <div class="row-6 w-row">
                        <div class="column-47 w-col w-col-6">
                            <label for="Song-Title" class="meta-data-label">Title</label>
                            <input type="text" class="meta-data-field w-input" maxlength="100" name="title" placeholder="song title" id="Song-Title" required="">
                        </div>
                        <div class="column-48 w-col w-col-6">
                            <label for="Song-Version" class="meta-data-label">Version</label>
                            <select id="Song-Version" name="version" class="meta-data-field w-select">
                                <option value="" selected disabled="">select version</option>
                                <option value="o">Original</option>
                                <option value="r">Remix</option>
                                <option value="c">Cover</option>
                            </select>
                        </div>
                    </div>
                    <div class="row-6 w-row">
                        <div class="column-47 w-col w-col-6">
                            <label for="Artist-name" class="meta-data-label">Artist</label>
                            <select id="Song-Version" name="artist" class="meta-data-field w-select">
                                <option value="" selected disabled="">select artist</option>
                                @if($artists)
                                    @foreach($artists as $artist)
                                        <option value="{{ $artist->id }}">{{ $artist->nick_name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="column-48 w-col w-col-6">
                            <label for="featured-artist" class="meta-data-label">Featured</label>
                            <select id="featured-artist" name="featured" class="meta-data-field w-select" multiple>
                                <option value="" selected disabled="">select featured artists</option>
                                @if($artists)
                                    @foreach($artists as $artist)
                                        <option value="{{ $artist->id }}">{{ $artist->nick_name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="row-6 w-row">
                        <div class="column-47 w-col w-col-6">
                            <label for="Genre" class="meta-data-label">Genres</label>
                            <select id="featured-artist" name="genre" class="meta-data-field w-select" multiple>
                                <option value="" selected disabled="">select genre</option>
                                @if($genres)
                                    @foreach($genres as $genre)
                                        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="column-48 w-col w-col-6">
                            <label for="producer" class="meta-data-label">Producers</label>
                            <select id="producer" name="producers" class="meta-data-field w-select" multiple>
                                <option value="" selected disabled="">select producers</option>
                                @if($producers)
                                    @foreach($producers as $producer)
                                        <option value="{{ $producer->id }}">{{ $producer->nick_name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="row-6 w-row">
                        <div class="column-47 w-col w-col-6">
                            <label for="album-name" class="meta-data-label">Album</label>
                            <select id="album-name" name="album" class="meta-data-field w-select">
                                <option value="" selected disabled="">select producers</option>
                                @if($albums)
                                    @foreach($albums as $album)
                                        <option value="{{ $album->id }}">{{ $album->title }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="column-48 w-clearfix w-col w-col-6">
                            <label for="label-name" class="meta-data-label">Label</label>
                            <select id="label-name" name="label" class="meta-data-field w-select">
                                <option value="" selected disabled="">select label</option>
                                @if($labels)
                                    @foreach($labels as $label)
                                        <option value="{{ $label->id }}">{{ $label->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="row-6 w-row">
                        <div class="column-47 w-col w-col-6">
                            <label for="release-date" class="meta-data-label">Released</label>
                            <input type="text" value="{{ date('Y-m-d') }}" class="meta-data-field w-input" maxlength="10" name="release" placeholder="" id="release-date" required="">
                        </div>

                        <div class="column-48 w-col w-col-6">
                            <label for="cover-art" class="meta-data-label">Art</label>
                            <input type="file" class="cover-art-field w-input" name="art"
                                   placeholder="no file selected" id="cover-art">
                        </div>
                    </div>
                    <div class="row-6 w-row">
                        <div class="column-47 w-col w-col-9"></div>
                        <div class="column-47 w-col w-col-3">
                            <input type="submit" value="Save" class="meta-data-submit-button w-button">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection