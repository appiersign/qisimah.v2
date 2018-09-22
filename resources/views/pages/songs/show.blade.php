@extends('layouts.dashboard')
@section('content')
    <div class="">
        <div class="inner-top-wrapper">
            <div class="div-block-16">
                <h1 class="heading-2">Meta Data</h1>
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

        @include('components.guest.messages')

        <div class="qisimah-container-main" data-ix="load-album-modal">
            <div class="song-details">
                <div class="div-block-109 row">
                    <a href="" class="close-song-view w-inline-block" data-ix="close-view-song-modal">
                        <img src="{{ asset('images/ic_close_white_256dp_1x.png') }}" width="24">
                    </a>
                    <div class="div-block-110 col-md-6">
                        <div class="div-block-114">
                            <img src="{{ asset($song->art) }}" srcset="{{ asset($song->art) }} 500w, {{ asset($song->art) }} 575w" sizes="100vw" class="view-song-album-art">
                            <div class="song-play-wrapper" style="position: absolute;left: 0px;right: 0px;bottom: 0px;display: -webkit-box;display: -webkit-flex;display: -ms-flexbox;display: flex;padding-right: 20px;padding-left: 20px;-webkit-box-pack: justify;-webkit-justify-content: space-between;-ms-flex-pack: justify;justify-content: space-between;-webkit-box-align: center;-webkit-align-items: center;-ms-flex-align: center;align-items: center;-webkit-flex-basis: 50%;-ms-flex-preferred-size: 50%;flex-basis: 50%;background-color: rgba(22, 16, 54, .56);box-shadow: 1px 1px 8px 0 rgba(0, 0, 0, .1);color: #000;text-decoration: none;cursor: pointer;">
                                <div class="div-block-102">
                                    <img src="{{ asset('images/icon.svg') }}" width="20">
                                </div>
                                <div class="div-block-104">
                                    <img src="{{ asset('images/stop-button.svg') }}" width="34">
                                </div>
                                <div class="div-block-105">
                                    <div class="div-block-106" data-ix="pause-button-reveal">
                                        <a href="#" class="play-icon w-inline-block">
                                            <img src="{{ asset('images/play-button-arrowhead.svg') }}" width="32">
                                        </a>
                                        <a href="#" class="pause-icon w-inline-block" data-ix="hide-pause-button">
                                            <img src="{{ asset('images/music-player-pause-lines.svg') }}" width="32">
                                        </a>
                                    </div>
                                </div>
                                <div class="div-block-103">
                                    <img src="{{ asset('images/forward-button.svg') }}" width="20">
                                </div>
                            </div>
                        </div>
                        <div class="div-block-115">
                            <div class="w-row">
                                <div class="w-col w-col-6">
                                    <h3 class="heading-7">52</h3>
                                    <div class="text-block-39">Total Plays</div>
                                </div>
                                <div class="w-col w-col-6">
                                    <h3 class="heading-7">#1</h3>
                                    <div class="text-block-39">Rank</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="div-block-111 col-md-6">
                        <div class="text-block-31">
                            <strong class="bold-text-4" style="margin-top: 44px; font-size: 28px; line-height: 33px; font-weight: 500;">{{ $song->title }}</strong>
                        </div>
                        <div class="row-9 w-row">
                            <div class="w-col w-col-7">
                                <div>
                                    <strong class="song-owner">{{ $song->artist->nick_name }}</strong>
                                </div>
                            </div>
                            <div class="w-col w-col-5">
                                <div class="text-block-32">{{ $song->getReleaseYear() }}</div>
                            </div>
                        </div>
                        <div class="row-8 w-row">
                            <div class="w-col w-col-4">
                                <div>
                                    <strong class="bold-text-5">Featured:</strong>
                                </div>
                            </div>
                            <div class="w-col w-col-8">
                                <div class="song-things">{{ $song->getFeatured() }}</div>
                            </div>
                        </div>
                        <div class="row-8 w-row">
                            <div class="w-col w-col-4">
                                <div>
                                    <strong class="bold-text-5">Producers:</strong>
                                </div>
                            </div>
                            <div class="w-col w-col-8">
                                <div class="song-things">{{ $song->getProducers() }}</div>
                            </div>
                        </div>
                        <div class="row-8 w-row">
                            <div class="w-col w-col-4">
                                <div class="text-block-37">
                                    <strong>Genres:</strong>
                                </div>
                            </div>
                            <div class="w-col w-col-8">
                                <div class="song-things">{{ $song->getGenres() }}</div>
                            </div>
                        </div>
                        <div class="row-8 w-row">
                            <div class="w-col w-col-4">
                                <div class="text-block-36">
                                    <strong>Album:</strong>
                                </div>
                            </div>
                            <div class="w-col w-col-8">
                                <div class="song-things">{{ $song->album->title }}</div>
                            </div>
                        </div>
                        <div class="row-8 w-row">
                            <div class="w-col w-col-4">
                                <div class="text-block-35">
                                    <strong>Label:</strong>
                                </div>
                            </div>
                            <div class="w-col w-col-8">
                                <div class="song-things">{{ $song->label->name }}</div>
                            </div>
                        </div>
                        <div class="row-8 w-row">
                            <div class="w-col w-col-4">
                                <div class="text-block-34">
                                    <strong>1st Play:</strong>
                                </div>
                            </div>
                            <div class="w-col w-col-8">
                                <div class="song-things">20.30.2017</div>
                            </div>
                        </div>
                        <div class="row-8 w-row">
                            <div class="w-col w-col-4">
                                <div class="text-block-33">
                                    <strong>Recent Play:</strong>
                                </div>
                            </div>
                            <div class="w-col w-col-8">
                                <div class="song-things">21.05.2018</div>
                            </div>
                        </div>
                        <div class="div-block-108">
                            <div class="div-block-113">
                                <a href="{{ route('songs.edit', ["qisimah_id" => $song->qisimah_id]) }}" class="edit-song w-inline-block" data-ix="view-edit-modal">
                                    <img src="{{ asset('images/icons8-pencil-20.png') }}" class="image-11">
                                </a>
                                <form action="{{ route('songs.destroy', ["qisimah_id" => $song->qisimah_id]) }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="delete">
                                    <button type="submit" class="delete-song w-inline-block">
                                        <img src="{{ asset('images/icons8-close-window-20.png') }}">
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection