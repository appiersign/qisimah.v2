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
                        <form id="email-form" method="post" action="{{ route('reports.summary') }}" name="email-form" data-name="Email Form" class="plays-summary-report">
                            {{ csrf_field() }}
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
                    </div>
                </div>
                <div class="w-row">
                    <div class="w-col w-col-8 w-col-stack">
                        <div class="w-embed">
                            <div id="curve_chart" style="height: 500px"></div>
                        </div>
                    </div>
                    <div class="w-col w-col-4 w-col-stack">
                        <div class="w-embed">
                            <div id="donutchart" style="height: 500px;"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="maps-holder-summary">
                <h1 class="cards-heading">Country detections</h1>
                <div class="w-embed">
                    <div id="regions_div" style="height: 500px;"></div>
                </div>
            </div>
            <div class="div-block-122">
                <div class="w-row">
                    <div class="w-col w-col-6 w-col-stack">
                        {{--<h1 class="cards-heading">Top 5 Most played</h1>--}}
                        <div class="w-embed">
                            <div id="column_chart_material" style="height: 500px;"></div>
                        </div>
                    </div>
                    <div class="w-col w-col-6 w-col-stack">
                        {{--<h1 class="cards-heading">Top 5 Broadcasters</h1>--}}
                        <div class="w-embed">
                            <div id="barchart_values" style="height: 500px;"></div>
                        </div>
                    </div>
                </div>
            </div>

            {{--<div class="div-block-122">--}}
                {{--<div class="w-row">--}}
                    {{--<div class="w-col w-col-6 w-col-stack">--}}
                        {{--<h1 class="cards-heading">Social Report</h1>--}}
                        {{--<div class="social-report-table">--}}
                            {{--<table class="social-report-table table table-hover mb-0">--}}
                                {{--<thead>--}}
                                {{--<tr>--}}
                                    {{--<th style="width: 10%; text-align: center; font-size: 13px;">Channel</th>--}}
                                    {{--<th style="width: 40%;text-align: center;font-size: 13px;">New Fans</th>--}}
                                    {{--<th style="width: 25%;text-align: center;font-size: 13px;">Total Fans</th>--}}
                                    {{--<!-- <th style="width:25%">Up/Down</th> -->--}}
                                {{--</tr>--}}
                                {{--</thead>--}}
                                {{--<tbody id="top-5-broadcaster">--}}
                                {{--<tr>--}}
                                    {{--<td class="social-report-td">--}}
                                        {{--<img src="{{ asset('images/001-youtube.svg') }}" style="text-align: center;"--}}
                                             {{--class="social-report-logo">--}}
                                    {{--</td>--}}
                                    {{--<td class="social-report-td">234</td>--}}
                                    {{--<td class="social-report-td">21k</td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<td class="social-report-td">--}}
                                        {{--<img src="https://uploads-ssl.webflow.com/5ace5bf2286b145321f46e32/5ade2f6c4682eaa5b7e28353_036-facebook.svg"--}}
                                             {{--class="social-report-logo">--}}
                                    {{--</td>--}}
                                    {{--<td class="social-report-td">3.2k</td>--}}
                                    {{--<td class="social-report-td">44k</td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<td class="social-report-td">--}}
                                        {{--<img src="https://uploads-ssl.webflow.com/5ace5bf2286b145321f46e32/5ade301a4682ea0de0e283b8_008-twitter.svg"--}}
                                             {{--style="text-align: center;" class="social-report-logo">--}}
                                    {{--</td>--}}
                                    {{--<td class="social-report-td">123</td>--}}
                                    {{--<td class="social-report-td">2k</td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<td class="social-report-td">--}}
                                        {{--<img src="{{ asset('images/029-instagram.sv') }}g" style="text-align: center;"--}}
                                             {{--class="social-report-logo">--}}
                                    {{--</td>--}}
                                    {{--<td class="social-report-td">323</td>--}}
                                    {{--<td class="social-report-td">45k</td>--}}
                                {{--</tr>--}}
                                {{--</tbody>--}}
                            {{--</table>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="w-col w-col-6 w-col-stack">--}}
                        {{--<h1 class="cards-heading">Top TV Stations</h1>--}}
                        {{--<div>--}}
                            {{--<div class="w-embed">--}}
                                {{--<div id="top_tv_div" style="width: 100%; height: 500px;"></div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
@endsection

@section('custom-scripts')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

        var pathname = window.location.pathname.split('/');

        if (pathname.length === 8 && pathname[1] === 'reports' && pathname[2] === 'summary') {
            google.charts.load('current', {'packages':['corechart', 'bar']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

                $.get(window.location.pathname, function (response, status) {
                    let curve_chart_data = google.visualization.arrayToDataTable(response['plays']);
                    let curve_chart_options = {
                        title: 'Plays',
                        curveType: 'function',
                        legend: { position: 'bottom' },
                        colors:['#161036'],
                        pointSize: 7,
                    };
                    let curve_chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
                    curve_chart.draw(curve_chart_data, curve_chart_options);

                    let regional_data = google.visualization.arrayToDataTable(response['regional']);
                    let regional_options = {
                        title: 'Regional Plays',
                        pieHole: 0.4,
                        colors:['#161036', '#3266af', '#00afef', '#ffc300', '#eb2e6b'],
                    };
                    let chart = new google.visualization.PieChart(document.getElementById('donutchart'));
                    chart.draw(regional_data, regional_options);

                    let country_data = google.visualization.arrayToDataTable(response['countries']);
                    let country_options = {
                        colorAxis: {colors: ['#ece9f9', '#161036']}

                    };
                    let country_chart = new google.visualization.GeoChart(document.getElementById('regions_div'));
                    country_chart.draw(country_data, country_options);

                    // Column Chart
                    let column_data = google.visualization.arrayToDataTable(response['top_5']);
                    let column_options = {
                        chart: {
                            title: 'Top 5 Songs',
                            colors: ['#161036'],
                            // subtitle: 'Sales, Expenses, and Profit: 2014-2017',
                        }
                    };
                    let column_chart = new google.charts.Bar(document.getElementById('column_chart_material'));
                    column_chart.draw(column_data, google.charts.Bar.convertOptions(column_options));

                    // Top 5 Broadcasters
                    let broadcasters = response['broadcasters'];
                    broadcasters[0].push({ role: 'style' });
                    let bar_data = google.visualization.arrayToDataTable(broadcasters);
                    let bar_options = {
                        chart: {
                            title: 'Top 5 Broadcasters',
                            colors: ['#161036', '#3266af', '#ffc300', '#eb2e6b'],
                        }
                    };
                    let bar_chart = new google.charts.Bar(document.getElementById("barchart_values"));
                    bar_chart.draw(bar_data, bar_options);
                });
            }
        }

    </script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script>
        $('input[name="dates"]').daterangepicker();
    </script>
@endsection