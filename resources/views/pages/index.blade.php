@extends('layouts.dashboard')
@section('content')
    <div class="div-block-2">
        <div data-duration-in="300" data-duration-out="100" class="dash-tabs-main w-tabs">
            @include('components.dashboard.dashboard-tabs')
            <div class="w-tab-content">
                <div data-w-tab="radio" class="dash-tab-pane w-tab-pane">
                    <div class="tabs-top-wrapper">
                        <div class="div-block-16">
                            <h1 class="heading-2">Radio</h1>
                            <div><a href="#" class="upload-song-button w-inline-block"
                                    data-ix="upload-song-modal-trigger"><img
                                            src="https://uploads-ssl.webflow.com/5ace5bf2286b145321f46e32/5ad49a1a0e93f33a9edcb8eb_upload-to-the-cloud.svg"
                                            width="30">
                                    <div class="div-block-18">
                                        <div class="text-block-6">Upload song</div>
                                    </div>
                                </a></div>
                        </div>
                        <div class="w-row">
                            <div class="column-5 w-col w-col-3 w-col-medium-6 w-col-small-6">
                                <div class="div-block-5">
                                    <h1 class="number-card-number">240k</h1>
                                    <div class="additional-text">Plays</div>
                                    <div class="number-card-divider"></div>
                                    <div class="number-card-dollars">Total Plays Today</div>
                                </div>
                            </div>
                            <div class="column-31 w-col w-col-3 w-col-medium-6 w-col-small-6">
                                <div class="div-block-5">
                                    <h1 class="number-card-number">2544</h1>
                                    <div class="additional-text">CCTV</div>
                                    <div class="number-card-divider"></div>
                                    <div class="number-card-dollars">Most Played</div>
                                </div>
                            </div>
                            <div class="column-30 w-col w-col-3 w-col-medium-6 w-col-small-6">
                                <div class="div-block-5">
                                    <h1 class="number-card-number">544</h1>
                                    <div class="additional-text">Duii</div>
                                    <div class="number-card-divider"></div>
                                    <div class="number-card-dollars">All-time best</div>
                                </div>
                            </div>
                            <div class="column-6 w-col w-col-3 w-col-medium-6 w-col-small-6">
                                <div class="div-block-5">
                                    <h1 class="number-card-number">541</h1>
                                    <div class="additional-text">Yfm 107.9</div>
                                    <div class="number-card-divider"></div>
                                    <div class="number-card-dollars">Top Broadcasters</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qisimah-container-main dashboard-version">
                        <h1 class="inner-page-sub">Live Radio Detections</h1>
                        <div class="section-heading w-hidden-medium w-hidden-small w-hidden-tiny w-row">
                            <div class="column-42 w-col w-col-3">
                                <div class="heading-text">SONG</div>
                            </div>
                            <div class="w-col w-col-3">
                                <div class="heading-text">RADIO STATION</div>
                            </div>
                            <div class="w-col w-col-2">
                                <div class="heading-text">TIME PLAYED</div>
                            </div>
                            <div class="column-2 w-col w-col-2">
                                <div class="heading-text">PLAYS TODAY</div>
                            </div>
                            <div class="column-2 w-col w-col-1">
                                <div class="heading-text">THIS WEEK</div>
                            </div>
                            <div class="column-2 w-col w-col-1">
                                <div class="heading-text">DURATION</div>
                            </div>
                        </div>
                        <div class="div-block-4">
                            <div class="row w-row">
                                <div class="column-2 w-col w-col-3 w-col-small-4 w-col-medium-3 w-col-tiny-tiny-stack">
                                    <div class="heading-text w-hidden-main">SONG</div>
                                    <div class="track-details-wrapper"><img src="images/track-art_1track-art.jpg"
                                                                            class="image-2">
                                        <div class="song-name-artist">
                                            <div class="text-block-2">Adiapena</div>
                                            <div class="text-block-3">Kidi</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column-52 w-col w-col-3 w-col-small-4 w-col-medium-3 w-col-tiny-tiny-stack">
                                    <div class="heading-text w-hidden-main">BROADCASTER</div>
                                    <div><span class="station-name">Joy FM</span> - <span>99.7 </span><span>Ghana</span>
                                    </div>
                                </div>
                                <div class="column-53 w-col w-col-2 w-col-small-4 w-col-medium-2 w-col-tiny-tiny-stack">
                                    <div class="heading-text w-hidden-main">TIME PLAYED</div>
                                    <div>21-20-00</div>
                                </div>
                                <div class="column-54 w-col w-col-2 w-col-small-4 w-col-medium-2 w-col-tiny-tiny-stack">
                                    <div class="heading-text w-hidden-main">PLAYS TODAY</div>
                                    <div>100</div>
                                </div>
                                <div class="column-55 w-col w-col-1 w-col-small-4 w-col-medium-1 w-col-tiny-tiny-stack">
                                    <div class="heading-text w-hidden-main">THIS WEEK</div>
                                    <div>300</div>
                                </div>
                                <div class="column-56 w-col w-col-1 w-col-small-4 w-col-medium-1 w-col-tiny-tiny-stack">
                                    <div class="heading-text w-hidden-main">DURATION</div>
                                    <div>50:00 m</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-w-tab="Tv" class="dash-tab-pane w-tab-pane w--tab-active">
                    <div class="tabs-top-wrapper tv-monitoring-tab">
                        <div class="div-block-16">
                            <h1 class="heading-2">Television</h1><a href="#" class="upload-song-button w-inline-block"
                                                                    data-ix="upload-song-modal-trigger"><img
                                        src="https://uploads-ssl.webflow.com/5ace5bf2286b145321f46e32/5ad49a1a0e93f33a9edcb8eb_upload-to-the-cloud.svg"
                                        width="30">
                                <div class="div-block-18">
                                    <div class="text-block-6">Upload song</div>
                                </div>
                            </a></div>
                        <div class="w-row">
                            <div class="column-2-copy w-col w-col-3 w-col-medium-6 w-col-small-6">
                                <div class="div-block-5">
                                    <h1 class="number-card-number">214</h1>
                                    <div class="additional-text">Plays</div>
                                    <div class="number-card-divider"></div>
                                    <div class="number-card-dollars">Total Plays Today</div>
                                </div>
                            </div>
                            <div class="column-32 w-col w-col-3 w-col-medium-6 w-col-small-6">
                                <div class="div-block-5">
                                    <h1 class="number-card-number">24</h1>
                                    <div class="additional-text">Adiepena</div>
                                    <div class="number-card-divider"></div>
                                    <div class="number-card-dollars">Most Played</div>
                                </div>
                            </div>
                            <div class="column-36 w-col w-col-3 w-col-medium-6 w-col-small-6">
                                <div class="div-block-5">
                                    <h1 class="number-card-number">54</h1>
                                    <div class="additional-text">Gringo</div>
                                    <div class="number-card-divider"></div>
                                    <div class="number-card-dollars">All-time best</div>
                                </div>
                            </div>
                            <div class="column-11 w-col w-col-3 w-col-medium-6 w-col-small-6">
                                <div class="div-block-5">
                                    <h1 class="number-card-number">545</h1>
                                    <div class="additional-text">Live fm 91.9</div>
                                    <div class="number-card-divider"></div>
                                    <div class="number-card-dollars">Top Broadcasters</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qisimah-container-main dashboard-version">
                        <h1 class="inner-page-sub">Live TV detections</h1>
                        <div class="section-heading w-row">
                            <div class="w-col w-col-3">
                                <div class="heading-text">SONG</div>
                            </div>
                            <div class="w-col w-col-3">
                                <div class="heading-text">TV STATION</div>
                            </div>
                            <div class="w-col w-col-2">
                                <div class="heading-text">TIME DETECTED</div>
                            </div>
                            <div class="column-2 w-col w-col-1">
                                <div class="heading-text">PLAYS TODAY</div>
                            </div>
                            <div class="w-col w-col-2">
                                <div class="heading-text">THIS WEEEK</div>
                            </div>
                            <div class="w-col w-col-1">
                                <div class="heading-text">DOWNLOADS</div>
                            </div>
                        </div>
                        <div class="div-block-4">
                            <div class="row w-row">
                                <div class="column-2 w-col w-col-3">
                                    <div class="heading-text w-hidden-main">SONG</div>
                                    <div class="track-details-wrapper"><img src="images/track-art_1track-art.jpg"
                                                                            class="image-2">
                                        <div class="song-name-artist">
                                            <div class="text-block-2">Adiapena</div>
                                            <div class="text-block-3">Kidi</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column-52 w-col w-col-3">
                                    <div class="heading-text w-hidden-main">BROADCASTER</div>
                                    <div><span class="station-name">Joy FM</span> - <span>99.7 </span><span>Ghana</span>
                                    </div>
                                </div>
                                <div class="column-53 w-col w-col-2">
                                    <div class="heading-text w-hidden-main">TIME PLAYED</div>
                                    <div>21-20-00</div>
                                </div>
                                <div class="column-54 w-col w-col-1">
                                    <div class="heading-text w-hidden-main">PLAYS TODAY</div>
                                    <div>100</div>
                                </div>
                                <div class="column-55 w-col w-col-2">
                                    <div class="heading-text w-hidden-main">THIS WEEK</div>
                                    <div>300</div>
                                </div>
                                <div class="column-56 w-col w-col-1">
                                    <div class="heading-text w-hidden-main">DURATION</div>
                                    <div>50:00 m</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-w-tab="Streams" class="dash-tab-pane w-tab-pane">
                    <div class="tabs-top-wrapper streams-monitoring-tab">
                        <div class="div-block-16">
                            <h1 class="heading-2">Streams</h1><a href="#" class="upload-song-button w-inline-block"
                                                                 data-ix="upload-song-modal-trigger"><img
                                        src="https://uploads-ssl.webflow.com/5ace5bf2286b145321f46e32/5ad49a1a0e93f33a9edcb8eb_upload-to-the-cloud.svg"
                                        width="30">
                                <div class="div-block-18">
                                    <div class="text-block-6">Upload song</div>
                                </div>
                            </a></div>
                        <div class="w-row">
                            <div class="column-2-copy w-col w-col-3 w-col-medium-6 w-col-small-6">
                                <div class="div-block-5">
                                    <h1 class="number-card-number">541</h1>
                                    <div class="additional-text">SoundCloud</div>
                                    <div class="number-card-divider"></div>
                                    <div class="number-card-dollars">Streams Today</div>
                                </div>
                            </div>
                            <div class="column-32 w-col w-col-3 w-col-medium-6 w-col-small-6">
                                <div class="div-block-5">
                                    <h1 class="number-card-number">244</h1>
                                    <div class="additional-text">Deezer</div>
                                    <div class="number-card-divider"></div>
                                    <div class="number-card-dollars">Streams Today</div>
                                </div>
                            </div>
                            <div class="column-36 w-col w-col-3 w-col-medium-6 w-col-small-6">
                                <div class="div-block-5">
                                    <h1 class="number-card-number">145</h1>
                                    <div class="additional-text">Spotify</div>
                                    <div class="number-card-divider"></div>
                                    <div class="number-card-dollars">Streams Today</div>
                                </div>
                            </div>
                            <div class="column-11 w-col w-col-3 w-col-medium-6 w-col-small-6">
                                <div class="div-block-5">
                                    <h1 class="number-card-number">547</h1>
                                    <div class="additional-text">Google Play Music</div>
                                    <div class="number-card-divider"></div>
                                    <div class="number-card-dollars">Streams Today</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qisimah-container-main dashboard-version">
                        <h1 class="inner-page-sub">Most Streamed Songs</h1>
                        <div class="div-block-149 w-hidden-main w-hidden-medium w-hidden-small w-hidden-tiny">
                            <div class="div-block-150"></div>
                            <div class="div-block-151"></div>
                            <div class="div-block-152"></div>
                            <div class="div-block-154"></div>
                            <div class="div-block-153"></div>
                        </div>
                        <div class="div-block-149 w-hidden-small w-hidden-tiny">
                            <div class="div-block-150">
                                <div class="heading-text">SONG</div>
                            </div>
                            <div class="div-block-151">
                                <div class="heading-text">SOURCE</div>
                            </div>
                            <div class="div-block-152">
                                <div class="heading-text">STREAMS FOR DAY</div>
                            </div>
                            <div class="div-block-154">
                                <div class="heading-text">CHART RANK</div>
                            </div>
                            <div class="div-block-153"></div>
                        </div>
                        <div class="streams-wrapper" data-ix="showextra">
                            <div class="div-block-155">
                                <div class="div-block-144">
                                    <div class="heading-text w-hidden-main w-hidden-medium">SONG</div>
                                    <div class="track-details-wrapper ss"><img src="images/track-art_1track-art.jpg"
                                                                               width="50" class="image-2">
                                        <div class="song-name-artist">
                                            <div class="text-block-2">Adiapena</div>
                                            <div class="text-block-3">Kidi</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="div-block-145">
                                    <div class="heading-text w-hidden-main w-hidden-medium">SOURCE</div>
                                    <div><strong>SoundCloud</strong></div>
                                </div>
                                <div class="div-block-146">
                                    <div class="heading-text w-hidden-main w-hidden-medium">STREAMS FOR DAY</div>
                                    <div>3445</div>
                                </div>
                                <div class="div-block-148">
                                    <div class="heading-text w-hidden-main w-hidden-medium">DOWNLOADS</div>
                                    <div>12</div>
                                </div>
                                <div class="div-block-147">
                                    <div class="see-more-extra"><strong>SEE MORE</strong></div>
                                    <div class="close-see-extra"><strong class="bold-text-6">CLOSE</strong></div>
                                </div>
                            </div>
                            <div class="extra">
                                <div class="div-block-155">
                                    <div class="div-block-144">
                                        <div class="heading-text w-hidden-main w-hidden-medium">SONG</div>
                                        <div class="track-details-wrapper ss"><img src="images/track-art_1track-art.jpg"
                                                                                   width="50" class="image-2">
                                            <div class="song-name-artist">
                                                <div class="text-block-2">Adiapena</div>
                                                <div class="text-block-3">Kidi</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div-block-145">
                                        <div class="heading-text w-hidden-main w-hidden-medium">SOURCE</div>
                                        <div><strong>SoundCloud</strong></div>
                                    </div>
                                    <div class="div-block-146">
                                        <div class="heading-text w-hidden-main w-hidden-medium">STREAMS FOR DAY</div>
                                        <div>10:00 am</div>
                                    </div>
                                    <div class="div-block-148">
                                        <div class="heading-text w-hidden-main w-hidden-medium">DOWNLOADS</div>
                                        <div>300</div>
                                    </div>
                                    <div class="div-block-147">
                                        <div class="see-more-extra"><strong>SEE MORE</strong></div>
                                        <div class="close-see-extra"><strong class="bold-text-6">CLOSE</strong></div>
                                    </div>
                                </div>
                                <div class="div-block-155">
                                    <div class="div-block-144">
                                        <div class="heading-text w-hidden-main w-hidden-medium">SONG</div>
                                        <div class="track-details-wrapper ss"><img src="images/track-art_1track-art.jpg"
                                                                                   width="50" class="image-2">
                                            <div class="song-name-artist">
                                                <div class="text-block-2">Adiapena</div>
                                                <div class="text-block-3">Kidi</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div-block-145">
                                        <div class="heading-text w-hidden-main w-hidden-medium">SOURCE</div>
                                        <div><strong>SoundCloud</strong></div>
                                    </div>
                                    <div class="div-block-146">
                                        <div class="heading-text w-hidden-main w-hidden-medium">STREAMS FOR DAY</div>
                                        <div>10:00 am</div>
                                    </div>
                                    <div class="div-block-148">
                                        <div class="heading-text w-hidden-main w-hidden-medium">DOWNLOADS</div>
                                        <div>300</div>
                                    </div>
                                    <div class="div-block-147">
                                        <div class="see-more-extra"><strong>SEE MORE</strong></div>
                                        <div class="close-see-extra"><strong class="bold-text-6">CLOSE</strong></div>
                                    </div>
                                </div>
                                <div class="div-block-155">
                                    <div class="div-block-144">
                                        <div class="heading-text w-hidden-main w-hidden-medium">SONG</div>
                                        <div class="track-details-wrapper ss"><img src="images/track-art_1track-art.jpg"
                                                                                   width="50" class="image-2">
                                            <div class="song-name-artist">
                                                <div class="text-block-2">Adiapena</div>
                                                <div class="text-block-3">Kidi</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div-block-145">
                                        <div class="heading-text w-hidden-main w-hidden-medium">SOURCE</div>
                                        <div><strong>SoundCloud</strong></div>
                                    </div>
                                    <div class="div-block-146">
                                        <div class="heading-text w-hidden-main w-hidden-medium">STREAMS FOR DAY</div>
                                        <div>10:00 am</div>
                                    </div>
                                    <div class="div-block-148">
                                        <div class="heading-text w-hidden-main w-hidden-medium">DOWNLOADS</div>
                                        <div>300</div>
                                    </div>
                                    <div class="div-block-147">
                                        <div class="see-more-extra"><strong>SEE MORE</strong></div>
                                        <div class="close-see-extra"><strong class="bold-text-6">CLOSE</strong></div>
                                    </div>
                                </div>
                                <div class="div-block-155">
                                    <div class="div-block-144">
                                        <div class="heading-text w-hidden-main w-hidden-medium">SONG</div>
                                        <div class="track-details-wrapper ss"><img src="images/track-art_1track-art.jpg"
                                                                                   width="50" class="image-2">
                                            <div class="song-name-artist">
                                                <div class="text-block-2">Adiapena</div>
                                                <div class="text-block-3">Kidi</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div-block-145">
                                        <div class="heading-text w-hidden-main w-hidden-medium">SOURCE</div>
                                        <div><strong>SoundCloud</strong></div>
                                    </div>
                                    <div class="div-block-146">
                                        <div class="heading-text w-hidden-main w-hidden-medium">STREAMS FOR DAY</div>
                                        <div>10:00 am</div>
                                    </div>
                                    <div class="div-block-148">
                                        <div class="heading-text w-hidden-main w-hidden-medium">DOWNLOADS</div>
                                        <div>300</div>
                                    </div>
                                    <div class="div-block-147">
                                        <div class="see-more-extra"><strong>SEE MORE</strong></div>
                                        <div class="close-see-extra"><strong class="bold-text-6">CLOSE</strong></div>
                                    </div>
                                </div>
                                <div class="div-block-155">
                                    <div class="div-block-144">
                                        <div class="heading-text w-hidden-main w-hidden-medium">SONG</div>
                                        <div class="track-details-wrapper ss"><img src="images/track-art_1track-art.jpg"
                                                                                   width="50" class="image-2">
                                            <div class="song-name-artist">
                                                <div class="text-block-2">Adiapena</div>
                                                <div class="text-block-3">Kidi</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div-block-145">
                                        <div class="heading-text w-hidden-main w-hidden-medium">SOURCE</div>
                                        <div><strong>SoundCloud</strong></div>
                                    </div>
                                    <div class="div-block-146">
                                        <div class="heading-text w-hidden-main w-hidden-medium">STREAMS FOR DAY</div>
                                        <div>10:00 am</div>
                                    </div>
                                    <div class="div-block-148">
                                        <div class="heading-text w-hidden-main w-hidden-medium">DOWNLOADS</div>
                                        <div>300</div>
                                    </div>
                                    <div class="div-block-147">
                                        <div class="see-more-extra"><strong>SEE MORE</strong></div>
                                        <div class="close-see-extra"><strong class="bold-text-6">CLOSE</strong></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-w-tab="Facebook" class="dash-tab-pane w-tab-pane">
                    <div class="tabs-top-wrapper facebook-monitoring-tab">
                        <div class="div-block-16">
                            <h1 class="heading-2">Facebook</h1><a href="#" class="upload-song-button w-inline-block"
                                                                  data-ix="upload-song-modal-trigger"><img
                                        src="https://uploads-ssl.webflow.com/5ace5bf2286b145321f46e32/5ad49a1a0e93f33a9edcb8eb_upload-to-the-cloud.svg"
                                        width="30">
                                <div class="div-block-18">
                                    <div class="text-block-6">Upload song</div>
                                </div>
                            </a></div>
                        <div class="w-row">
                            <div class="column-2-copy w-col w-col-3 w-col-medium-6 w-col-small-6">
                                <div class="div-block-5">
                                    <h1 class="number-card-number">5412</h1>
                                    <div class="spacer-in-tab"></div>
                                    <div class="number-card-divider"></div>
                                    <div class="number-card-dollars">Followers</div>
                                </div>
                            </div>
                            <div class="column-32 w-col w-col-3 w-col-medium-6 w-col-small-6">
                                <div class="div-block-5">
                                    <h1 class="number-card-number">3224</h1>
                                    <div class="spacer-in-tab"></div>
                                    <div class="number-card-divider"></div>
                                    <div class="number-card-dollars">Post Reach</div>
                                </div>
                            </div>
                            <div class="column-36 w-col w-col-3 w-col-medium-6 w-col-small-6">
                                <div class="div-block-5">
                                    <h1 class="number-card-number">332</h1>
                                    <div class="spacer-in-tab"></div>
                                    <div class="number-card-divider"></div>
                                    <div class="number-card-dollars">Post Engagment</div>
                                </div>
                            </div>
                            <div class="column-11 w-col w-col-3 w-col-medium-6 w-col-small-6">
                                <div class="div-block-5">
                                    <h1 class="number-card-number">254</h1>
                                    <div class="spacer-in-tab"></div>
                                    <div class="number-card-divider"></div>
                                    <div class="number-card-dollars">Comments</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qisimah-container-main dashboard-version">
                        <h1 class="inner-page-sub">Top Post Engagements</h1>
                        <div class="div-block-4">
                            <div class="section-heading w-hidden-medium w-hidden-small w-hidden-tiny w-row">
                                <div class="w-col w-col-2">
                                    <div class="heading-text">POST IMAGE</div>
                                </div>
                                <div class="w-col w-col-4">
                                    <div class="heading-text">CAPTION</div>
                                </div>
                                <div class="w-col w-col-2">
                                    <div class="heading-text">LIKES</div>
                                </div>
                                <div class="column-2 w-col w-col-2">
                                    <div class="heading-text">COMMENTS</div>
                                </div>
                                <div class="column-2 w-col w-col-2">
                                    <div class="heading-text">SHARES</div>
                                </div>
                            </div>
                            <div class="w-row">
                                <div class="column-43 w-col w-col-2 w-col-stack">
                                    <div class="table-head-text w-hidden-main">POST IMAGE</div>
                                    <img src="images/30710976_1456888347750092_5566715646445617152_n.jpg"
                                         class="image-8"></div>
                                <div class="column-44 w-col w-col-4 w-col-stack">
                                    <div class="table-head-text w-hidden-main">CAPTION</div>
                                    <p>FOR ALL THESE YEARS, YOU GUYS ARE STILL HERE WITH ME. <br>I LOVE YOU ALL MY FANS!<br>MAY
                                        GOD BLESS YOU ALL!!! 💜💜👊👏👏</p>
                                </div>
                                <div class="column-45 w-col w-col-2 w-col-stack">
                                    <div class="table-head-text w-hidden-main">LIKES</div>
                                    <div class="text-block-11">19k</div>
                                </div>
                                <div class="column-46 w-col w-col-2 w-col-stack">
                                    <div class="table-head-text w-hidden-main">COMMENTS</div>
                                    <div class="text-block-11">150</div>
                                </div>
                                <div class="w-col w-col-2 w-col-stack">
                                    <div class="table-head-text w-hidden-main">SHARES</div>
                                    <div class="text-block-11">100</div>
                                </div>
                            </div>
                            <div class="text-block-10">Posted on: 21 Jul 2018</div>
                        </div>
                        <div class="div-block-4">
                            <div class="section-heading w-hidden-medium w-hidden-small w-hidden-tiny w-row">
                                <div class="w-col w-col-2">
                                    <div class="heading-text">POST IMAGE</div>
                                </div>
                                <div class="w-col w-col-4">
                                    <div class="heading-text">CAPTION</div>
                                </div>
                                <div class="w-col w-col-2">
                                    <div class="heading-text">LIKES</div>
                                </div>
                                <div class="column-2 w-col w-col-2">
                                    <div class="heading-text">COMMENTS</div>
                                </div>
                                <div class="column-2 w-col w-col-2">
                                    <div class="heading-text">SHARES</div>
                                </div>
                            </div>
                            <div class="w-row">
                                <div class="column-43 w-col w-col-2 w-col-stack">
                                    <div class="table-head-text w-hidden-main">POST IMAGE</div>
                                    <img src="images/30710976_1456888347750092_5566715646445617152_n.jpg"
                                         class="image-8"></div>
                                <div class="column-44 w-col w-col-4 w-col-stack">
                                    <div class="table-head-text w-hidden-main">CAPTION</div>
                                    <p>FOR ALL THESE YEARS, YOU GUYS ARE STILL HERE WITH ME. <br>I LOVE YOU ALL MY FANS!<br>MAY
                                        GOD BLESS YOU ALL!!! 💜💜👊👏👏</p>
                                </div>
                                <div class="column-45 w-col w-col-2 w-col-stack">
                                    <div class="table-head-text w-hidden-main">LIKES</div>
                                    <div class="text-block-11">19k</div>
                                </div>
                                <div class="column-46 w-col w-col-2 w-col-stack">
                                    <div class="table-head-text w-hidden-main">COMMENTS</div>
                                    <div class="text-block-11">150</div>
                                </div>
                                <div class="w-col w-col-2 w-col-stack">
                                    <div class="table-head-text w-hidden-main">SHARES</div>
                                    <div class="text-block-11">100</div>
                                </div>
                            </div>
                            <div class="text-block-10">Posted on: 21 Jul 2018</div>
                        </div>
                        <div class="div-block-4">
                            <div class="section-heading w-hidden-medium w-hidden-small w-hidden-tiny w-row">
                                <div class="w-col w-col-2">
                                    <div class="heading-text">POST IMAGE</div>
                                </div>
                                <div class="w-col w-col-4">
                                    <div class="heading-text">CAPTION</div>
                                </div>
                                <div class="w-col w-col-2">
                                    <div class="heading-text">LIKES</div>
                                </div>
                                <div class="column-2 w-col w-col-2">
                                    <div class="heading-text">COMMENTS</div>
                                </div>
                                <div class="column-2 w-col w-col-2">
                                    <div class="heading-text">SHARES</div>
                                </div>
                            </div>
                            <div class="w-row">
                                <div class="column-43 w-col w-col-2 w-col-stack">
                                    <div class="table-head-text w-hidden-main">POST IMAGE</div>
                                    <img src="images/30710976_1456888347750092_5566715646445617152_n.jpg"
                                         class="image-8"></div>
                                <div class="column-44 w-col w-col-4 w-col-stack">
                                    <div class="table-head-text w-hidden-main">CAPTION</div>
                                    <p>FOR ALL THESE YEARS, YOU GUYS ARE STILL HERE WITH ME. <br>I LOVE YOU ALL MY FANS!<br>MAY
                                        GOD BLESS YOU ALL!!! 💜💜👊👏👏</p>
                                </div>
                                <div class="column-45 w-col w-col-2 w-col-stack">
                                    <div class="table-head-text w-hidden-main">LIKES</div>
                                    <div class="text-block-11">19k</div>
                                </div>
                                <div class="column-46 w-col w-col-2 w-col-stack">
                                    <div class="table-head-text w-hidden-main">COMMENTS</div>
                                    <div class="text-block-11">150</div>
                                </div>
                                <div class="w-col w-col-2 w-col-stack">
                                    <div class="table-head-text w-hidden-main">SHARES</div>
                                    <div class="text-block-11">100</div>
                                </div>
                            </div>
                            <div class="text-block-10">Posted on: 21 Jul 2018</div>
                        </div>
                    </div>
                </div>
                <div data-w-tab="YouTube" class="dash-tab-pane w-tab-pane">
                    <div class="tabs-top-wrapper youtube-monitoring-tab">
                        <div class="div-block-16">
                            <h1 class="heading-2">YouTube - {{ $youtube['title'] ?? 'Channel Name' }}</h1>
                            <a href="#" class="upload-song-button w-inline-block" data-ix="upload-song-modal-trigger">
                                <img src="https://uploads-ssl.webflow.com/5ace5bf2286b145321f46e32/5ad49a1a0e93f33a9edcb8eb_upload-to-the-cloud.svg" width="30">
                                <div class="div-block-18">
                                    <div class="text-block-6">Upload song</div>
                                </div>
                            </a>
                        </div>
                        <div class="w-row">
                            <div class="column-19 w-col w-col-3 w-col-medium-6 w-col-small-6">
                                <div class="div-block-5">
                                    <h1 class="number-card-number">{{ $youtube['views'] ?? 0 }}</h1>
                                    <div class="spacer-in-tab"></div>
                                    <div class="number-card-divider"></div>
                                    <div class="number-card-dollars">Views</div>
                                </div>
                            </div>
                            <div class="column-32 w-col w-col-3 w-col-medium-6 w-col-small-6">
                                <div class="div-block-5">
                                    <h1 class="number-card-number">{{ $youtube['subscribers'] ?? 0 }}</h1>
                                    <div class="spacer-in-tab"></div>
                                    <div class="number-card-divider"></div>
                                    <div class="number-card-dollars">Subscribers</div>
                                </div>
                            </div>
                            <div class="column-36 w-col w-col-3 w-col-medium-6 w-col-small-6">
                                <div class="div-block-5">
                                    <h1 class="number-card-number">{{ $youtube['likes'] ?? 0 }}</h1>
                                    <div class="spacer-in-tab"></div>
                                    <div class="number-card-divider"></div>
                                    <div class="number-card-dollars">Likes</div>
                                </div>
                            </div>
                            <div class="column-18 w-col w-col-3 w-col-medium-6 w-col-small-6">
                                <div class="div-block-5">
                                    <h1 class="number-card-number">{{ $youtube['favorites'] ?? 0 }}</h1>
                                    <div class="spacer-in-tab"></div>
                                    <div class="number-card-divider"></div>
                                    <div class="number-card-dollars">Favourites</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qisimah-container-main dashboard-version">
                        @if($user->google_auth_code)
                            <h1 class="inner-page-sub">Top Post Engagements</h1>
                            <div class="w-hidden-medium w-hidden-small w-hidden-tiny w-row">
                                <div class="w-col w-col-2">
                                    <div class="heading-text">THUMBNAIL</div>
                                </div>
                                <div class="w-col w-col-4">
                                    <div class="heading-text">CAPTION</div>
                                </div>
                                <div class="w-col w-col-2">
                                    <div class="heading-text">VIEWS</div>
                                </div>
                                <div class="w-col w-col-2">
                                    <div class="heading-text">LIKES</div>
                                </div>
                                <div class="w-col w-col-2">
                                    <div class="heading-text">SHARES</div>
                                </div>
                            </div>
                            <div class="div-block-4">
                                <div class="w-row">
                                    <div class="column-49 w-col w-col-2 w-col-stack">
                                        <div class="heading-text w-hidden-main">THUMBNAIL</div>
                                        <img src="images/30710976_1456888347750092_5566715646445617152_n.jpg"
                                             class="image-8"></div>
                                    <div class="w-col w-col-4 w-col-stack">
                                        <div class="heading-text w-hidden-main">CAPTION</div>
                                        <p>FOR ALL THESE YEARS, YOU GUYS ARE STILL HERE WITH ME. <br>I LOVE YOU ALL MY
                                            FANS!<br>MAY
                                            GOD BLESS YOU ALL!!! 💜💜👊👏👏</p>
                                    </div>
                                    <div class="column-50 w-col w-col-2 w-col-stack">
                                        <div class="heading-text w-hidden-main">VIEWS</div>
                                        <div class="text-block-11">19k</div>
                                    </div>
                                    <div class="column-51 w-col w-col-2 w-col-stack">
                                        <div class="heading-text w-hidden-main">LIKES</div>
                                        <div class="text-block-11">150</div>
                                    </div>
                                    <div class="w-col w-col-2 w-col-stack">
                                        <div class="heading-text w-hidden-main">SHARES</div>
                                        <div class="text-block-11">100</div>
                                    </div>
                                </div>
                                <div class="text-block-10">Posted on: 21 Jul 2018</div>
                            </div>
                        @else
                            <div class="div-block-16">
                                <h1 class="heading-2">YouTube</h1>
                                <a href="{{ url('link.youtube.account') }}" class="upload-song-button w-inline-block"
                                   data-ix="">
                                    <img src="images/001-youtube.svg" width="32">
                                    <div class="div-block-18">
                                        <div class="text-block-6">Connect to YouTube</div>
                                    </div>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
                <div data-w-tab="Instagram" class="dash-tab-pane w-tab-pane">
                    <div class="tabs-top-wrapper instagram-monitoring-tab">
                        <div class="div-block-16">
                            <h1 class="heading-2">Instagram</h1><a href="#" class="upload-song-button w-inline-block"
                                                                   data-ix="upload-song-modal-trigger"><img
                                        src="https://uploads-ssl.webflow.com/5ace5bf2286b145321f46e32/5ad49a1a0e93f33a9edcb8eb_upload-to-the-cloud.svg"
                                        width="30">
                                <div class="div-block-18">
                                    <div class="text-block-6">Upload song</div>
                                </div>
                            </a></div>
                        <div class="w-row">
                            <div class="column-2-copy w-col w-col-3 w-col-medium-6 w-col-small-6">
                                <div class="div-block-5">
                                    <h1 class="number-card-number">24</h1>
                                    <div class="spacer-in-tab"></div>
                                    <div class="number-card-divider"></div>
                                    <div class="number-card-dollars">Posts</div>
                                </div>
                            </div>
                            <div class="column-32 w-col w-col-3 w-col-medium-6 w-col-small-6">
                                <div class="div-block-5">
                                    <h1 class="number-card-number">244</h1>
                                    <div class="spacer-in-tab"></div>
                                    <div class="number-card-divider"></div>
                                    <div class="number-card-dollars">Followers</div>
                                </div>
                            </div>
                            <div class="column-36 w-col w-col-3 w-col-medium-6 w-col-small-6">
                                <div class="div-block-5">
                                    <h1 class="number-card-number">33</h1>
                                    <div class="spacer-in-tab"></div>
                                    <div class="number-card-divider"></div>
                                    <div class="number-card-dollars">Following</div>
                                </div>
                            </div>
                            <div class="column-11 w-col w-col-3 w-col-medium-6 w-col-small-6">
                                <div class="div-block-5">
                                    <h1 class="number-card-number">321</h1>
                                    <div class="spacer-in-tab"></div>
                                    <div class="number-card-divider"></div>
                                    <div class="number-card-dollars">Unread DM</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qisimah-container-main dashboard-version">
                        <h1 class="inner-page-sub">Top Post Engagements</h1>
                        <div class="div-block-4">
                            <div class="section-heading w-row">
                                <div class="w-col w-col-2">
                                    <div class="heading-text">IMAGE / VIDEO</div>
                                </div>
                                <div class="w-col w-col-4">
                                    <div class="heading-text">CAPTION</div>
                                </div>
                                <div class="w-col w-col-2">
                                    <div class="heading-text">VIEWS</div>
                                </div>
                                <div class="column-2 w-col w-col-2">
                                    <div class="heading-text">LIKES</div>
                                </div>
                                <div class="column-2 w-col w-col-2">
                                    <div class="heading-text">COMMENTS</div>
                                </div>
                            </div>
                            <div class="w-row">
                                <div class="w-col w-col-2 w-col-medium-2 w-col-small-small-stack"><img
                                            src="images/30710976_1456888347750092_5566715646445617152_n.jpg"
                                            class="image-8"></div>
                                <div class="w-col w-col-4 w-col-medium-4 w-col-small-small-stack">
                                    <p>FOR ALL THESE YEARS, YOU GUYS ARE STILL HERE WITH ME. <br>I LOVE YOU ALL MY FANS!<br>MAY
                                        GOD BLESS YOU ALL!!! 💜💜👊👏👏</p>
                                </div>
                                <div class="w-col w-col-2 w-col-medium-2 w-col-small-small-stack">
                                    <div class="text-block-11">19k</div>
                                </div>
                                <div class="w-col w-col-2 w-col-medium-2 w-col-small-small-stack">
                                    <div class="text-block-11">150</div>
                                </div>
                                <div class="w-col w-col-2 w-col-medium-2 w-col-small-small-stack">
                                    <div class="text-block-11">100</div>
                                </div>
                            </div>
                            <div class="text-block-10">Posted on: 21 Jul 2018</div>
                        </div>
                    </div>
                </div>
                <div data-w-tab="twitter" class="dash-tab-pane w-tab-pane">
                    <div class="tabs-top-wrapper twitter-monitoring-tab">
                        <div class="div-block-16">
                            <h1 class="heading-2">Twitter</h1><a href="#" class="upload-song-button w-inline-block"
                                                                 data-ix="upload-song-modal-trigger"><img
                                        src="https://uploads-ssl.webflow.com/5ace5bf2286b145321f46e32/5ad49a1a0e93f33a9edcb8eb_upload-to-the-cloud.svg"
                                        width="30">
                                <div class="div-block-18">
                                    <div class="text-block-6">Upload song</div>
                                </div>
                            </a></div>
                        <div class="w-row">
                            <div class="column-19 w-col w-col-3 w-col-medium-6 w-col-small-6">
                                <div class="div-block-5">
                                    <h1 class="number-card-number">324k</h1>
                                    <div class="spacer-in-tab"></div>
                                    <div class="number-card-divider"></div>
                                    <div class="number-card-dollars">Tweets</div>
                                </div>
                            </div>
                            <div class="column-41 w-col w-col-3 w-col-medium-6 w-col-small-6">
                                <div class="div-block-5">
                                    <h1 class="number-card-number">251</h1>
                                    <div class="spacer-in-tab"></div>
                                    <div class="number-card-divider"></div>
                                    <div class="number-card-dollars">Followers</div>
                                </div>
                            </div>
                            <div class="column-40 w-col w-col-3 w-col-medium-6 w-col-small-6">
                                <div class="div-block-5">
                                    <h1 class="number-card-number">2445</h1>
                                    <div class="spacer-in-tab"></div>
                                    <div class="number-card-divider"></div>
                                    <div class="number-card-dollars">Following</div>
                                </div>
                            </div>
                            <div class="column-18 w-col w-col-3 w-col-medium-6 w-col-small-6">
                                <div class="div-block-5">
                                    <h1 class="number-card-number">454</h1>
                                    <div class="spacer-in-tab"></div>
                                    <div class="number-card-divider"></div>
                                    <div class="number-card-dollars">Unread DM</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qisimah-container-main dashboard-version">
                        <h1 class="inner-page-sub">Top Twitter Post Engagements</h1>
                        <div class="div-block-4">
                            <div class="section-heading w-row">
                                <div class="w-col w-col-2">
                                    <div class="heading-text">IMAGE / VIDEO</div>
                                </div>
                                <div class="w-col w-col-4">
                                    <div class="heading-text">TWEET</div>
                                </div>
                                <div class="w-col w-col-2">
                                    <div class="heading-text">RETWEETS</div>
                                </div>
                                <div class="column-2 w-col w-col-2">
                                    <div class="heading-text">LIKES</div>
                                </div>
                                <div class="column-2 w-col w-col-2">
                                    <div class="heading-text">COMMENTS</div>
                                </div>
                            </div>
                            <div class="w-row">
                                <div class="w-col w-col-2 w-col-stack"><img
                                            src="images/30710976_1456888347750092_5566715646445617152_n.jpg"
                                            class="image-8"></div>
                                <div class="w-col w-col-4 w-col-stack">
                                    <p>FOR ALL THESE YEARS, YOU GUYS ARE STILL HERE WITH ME. <br>I LOVE YOU ALL MY FANS!<br>MAY
                                        GOD BLESS YOU ALL!!! 💜💜👊👏👏</p>
                                </div>
                                <div class="w-col w-col-2 w-col-stack">
                                    <div class="text-block-11">19k</div>
                                </div>
                                <div class="w-col w-col-2 w-col-stack">
                                    <div class="text-block-11">150</div>
                                </div>
                                <div class="w-col w-col-2 w-col-stack">
                                    <div class="text-block-11">100</div>
                                </div>
                            </div>
                            <div class="text-block-10">Posted on: 21 Jul 2018</div>
                        </div>
                    </div>
                </div>
                <div data-w-tab="Milestone" class="dash-tab-pane w-tab-pane">
                    <div class="tabs-top-wrapper milestone-monitoring-tab">
                        <div class="div-block-16">
                            <h1 class="heading-2">Milestone</h1><a href="#" class="upload-song-button w-inline-block"
                                                                   data-ix="upload-song-modal-trigger"><img
                                        src="https://uploads-ssl.webflow.com/5ace5bf2286b145321f46e32/5ad49a1a0e93f33a9edcb8eb_upload-to-the-cloud.svg"
                                        width="30">
                                <div class="div-block-18">
                                    <div class="text-block-6">Upload song</div>
                                </div>
                            </a></div>
                        <div class="w-row">
                            <div class="column-2-copy w-col w-col-3 w-col-medium-6 w-col-small-6">
                                <div class="div-block-5">
                                    <h1 class="number-card-number">1233</h1>
                                    <div class="additional-text">Gringo</div>
                                    <div class="number-card-divider"></div>
                                    <div class="number-card-dollars">Best Performing</div>
                                </div>
                            </div>
                            <div class="column-32 w-col w-col-3 w-col-medium-6 w-col-small-6">
                                <div class="div-block-5">
                                    <h1 class="number-card-number">50 days</h1>
                                    <div class="additional-text">CCTV</div>
                                    <div class="number-card-divider"></div>
                                    <div class="number-card-dollars">Longest on Chart</div>
                                </div>
                            </div>
                            <div class="column-36 w-col w-col-3 w-col-medium-6 w-col-small-6">
                                <div class="div-block-5">
                                    <h1 class="number-card-number">20</h1>
                                    <div class="additional-text">CCTV</div>
                                    <div class="number-card-divider"></div>
                                    <div class="number-card-dollars">Most Radio Station Plays</div>
                                </div>
                            </div>
                            <div class="column-11 w-col w-col-3 w-col-medium-6 w-col-small-6">
                                <div class="div-block-5">
                                    <h1 class="number-card-number">2</h1>
                                    <div class="additional-text">Adiepena</div>
                                    <div class="number-card-divider"></div>
                                    <div class="number-card-dollars">Most Country Plays</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qisimah-container-main dashboard-version">
                        <h1 class="inner-page-sub">Achievement Milestone</h1>
                        <div class="w-row">
                            <div class="w-col w-col-6"></div>
                            <div class="w-col w-col-6"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection