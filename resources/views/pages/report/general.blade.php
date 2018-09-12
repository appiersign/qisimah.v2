@extends('layouts.dashboard')
@section('content')
    <div class="">
        <div class="inner-top-wrapper">
            <div class="div-block-16">
                <h1 class="heading-2">General</h1>
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

            <div class="top-sum">
                <div class="w-row">
                    <div class="w-col w-col-4">
                        <div class="text-block-23">0</div>
                        <div class="number-card-divider-dark"></div>
                        <div class="number-card-cedis">Total number fetched</div>
                    </div>
                    <div class="w-col w-col-4">
                        <div class="text-block-23">0</div>
                        <div class="number-card-divider-dark"></div>
                        <div class="number-card-cedis">Total number of Broadcasters</div>
                    </div>
                    <div class="w-col w-col-4">
                        <div class="text-block-23">0</div>
                        <div class="number-card-divider-dark"></div>
                        <div class="number-card-cedis">Locations</div>
                    </div>
                </div>
            </div>

            <div class="div-block-12">
                <div class="div-block-121">
                    <div class="w-form">
                        <form id="email-form" method="post" action="{{ route('reports.summary') }}" name="email-form" data-name="Email Form" class="plays-summary-report">
                            {{ csrf_field() }}
                            <select id="field-2" name="broadcaster" class="select-field-summary w-select">
                                <option value="">Select Broadcaster</option>
                                <option value="all">All</option>
                                @if(isset($broadcasters))
                                    @foreach($broadcasters as $broadcaster)
                                        <option value="{{ $broadcaster->qisimah_id }}">{{ $broadcaster->name. ' - ' .$broadcaster->frequency }}</option>
                                    @endforeach
                                @endif
                            </select>

                            <select id="summary-artist" name="artist" class="select-field-summary w-select">
                                <option value="" disabled selected>Select Artist</option>
                                <option value="all">All</option>
                                @if(isset($artists))
                                    @foreach($artists as $artist)
                                        <option value="{{ $artist->qisimah_id }}">{{ $artist->nick_name }}</option>
                                    @endforeach
                                @endif
                            </select>

                            <select id="summary-country" name="country" class="select-field-summary w-select">
                                <option value="" disabled selected>Select Country</option>
                                <option value="all">All</option>
                                @if(isset($countries))
                                    @foreach($countries as $country)
                                        <option value="{{ $country->qisimah_id }}">{{ $country->name }}</option>
                                    @endforeach
                                @endif
                            </select>

                            <select id="summary-song" name="song" class="select-field-summary w-select">
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

                            <input type="submit" value="Generate" data-wait="Please wait..."
                                   class="submit-button-4 w-button summary-search">
                        </form>


                        <div class="w-form-done">
                            <div>Thank you! Your submission has been received!</div>
                        </div>
                        <div class="w-form-fail">
                            <div>Oops! Something went wrong while submitting the form.</div>
                        </div>
                    </div>
                </div>
                <div data-duration-in="300" data-duration-out="100" class="w-tabs">
                    <div class="reports-tab-menu w-tab-menu">
                        <a data-w-tab="Logs" class="reports-tab-link w-inline-block w-tab-link w--current">
                            <div>Log</div>
                        </a>
                        <a data-w-tab="heat map" class="reports-tab-link w-inline-block w-tab-link">
                            <div>Heat Map</div>
                        </a>
                    </div>
                    <div class="w-tab-content">
                        <div data-w-tab="Logs" class="reports-tab-content w-tab-pane w--tab-active">
                            <div class="div-block-27">
                                <div class="row-7 w-row">
                                    <div class="column-4 w-col w-col-3">
                                        <div class="track-details-wrapper">
                                            <img src="images/track-art_1track-art.jpg">
                                            <div class="song-name-artist">
                                                <div class="text-block-2">Adiapena</div>
                                                <div class="text-block-3">Kidi</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-col w-col-3">
                                        <div>
                                            <span class="station-name">Joy FM</span> -
                                            <span>99.7 </span>
                                            <span>Ghana</span>
                                        </div>
                                    </div>
                                    <div class="w-col w-col-2">
                                        <div>21-20-00</div>
                                    </div>
                                    <div class="w-col w-col-2">
                                        <div>100</div>
                                    </div>
                                    <div class="w-col w-col-1">
                                        <div>300</div>
                                    </div>
                                    <div class="w-col w-col-1">
                                        <div>50:00 m</div>
                                    </div>
                                </div>
                            </div>
                            <div class="div-block-27">
                                <div class="row-7 w-row">
                                    <div class="column-4 w-col w-col-3">
                                        <div class="track-details-wrapper">
                                            <img src="images/track-art_1track-art.jpg">
                                            <div class="song-name-artist">
                                                <div class="text-block-2">Adiapena</div>
                                                <div class="text-block-3">Kidi</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-col w-col-3">
                                        <div>
                                            <span class="station-name">Joy FM</span> -
                                            <span>99.7 </span>
                                            <span>Ghana</span>
                                        </div>
                                    </div>
                                    <div class="w-col w-col-2">
                                        <div>21-20-00</div>
                                    </div>
                                    <div class="w-col w-col-2">
                                        <div>100</div>
                                    </div>
                                    <div class="w-col w-col-1">
                                        <div>300</div>
                                    </div>
                                    <div class="w-col w-col-1">
                                        <div>50:00 m</div>
                                    </div>
                                </div>
                            </div>
                            <div class="div-block-27">
                                <div class="row-7 w-row">
                                    <div class="column-4 w-col w-col-3">
                                        <div class="track-details-wrapper">
                                            <img src="images/track-art_1track-art.jpg">
                                            <div class="song-name-artist">
                                                <div class="text-block-2">Adiapena</div>
                                                <div class="text-block-3">Kidi</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-col w-col-3">
                                        <div>
                                            <span class="station-name">Joy FM</span> -
                                            <span>99.7 </span>
                                            <span>Ghana</span>
                                        </div>
                                    </div>
                                    <div class="w-col w-col-2">
                                        <div>21-20-00</div>
                                    </div>
                                    <div class="w-col w-col-2">
                                        <div>100</div>
                                    </div>
                                    <div class="w-col w-col-1">
                                        <div>300</div>
                                    </div>
                                    <div class="w-col w-col-1">
                                        <div>50:00 m</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-w-tab="heat map" class="reports-tab-content w-tab-pane">
                            <div class="map w-widget w-widget-map" style="overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-err-container"><div class="gm-err-content"><div class="gm-err-icon"><img src="https://maps.gstatic.com/mapfiles/api-3/images/icon_error.png" draggable="false" style="user-select: none;"></div><div class="gm-err-title">Sorry! Something went wrong.</div><div class="gm-err-message">This page didn't load Google Maps correctly. See the JavaScript console for technical details.</div></div></div></div></div>
                        </div>
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