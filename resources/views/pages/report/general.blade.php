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
                        <div class="text-block-23">{{ $plays->total() }}</div>
                        <div class="number-card-divider-dark"></div>
                        <div class="number-card-cedis">Total number fetched</div>
                    </div>
                    <div class="w-col w-col-4">
                        <div class="text-block-23">{{ $broadcaster_count }}</div>
                        <div class="number-card-divider-dark"></div>
                        <div class="number-card-cedis">Total number of Broadcasters</div>
                    </div>
                    <div class="w-col w-col-4">
                        <div class="text-block-23">{{ $region_count }}</div>
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
                            <select id="general-country" name="country" class="select-field w-select">
                                <option value="" disabled selected>Country</option>
                                <option value="all">All</option>
                                @if(isset($countries))
                                    @foreach($countries as $country)
                                        <option value="{{ $country->qisimah_id }}">{{ $country->name }}</option>
                                    @endforeach
                                @endif
                            </select>

                            <select id="general-broadcaster" name="broadcaster" class="select-field w-select">
                                <option value="">Broadcaster</option>
                                <option value="all">All</option>
                                @if(isset($broadcasters) && count($broadcasters))
                                    @foreach($broadcasters as $broadcaster)
                                        <option value="{{ $broadcaster->qisimah_id }}">{{ $broadcaster->name. ' - ' .$broadcaster->frequency }}</option>
                                    @endforeach
                                @endif
                            </select>

                            <select id="summary-artist" name="artist" class="select-field w-select">
                                <option value="" disabled selected>Artist</option>
                                <option value="all">All</option>
                                @if(isset($artists))
                                    @foreach($artists as $artist)
                                        <option value="{{ $artist->qisimah_id }}">{{ $artist->nick_name }}</option>
                                    @endforeach
                                @endif
                            </select>

                            <select id="summary-song" name="song" class="select-field w-select">
                                <option value="Select Artist" disabled selected>Song</option>
                                <option value="all">All</option>
                                @if(isset($songs) && count($songs))
                                    @foreach($songs as $song)
                                        <option value="{{ $song->qisimah_id }}">{{ $song->title }}</option>
                                    @endforeach
                                @endif
                            </select>
                            <input id="reportrange" name="dates" data-name="Field 2"
                                   class="select-field w-select daterange-select">

                            <input id="get-general-report-button" type="submit" value="Generate" data-wait="Please wait..."
                                   class="submit-button-4 w-button">
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
                        <a id="heat-map-tab" data-w-tab="heat map" class="reports-tab-link w-inline-block w-tab-link">
                            <div>Heat Map</div>
                        </a>
                    </div>
                    <div class="w-tab-content">
                        <div data-w-tab="Logs" class="reports-tab-content w-tab-pane w--tab-active">
                            <div class="section-heading w-hidden-medium w-hidden-small w-hidden-tiny w-row">
                                <div class="column-42 w-col w-col-3">
                                    <div class="heading-text">SONG</div>
                                </div>
                                <div class="w-col w-col-4">
                                    <div class="heading-text">RADIO STATION</div>
                                </div>
                                <div class="w-col w-col-3">
                                    <div class="heading-text">TIME PLAYED</div>
                                </div>
                                <div class="column-2 w-col w-col-1">
                                    <div class="heading-text">DURATION</div>
                                </div>
                            </div>
                            @if(isset($plays) && count($plays))
                                @foreach($plays as $play)
                                    <div class="div-block-27">
                                        <div class="row-7 w-row">
                                            <div class="column-4 w-col w-col-3">
                                                <div class="track-details-wrapper">
                                                    <div class="song-name-artist">
                                                        <div class="text-block-2">{{ $play->song->title }}</div>
                                                        <div class="text-block-3">{{ $play->song->artist->nick_name }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w-col w-col-4">
                                                <div>
                                                    <span class="station-name">{{ $play->broadcaster->name }}</span> -
                                                    <span>{{ $play->broadcaster->frequency }} </span>
                                                    <span>{{ $play->broadcaster->country->name }}</span>
                                                </div>
                                            </div>
                                            <div class="w-col w-col-3">
                                                <div>{{ $play->played_at->toDateTimeString() }}</div>
                                            </div>
                                            <div class="w-col w-col-2">
                                                <div>{{ $play->duration }}</div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            {{ $plays->links() }}
                        </div>
                        <div data-w-tab="heat map" class="reports-tab-content w-tab-pane">
                            <div id="chart_div" class="heat-map" style="border-radius: 5px; position: relative;"></div>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpHCatZelD9NgEDQDdTPdP3anWsZPPAF8&libraries=visualization"
            async defer></script>
    <script>
        $('#heat-map-tab').on('click', function (e) {
            $.get(window.location.href, function (data, status) {
                let heatmapData = [];

                data.map(function (obj) {
                    heatmapData.push({location: new google.maps.LatLng(obj[0], obj[1]), weight: obj[2]});
                });

                let map = new google.maps.Map(document.getElementById('chart_div'), {
                    center: {lat: 7.8984766, lng: -3.2751248},
                    zoom: 6,
                    styles: [
                        {
                            "elementType": "labels",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "administrative.land_parcel",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "administrative.neighborhood",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "landscape.natural.landcover",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "labels.text",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "poi.business",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "poi.park",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "road",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "road",
                            "elementType": "labels.icon",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "transit",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        }
                    ]
                });

                let heatmap = new google.maps.visualization.HeatmapLayer({
                    data: heatmapData
                });
                heatmap.setMap(map);
            });
        });
    </script>
@endsection