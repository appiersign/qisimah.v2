@extends('layouts.dashboard')
@section('content')
    <div class="">
        <div class="inner-top-wrapper">
            <div class="div-block-16">
                <h1 class="heading-2">all songs</h1>
                <div>
                    <a href="{{ route('songs.create') }}" class="upload-song-button w-inline-block">
                        <img src="https://uploads-ssl.webflow.com/5ace5bf2286b145321f46e32/5ad49a1a0e93f33a9edcb8eb_upload-to-the-cloud.svg" width="30">
                        <div class="div-block-18">
                            <div class="text-block-6">Upload Song</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="qisimah-container-main" data-ix="load-album-modal">
            <a href="{{ url('songs/1') }}" class="songs-page-wrapper w-inline-block">
                <div class="div-block-95">
                    <div class="heading-text">Title</div>
                    <div class="song-details-table-wrapper">
                        <img src="images/track-art_1track-art.jpg" class="image-2">
                        <div class="song-name-artist">
                            <div class="text-block-2">Wame</div>
                        </div>
                    </div>
                </div>
                <div class="div-block-96">
                    <div class="heading-text">ARTIST</div>
                    <div>Stonebwoy</div>
                </div>
                <div class="div-block-97">
                    <div class="heading-text">UPLOADER</div>
                    <div>Cassper Nyovest</div>
                </div>
                <div class="div-block-99">
                    <div class="heading-text">DATE UPLOADED</div>
                    <div>21.03.2018</div>
                </div>
                <div class="div-block-100">
                    <div class="heading-text">STATUS</div>
                    <div class="text-block-26">READY</div>
                </div>
                <div class="div-block-98">
                    <div class="heading-text">DURATION</div>
                    <div>3.20</div>
                </div>
            </a>
        </div>
    </div>
@endsection