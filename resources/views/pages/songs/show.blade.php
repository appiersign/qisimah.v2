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
        <div class="qisimah-container-main" data-ix="load-album-modal">
            <div class="div-block-82">
                <div class="div-block-109">
                    <div class="div-block-110">
                        <div class="div-block-114">
                            <img src="{{ asset($song->art) }}" srcset="{{ asset($song->art) }} 500w, {{ asset($song->art) }} 575w" sizes="100vw" class="view-song-album-art">
                            <div class="song-play-wrapper">
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
                                    <h3 class="heading-7">52</h3>
                                    <div class="text-block-39">Total Plays</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="div-block-111">
                        <div class="text-block-31">
                            <strong class="bold-text-4">{{ $song->title }}</strong>
                        </div>
                        <div class="row-9 w-row">
                            <div class="w-col w-col-7">
                                <div>
                                    <strong class="song-owner">{{ $song->artist->nick_name }}</strong>
                                </div>
                            </div>
                            <div class="w-col w-col-5">
                                <div class="text-block-32">2014</div>
                            </div>
                        </div>
                        <div class="row-8 w-row">
                            <div class="w-col w-col-4">
                                <div>
                                    <strong class="bold-text-5">Featured:</strong>
                                </div>
                            </div>
                            <div class="w-col w-col-8">
                                <div class="song-things">Mega 12, Yaa Pono, Yaa Pono, Yaa Pono, Yaa Pono, Yaa Pono, Yaa Pono</div>
                            </div>
                        </div>
                        <div class="row-8 w-row">
                            <div class="w-col w-col-4">
                                <div class="text-block-37">
                                    <strong>Genres:</strong>
                                </div>
                            </div>
                            <div class="w-col w-col-8">
                                <div class="song-things">Afrobeat, Dance Hall, Hip Life</div>
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
                                <div class="song-things">{{ 'Record Label' }}</div>
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
                                <a href="#" class="edit-song w-inline-block" data-ix="view-edit-modal">
                                    <img src="{{ asset('images/icons8-pencil-20.png') }}" class="image-11">
                                </a>
                                <a href="#" class="delete-song w-inline-block">
                                    <img src="{{ asset('images/icons8-close-window-20.png') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection