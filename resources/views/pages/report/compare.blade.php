@extends('layouts.dashboard')
@section('content')
    <div class="">
        <div class="inner-top-wrapper">
            <div class="div-block-16">
                <h1 class="heading-2">Compare</h1>
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
        <div class="qisimah-container-main compare-wrapper-no-boarder w-clearfix">
            <div class="parameter-side-stay">
                <div class="parameter-header"></div>
                <p class="parameter-list">Name</p>
                <p class="parameter-list">Songs uploaded</p>
                <p class="parameter-list">Total detections</p>
                <p class="parameter-list">Facebook fans</p>
                <p class="parameter-list">Twitter followers</p>
                <p class="parameter-list">YouTube Subscribers</p>
                <p class="parameter-list">SoundCloud</p>
                <p class="parameter-list">Instagram followers</p>
            </div>
            <div class="div-block-61 w-clearfix">
                <div class="div-block-63">
                    <div class="form-block-3 w-form">
                        <form action="" method="post">
                            <select id="my-artist" class="select-field-2 w-select artists" name="artists[]" required>
                                <option value="">Select Artist</option>
                                @if(isset($artists))
                                    @foreach($artists as $artist)
                                        <option value="{{ $artist->qisimah_id }}" @if(session('artist_1') == $artist->qisimah_id) selected @endif> {{ $artist->nick_name }} </option>
                                    @endforeach
                                @endif
                            </select>
                        </form>
                    </div>
                    @if(isset($artist_1))
                        <div class="compare-wrapper">
                            <div class="div-block-52">
                                <img src="{{ asset('images/adina10.jpg') }}"
                                     srcset="{{ asset('images/adina10-p-500.jpeg') }} 500w, {{ asset('images/adina10.jpg') }} 575w"
                                     sizes="(max-width: 767px) 92px, 120px" class="artist-image-compare">
                            </div>
                            <div class="div-block-53">
                                <p class="paragraph-5">{{ $artist_1->name }}</p>
                                <p class="paragraph-5">{{ $artist_1->songs_uploaded }}</p>
                                <p class="paragraph-5">{{ $artist_1->plays }}</p>
                                <p class="paragraph-5">500</p>
                                <p class="paragraph-5">500</p>
                                <p class="paragraph-5">500</p>
                                <p class="paragraph-5">10</p>
                                <p class="paragraph-5">10</p>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="div-block-63">
                    <div class="form-block-3 w-form">
                        <form action="" method="post">
                            <select id="Select-artist-3" class="select-field-2 w-select artists" name="artists[]">
                                <option value="">Select Artist</option>
                                @if(isset($artists))
                                    @foreach($artists as $artist)
                                        <option value="{{ $artist->qisimah_id }}" @if(session('artist_2') == $artist->qisimah_id) selected @endif>{{ $artist->nick_name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </form>
                        <div class="w-form-done">
                            <div>Thank you! Your submission has been received!</div>
                        </div>
                        <div class="w-form-fail">
                            <div>Oops! Something went wrong while submitting the form.</div>
                        </div>
                    </div>
                    <div class="compare-wrapper">
                        <div class="div-block-52">
                            <img src="{{ asset('images/adina10.jpg') }}" srcset="{{ asset('images/adina10-p-500.jpeg') }} 500w, {{ asset('images/adina10.jpg') }} 575w" sizes="(max-width: 767px) 92px, 120px" class="artist-image-compare">
                        </div>
                        <div class="div-block-53">
                            <p class="paragraph-5">Adina</p>
                            <p class="paragraph-5">543</p>
                            <p class="paragraph-5">1m</p>
                            <p class="paragraph-5">500</p>
                            <p class="paragraph-5">500</p>
                            <p class="paragraph-5">500</p>
                            <p class="paragraph-5">10</p>
                            <p class="paragraph-5">10</p>
                        </div>
                    </div>
                </div>
                <div class="div-block-63">
                    <div class="form-block-3 w-form">
                        <form action="" method="post">
                            <select id="Select-artist-3" class="select-field-2 w-select artists" name="artists[]">
                                <option value="">Select Artist</option>
                                @if(isset($artists))
                                    @foreach($artists as $artist)
                                        <option value="{{ $artist->qisimah_id }}" @if(session('artist_3') == $artist->qisimah_id) selected @endif>{{ $artist->nick_name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </form>
                        <div class="w-form-done">
                            <div>Thank you! Your submission has been received!</div>
                        </div>
                        <div class="w-form-fail">
                            <div>Oops! Something went wrong while submitting the form.</div>
                        </div>
                    </div>
                    <div class="compare-wrapper">
                        <div class="div-block-52">
                            <img src="{{ asset('images/adina10.jpg') }}" srcset="{{ asset('images/adina10-p-500.jpeg') }} 500w, {{ asset('images/adina10.jpg') }} 575w" sizes="(max-width: 767px) 92px, 120px" class="artist-image-compare">
                        </div>
                        <div class="div-block-53">
                            <p class="paragraph-5">Adina</p>
                            <p class="paragraph-5">543</p>
                            <p class="paragraph-5">1m</p>
                            <p class="paragraph-5">500</p>
                            <p class="paragraph-5">500</p>
                            <p class="paragraph-5">500</p>
                            <p class="paragraph-5">10</p>
                            <p class="paragraph-5">10</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-scripts')
    <script>
        $('.artists').on('change', function (e) {
            e.preventDefault();
            let parameters = [];
            let path = $('.artists').map(function(){return $(this).val();}).get();
            path.map(function(param) {
                if (param){
                    parameters.push(param);
                }
            });
            console.log(parameters);
            let artist = parameters[0];
            parameters.shift();
            if (parameters.length) {
                window.location.pathname = 'reports/compare/' + artist + '/' + parameters.join('-');
            }

        });
    </script>
@endsection