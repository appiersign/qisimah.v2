@extends('layouts.dashboard')
@section('content')
    <div class="">
        <div class="inner-top-wrapper">
            <div class="div-block-16">
                <h1 class="heading-2">Broadcasters</h1>
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

        <div class="form-modal-sub">
            <h1 class="heading-6">Add New Broadcaster</h1>

            <div class="div-block-82">
                <div class="w-form">
                    <form method="post" action="{{ route('broadcasters.store') }}" name="create.broadcasters" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="w-row">
                            <div class="w-col w-col-6">
                                <label for="Station" class="form-label">Name: *</label>
                                <input type="text" value="{{ old('name') }}" class="text-field-2 w-input" maxlength="256" name="name" placeholder="Cute Station" id="Station" required>
                            </div>
                            <div class="w-col w-col-6">
                                <label for="frequency" class="form-label">Frequency: *</label>
                                <input type="text" value="{{ old('frequency') }}" class="text-field-2 w-input" maxlength="256" name="frequency" data-name="Frequency" placeholder="123.45" id="frequency" required>
                            </div>
                        </div>

                        <div class="w-row">
                            <div class="w-col w-col-6">
                                <label for="broadcaster-type" class="form-label">Type:</label>
                                <select name="type" id="broadcaster-type" class="text-field-2 w-input" required>
                                    <option value="" disabled selected>select type</option>
                                    <option value="radio" {{ (old('type') == 'radio')? 'selected' : '' }}>radio</option>
                                    <option value="tv" {{ (old('type') == 'tv')? 'selected' : '' }}>tv</option>
                                </select>
                            </div>
                            <div class="w-col w-col-6">
                                <label for="stream-id" class="form-label">Stream ID: </label>
                                <input type="text" placeholder="stream id" class="text-field-2 w-input" name="stream_id" id="stream-id" value="{{ old('stream_id') ?? '' }}" required>
                            </div>
                        </div>

                        <div class="w-row">
                            <div class="w-col w-col-6">
                                <label for="broadcaster-country" class="form-label">Country: *</label>
                                <select name="country" id="broadcaster-country" class="text-field-2 w-input" required onchange="getRegions()">
                                    <option value="" disabled selected>select country</option>
                                    @foreach($countries as $country)
                                        <option value="{{ $country->id }}" {{ (old('country') == $country->id)? 'selected' : '' }}>{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="w-col w-col-6">
                                <label for="broadcaster-region" class="form-label">Region: *</label>
                                <select name="region" id="broadcaster-region" class="text-field-2 w-input" required>
                                    <option value="" disabled selected>select region</option>
                                    @foreach($regions as $region)
                                        <option value="{{ $region->id }}" {{ (old('region') == $region->id)? 'selected' : '' }}>{{ $region->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="w-row">
                            <div class="w-col w-col-6">
                                <label for="city" class="form-label">City: *</label>
                                <input type="text" value="{{ old('city') }}" class="text-field-2 w-input" maxlength="256" name="city" placeholder="Accra" id="city">
                            </div>
                            <div class="w-col w-col-6">
                                <label for="address" class="form-label">Address:</label>
                                <input type="text" value="{{ old('address') }}" class="text-field-2 w-input" maxlength="256" name="address" data-name="address" placeholder="1 Street Name" id="address">
                            </div>
                        </div>
                        <div class="w-row">
                            <div class="w-col w-col-6">
                                <label for="broadcaster.phone" class="form-label">Phone:</label>
                                <input type="tel" value="{{ old('telephone') }}" class="text-field-2 w-input" maxlength="256" name="telephone" placeholder="123 456 789">
                            </div>
                            <div class="w-col w-col-6">
                                <label for="Tagline" class="form-label">Tag line:</label>
                                <input type="text" value="{{ old('tag_line') }}" class="text-field-2 w-input" maxlength="256" name="tag_line" data-name="Tagline" placeholder="broadcaster slogan" id="Tagline">
                            </div>
                        </div>
                        <div class="w-row">
                            <div class="w-col w-col-6">
                                <label for="tags" class="form-label">Tags:</label>
                                <select name="tags" id="broadcaster-region" class="text-field-2 w-input" required multiple>
                                    <option value="" disabled selected>select tags</option>
                                    @foreach($tags as $tag)
                                        <option value="{{ $tag->id }}" {{ (old('tags') && in_array($tag->id, explode(',', old('tags'))))? 'selected' : '' }}>{{ $tag->name }}</option>
                                    @endforeach
                                </select>
                                {{--<input type="text" class="text-field-2 w-input" maxlength="256" name="tags" data-name="tags" placeholder="music, entertainment, showbiz" id="tags">--}}
                            </div>
                            <div class="w-col w-col-6">
                                <label for="logo" class="form-label">Logo:</label>
                                <input type="file" class="text-field-2 logo-field w-input" maxlength="256" name="logo" data-name="logo" id="logo">
                            </div>
                        </div>

                        <div class="w-row">
                            <div class="w-col w-col-6">

                            </div>
                            <div class="w-col w-col-2">
                                <label for=""><p></p></label>
                                <input type="submit" value="Save" class="button w-button">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection