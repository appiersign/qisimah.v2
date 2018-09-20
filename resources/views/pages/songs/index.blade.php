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
        
        @include('components.guest.messages')

        <div class="qisimah-container-main" data-ix="load-album-modal">
            @if (count($songs))
                @foreach($songs as $song)
                    <a href="{{ route('songs.show', ['qisimah_id' => $song->qisimah_id]) }}" class="songs-page-wrapper w-inline-block">
                        <div class="div-block-95">
                            <div class="heading-text">Title</div>
                            <div class="song-details-table-wrapper">
                                <img src="{{ asset($song->art) }}" class="image-2" width="30">
                                <div class="song-name-artist">
                                    <div class="text-block-2">{{ $song->title }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="div-block-96">
                            <div class="heading-text">ARTIST</div>
                            <div>{{ $song->artist->nick_name }}</div>
                        </div>
                        <div class="div-block-97">
                            <div class="heading-text">UPLOADER</div>
                            <div>{{ $song->user->name }}</div>
                        </div>
                        <div class="div-block-99">
                            <div class="heading-text">DATE UPLOADED</div>
                            <div>{{ $song->release_date }}</div>
                        </div>
                        <div class="div-block-100">
                            <div class="heading-text">STATUS</div>
                            @if ($song->status == 0)
                                <div class="text-block-26">PENDING</div>
                            @elseif($song->status == 1)
                                <div class="text-block-26">READY</div>
                            @else
                                <div class="text-block-26">LISTENING</div>
                            @endif
                        </div>
                        <div class="div-block-98">
                            <div class="heading-text">DURATION</div>
                            <div>{{ $song->getDuration() }}</div>
                        </div>
                    </a>
                @endforeach
                {{ $songs->links() }}
            @else
                <a href="{{ route('songs.create') }}" class="songs-page-wrapper w-inline-block">
                    click to upload first song
                </a>
            @endif
        </div>
    </div>
@endsection