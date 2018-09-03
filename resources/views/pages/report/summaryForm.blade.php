@extends('layouts.dashboard')
@section('content')
    <div class="">
        <div class="inner-top-wrapper">
            <div class="div-block-16">
                <h1 class="heading-2">Summary</h1>
                <div>
                    <a href="#" class="upload-song-button w-inline-block" data-ix="upload-song-modal-trigger">
                        <img src="https://uploads-ssl.webflow.com/5ace5bf2286b145321f46e32/5ad49a1a0e93f33a9edcb8eb_upload-to-the-cloud.svg"
                             width="30">
                        <div class="div-block-18">
                            <div class="text-block-6">Upload Song</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="qisimah-container-main" data-ix="load-album-modal">

            @include('components.guest.messages')

            <div class="div-block-122">
                <div class="div-block-124">
                    <div class="form-block-5 w-form">
                        <form id="email-form" method="post" action="{{ route('reports.summary') }}" class="plays-summary-report">
                            {{ csrf_field() }}
                            <select id="summary-artist" name="artist" class="select-field-summary w-select" required>
                                <option value="" disabled selected>Select Artist</option>
                                <option value="all">All</option>
                                @if(isset($artists))
                                    @foreach($artists as $artist)
                                        <option value="{{ $artist->qisimah_id }}">{{ $artist->nick_name }}</option>
                                    @endforeach
                                @endif
                            </select>

                            <select id="summary-country" name="country" class="select-field-summary w-select" required>
                                <option value="" disabled selected>Select Country</option>
                                <option value="all">All</option>
                                @if(isset($countries))
                                    @foreach($countries as $country)
                                        <option value="{{ $country->qisimah_id }}">{{ $country->name }}</option>
                                    @endforeach
                                @endif
                            </select>

                            <select id="summary-song" name="song" class="select-field-summary w-select" required>
                                <option value="Select Artist" disabled selected>Select Song</option>
                                <option value="all">All</option>
                                @if(isset($songs))
                                    @foreach($songs as $song)
                                        <option value="{{ $song->qisimah_id }}">{{ $song->title }}</option>
                                    @endforeach
                                @endif
                            </select>
                            <input id="reportrange" name="dates" data-name="Field 2"
                                 class="select-field-summary w-select daterange-select">

                            <input type="submit" value="Generate"
                                   class="submit-button-4 w-button summary-search">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-scripts')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script>
        $('input[name="dates"]').daterangepicker();
    </script>
@endsection