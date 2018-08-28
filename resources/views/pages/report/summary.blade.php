@extends('layouts.dashboard')
@section('content')
    <div class="">
        <div class="inner-top-wrapper">
            <div class="div-block-16">
                <h1 class="heading-2">Summay</h1>
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

            @include('components.guest.success-message')

            <div class="div-block-122">
                <div class="div-block-124">
                    <div class="form-block-5 w-form">
                        <form id="email-form" name="email-form" data-name="Email Form" class="plays-summary-report">
                            <select id="Artist" name="Artist" data-name="Artist"
                                    class="select-field-summary w-select">
                                <option value="Select Song" disabled="" selected="">Select Song</option>
                                <option value="All songs">All Songs</option>
                                <option value="Adiepena">Adiepena</option>
                                <option value="Wish me well">Wish me well</option>
                                <option value="Odo">Odo</option>
                            </select>
                            <select id="Song" name="Song" data-name="Song" class="select-field-summary w-select">
                                <option value="Select Country" disabled="" selected="">Select Country</option>
                                <option value="All">All Countries</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="South Africa">South Africa</option>
                            </select>
                            <select id="Artists" name="Artist" data-name="Artist"
                                    class="select-field-summary w-select">
                                <option value="Select Artist" disabled="" selected="">Select Artist</option>
                                <option value="All">Al Artists</option>
                                <option value="Kuami Eugene">Kuami Eugene</option>
                                <option value="Mz Vee">Mz Vee</option>
                                <option value="Kidi">Kidi</option>
                                <option value="King Promise">King Promise</option>
                            </select>
                            <div id="reportrange" name="field-2" data-name="Field 2"
                                 class="select-field-summary w-select daterange-select">
                                <i class="fa fa-calendar"></i>
                                <span class="daterange-text">July 29, 2018 - August 27, 2018</span>
                                <i class="fa fa-caret-down"></i>
                            </div>
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
                <div class="w-row">
                    <div class="w-col w-col-8 w-col-stack">
                        <h1 class="cards-heading">Plays</h1>
                        <div class="w-embed">
                            <div id="linechart"
                                 style="width: 100%; height: 500px; position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                <svg height="500" version="1.1" width="746" xmlns="http://www.w3.org/2000/svg"
                                     style="overflow: hidden; position: relative; top: -0.6px;">
                                    <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with
                                        Raphaël 2.1.0
                                    </desc>
                                    <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs>
                                    <text x="25.84375" y="461.40625" text-anchor="end" font="10px &quot;Arial&quot;"
                                          stroke="none" fill="#888888"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;"
                                          font-size="12px" font-family="sans-serif" font-weight="normal">
                                        <tspan dy="4.40625" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                            0
                                        </tspan>
                                    </text>
                                    <path fill="none" stroke="#aaaaaa" d="M38.34375,461.40625H721.125"
                                          stroke-width="0.5"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                    <text x="25.84375" y="352.3046875" text-anchor="end"
                                          font="10px &quot;Arial&quot;" stroke="none" fill="#888888"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;"
                                          font-size="12px" font-family="sans-serif" font-weight="normal">
                                        <tspan dy="4.4140625"
                                               style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">5
                                        </tspan>
                                    </text>
                                    <path fill="none" stroke="#aaaaaa" d="M38.34375,352.3046875H721.125"
                                          stroke-width="0.5"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                    <text x="25.84375" y="243.203125" text-anchor="end"
                                          font="10px &quot;Arial&quot;" stroke="none" fill="#888888"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;"
                                          font-size="12px" font-family="sans-serif" font-weight="normal">
                                        <tspan dy="4.40625" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                            10
                                        </tspan>
                                    </text>
                                    <path fill="none" stroke="#aaaaaa" d="M38.34375,243.203125H721.125"
                                          stroke-width="0.5"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                    <text x="25.84375" y="134.1015625" text-anchor="end"
                                          font="10px &quot;Arial&quot;" stroke="none" fill="#888888"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;"
                                          font-size="12px" font-family="sans-serif" font-weight="normal">
                                        <tspan dy="4.4140625"
                                               style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">15
                                        </tspan>
                                    </text>
                                    <path fill="none" stroke="#aaaaaa" d="M38.34375,134.1015625H721.125"
                                          stroke-width="0.5"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                    <text x="25.84375" y="25" text-anchor="end" font="10px &quot;Arial&quot;"
                                          stroke="none" fill="#888888"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;"
                                          font-size="12px" font-family="sans-serif" font-weight="normal">
                                        <tspan dy="4.40625" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                            20
                                        </tspan>
                                    </text>
                                    <path fill="none" stroke="#aaaaaa" d="M38.34375,25H721.125" stroke-width="0.5"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                    <text x="721.125" y="473.90625" text-anchor="middle"
                                          font="10px &quot;Arial&quot;" stroke="none" fill="#888888"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;"
                                          font-size="12px" font-family="sans-serif" font-weight="normal"
                                          transform="matrix(1,0,0,1,0,6.7969)">
                                        <tspan dy="4.40625" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                            2012
                                        </tspan>
                                    </text>
                                    <text x="550.546522073922" y="473.90625" text-anchor="middle"
                                          font="10px &quot;Arial&quot;" stroke="none" fill="#888888"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;"
                                          font-size="12px" font-family="sans-serif" font-weight="normal"
                                          transform="matrix(1,0,0,1,0,6.7969)">
                                        <tspan dy="4.40625" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                            2011
                                        </tspan>
                                    </text>
                                    <text x="379.96804414784395" y="473.90625" text-anchor="middle"
                                          font="10px &quot;Arial&quot;" stroke="none" fill="#888888"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;"
                                          font-size="12px" font-family="sans-serif" font-weight="normal"
                                          transform="matrix(1,0,0,1,0,6.7969)">
                                        <tspan dy="4.40625" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                            2010
                                        </tspan>
                                    </text>
                                    <text x="209.3895662217659" y="473.90625" text-anchor="middle"
                                          font="10px &quot;Arial&quot;" stroke="none" fill="#888888"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;"
                                          font-size="12px" font-family="sans-serif" font-weight="normal"
                                          transform="matrix(1,0,0,1,0,6.7969)">
                                        <tspan dy="4.40625" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                            2009
                                        </tspan>
                                    </text>
                                    <text x="38.34375" y="473.90625" text-anchor="middle"
                                          font="10px &quot;Arial&quot;" stroke="none" fill="#888888"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;"
                                          font-size="12px" font-family="sans-serif" font-weight="normal"
                                          transform="matrix(1,0,0,1,0,6.7969)">
                                        <tspan dy="4.40625" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                            2008
                                        </tspan>
                                    </text>
                                    <path fill="none" stroke="#161036"
                                          d="M38.34375,25C81.10520405544148,79.55078125,166.62811216632443,232.2780437756498,209.3895662217659,243.203125C252.0341857032854,254.0983562756498,337.32342466632446,109.5537109375,379.96804414784395,112.28125C422.61266362936345,115.0087890625,507.9019025924025,275.93359375,550.546522073922,265.0234375C593.1911415554415,254.11328125,678.4803805184805,85.005859375,721.125,25"
                                          stroke-width="3"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                    <circle cx="38.34375" cy="25" r="7" fill="#161036" stroke="#ffffff"
                                            stroke-width="1"
                                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <circle cx="209.3895662217659" cy="243.203125" r="4" fill="#161036"
                                            stroke="#ffffff" stroke-width="1"
                                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <circle cx="379.96804414784395" cy="112.28125" r="4" fill="#161036"
                                            stroke="#ffffff" stroke-width="1"
                                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <circle cx="550.546522073922" cy="265.0234375" r="4" fill="#161036"
                                            stroke="#ffffff" stroke-width="1"
                                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <circle cx="721.125" cy="25" r="4" fill="#161036" stroke="#ffffff"
                                            stroke-width="1"
                                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                </svg>
                                <div class="morris-hover morris-default-style" style="left: 3.43125px; top: 35px;">
                                    <div class="morris-hover-row-label">2008</div>
                                    <div class="morris-hover-point" style="color: #161036">
                                        Value:
                                        20
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-col w-col-4 w-col-stack">
                        <h1 class="cards-heading">Regional plays</h1>
                        <div class="w-embed">
                            <div id="donutchart" style="width: 100%; height: 250px;">
                                <svg height="250" version="1.1" width="363" xmlns="http://www.w3.org/2000/svg"
                                     style="overflow: hidden; position: relative; left: -0.125px; top: -0.6px;">
                                    <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with
                                        Raphaël 2.1.0
                                    </desc>
                                    <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs>
                                    <path fill="none" stroke="#161036"
                                          d="M181.5315,201.66666666666669A76.66666666666667,76.66666666666667,0,0,0,213.416008598524,55.27801000252197"
                                          stroke-width="2" opacity="1"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path>
                                    <path fill="#161036" stroke="#ffffff"
                                          d="M181.5315,204.66666666666669A79.66666666666667,79.66666666666667,0,0,0,214.66366328281407,52.54975822001195L229.358262897786,20.41701500378295A115,115,0,0,1,181.5315,240Z"
                                          stroke-width="3"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                    <path fill="none" stroke="#3266af"
                                          d="M213.416008598524,55.27801000252197A76.66666666666667,76.66666666666667,0,0,0,118.72542412252699,81.03211841979555"
                                          stroke-width="2" opacity="0"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path>
                                    <path fill="#3266af" stroke="#ffffff"
                                          d="M214.66366328281407,52.54975822001195A79.66666666666667,79.66666666666667,0,0,0,116.26779506645195,79.3116360970919L91.4184346105822,61.91564816753275A110,110,0,0,1,227.2788384239692,24.964101307966303Z"
                                          stroke-width="3"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                    <path fill="none" stroke="#00afef"
                                          d="M118.72542412252699,81.03211841979555A76.66666666666667,76.66666666666667,0,0,0,112.40577872363286,158.15738885678098"
                                          stroke-width="2" opacity="0"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path>
                                    <path fill="#00afef" stroke="#ffffff"
                                          d="M116.26779506645195,79.3116360970919A79.66666666666667,79.66666666666667,0,0,0,109.7008591954272,159.45485189900285L82.35111729912542,172.57364488146837A110,110,0,0,1,91.4184346105822,61.91564816753275Z"
                                          stroke-width="3"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                    <path fill="none" stroke="#ffc300"
                                          d="M112.40577872363286,158.15738885678098A76.66666666666667,76.66666666666667,0,0,0,151.92597297700945,195.71980307854903"
                                          stroke-width="2" opacity="0"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path>
                                    <path fill="#ffc300" stroke="#ffffff"
                                          d="M109.7008591954272,159.45485189900285A79.66666666666667,79.66666666666667,0,0,0,150.76749583263157,198.48709972075312L139.05400470614399,226.46754354748342A110,110,0,0,1,82.35111729912542,172.57364488146837Z"
                                          stroke-width="3"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                    <path fill="none" stroke="#eb2e6b"
                                          d="M151.92597297700945,195.71980307854903A76.66666666666667,76.66666666666667,0,0,0,181.5074144567186,201.66666288331834"
                                          stroke-width="2" opacity="0"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path>
                                    <path fill="#eb2e6b" stroke="#ffffff"
                                          d="M150.76749583263157,198.48709972075312A79.66666666666667,79.66666666666667,0,0,0,181.50647197893804,204.6666627352743L181.49694248137888,234.99999457171762A110,110,0,0,1,139.05400470614399,226.46754354748342Z"
                                          stroke-width="3"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                    <text x="181.5315" y="115" text-anchor="middle" font="10px &quot;Arial&quot;"
                                          stroke="none" fill="#000000"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 800 15px Arial;"
                                          font-size="15px" font-weight="800"
                                          transform="matrix(1.185,0,0,1.185,-33.6213,-23.2757)"
                                          stroke-width="0.8438632246376813">
                                        <tspan dy="6.015625" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                            Greater Accra
                                        </tspan>
                                    </text>
                                    <text x="181.5315" y="135" text-anchor="middle" font="10px &quot;Arial&quot;"
                                          stroke="none" fill="#000000"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 14px Arial;"
                                          font-size="14px" transform="matrix(1.5972,0,0,1.5972,-108.2325,-75.8472)"
                                          stroke-width="0.6260869565217391">
                                        <tspan dy="4.8125" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                            40
                                        </tspan>
                                    </text>
                                </svg>
                            </div>
                            <div class="regional-plays-table">
                                <table class="table table-hover mb-0">
                                    <thead>
                                    <tr>
                                        <th style="width:10%">#</th>
                                        <th style="width:40%">Region</th>
                                        <th style="width:25%">Total plays</th>
                                        <!-- <th style="width:25%">Up/Down</th> -->
                                    </tr>
                                    </thead>
                                    <tbody id="top-5-broadcaster">
                                    <tr>
                                        <td>1</td>
                                        <td>Greater Accra</td>
                                        <td>218957</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Ashanti</td>
                                        <td>32601</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Western</td>
                                        <td>20803</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Brong Ahafo</td>
                                        <td>20254</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Eastern</td>
                                        <td>7611</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="maps-holder-summary">
                <h1 class="cards-heading">Country detections</h1>
                <div class="w-embed">
                    <div id="regions_div" style="width: 100%; height: 500px;"></div>
                </div>
            </div>
            <div class="div-block-122">
                <div class="w-row">
                    <div class="w-col w-col-6 w-col-stack">
                        <h1 class="cards-heading">Top 5 Most played /&nbsp; Quarter</h1>
                        <div class="w-embed">
                            <div id="columnchart_material" style="width: 100%px; height: 500px;"></div>
                        </div>
                    </div>
                    <div class="w-col w-col-6 w-col-stack">
                        <h1 class="cards-heading">Top 5 Radio Stations</h1>
                        <div class="w-embed">
                            <div id="top_x_div" style="width: 100%; height: 500px;"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="div-block-122">
                <div class="w-row">
                    <div class="w-col w-col-6 w-col-stack">
                        <h1 class="cards-heading">Social Report</h1>
                        <div class="social-report-table">
                            <table class="social-report-table table table-hover mb-0">
                                <thead>
                                <tr>
                                    <th style="width: 10%; text-align: center; font-size: 13px;">Channel</th>
                                    <th style="width: 40%;text-align: center;font-size: 13px;">New Fans</th>
                                    <th style="width: 25%;text-align: center;font-size: 13px;">Total Fans</th>
                                    <!-- <th style="width:25%">Up/Down</th> -->
                                </tr>
                                </thead>
                                <tbody id="top-5-broadcaster">
                                <tr>
                                    <td class="social-report-td">
                                        <img src="{{ asset('images/001-youtube.svg') }}" style="text-align: center;"
                                             class="social-report-logo">
                                    </td>
                                    <td class="social-report-td">234</td>
                                    <td class="social-report-td">21k</td>
                                </tr>
                                <tr>
                                    <td class="social-report-td">
                                        <img src="https://uploads-ssl.webflow.com/5ace5bf2286b145321f46e32/5ade2f6c4682eaa5b7e28353_036-facebook.svg"
                                             class="social-report-logo">
                                    </td>
                                    <td class="social-report-td">3.2k</td>
                                    <td class="social-report-td">44k</td>
                                </tr>
                                <tr>
                                    <td class="social-report-td">
                                        <img src="https://uploads-ssl.webflow.com/5ace5bf2286b145321f46e32/5ade301a4682ea0de0e283b8_008-twitter.svg"
                                             style="text-align: center;" class="social-report-logo">
                                    </td>
                                    <td class="social-report-td">123</td>
                                    <td class="social-report-td">2k</td>
                                </tr>
                                <tr>
                                    <td class="social-report-td">
                                        <img src="{{ asset('images/029-instagram.sv') }}g" style="text-align: center;"
                                             class="social-report-logo">
                                    </td>
                                    <td class="social-report-td">323</td>
                                    <td class="social-report-td">45k</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="w-col w-col-6 w-col-stack">
                        <h1 class="cards-heading">Top TV Stations</h1>
                        <div>
                            <div class="w-embed">
                                <div id="top_tv_div" style="width: 100%; height: 500px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection