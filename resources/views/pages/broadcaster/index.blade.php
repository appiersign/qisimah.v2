@extends('layouts.dashboard')
@section('content')
    <div class="">
        <div class="inner-top-wrapper">
            <div class="div-block-16">
                <h1 class="heading-2">Broadcasters</h1>
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
            <div class="div-block-46">
                <a href="{{ route('broadcasters.create') }}" class="link-block-5 w-inline-block">
                    <div data-ix="upload-broadcaster-modal">add broadcaster</div>
                </a>
                    <form action="/search" class="search-input">
                        <input type="search" class="w-input search-admin-tools" maxlength="256" autofocus="true" name="query" placeholder="Search…" id="search">
                    </form>
            </div>

            @include('components.guest.success-message')

            <div data-duration-in="300" data-duration-out="100" class="w-tabs">
                <div class="tabs-menu-3 w-tab-menu">
                    <a data-w-tab="Tab 1" class="broadcast-tab-link w-inline-block w-tab-link w--current">
                        <div class="text-block-57">Radio</div>
                    </a>
                    <a data-w-tab="Tab 2" class="broadcast-tab-link w-inline-block w-tab-link">
                        <div class="text-block-56">Television</div>
                    </a>
                </div>
                <div class="w-tab-content">
                    <div data-w-tab="Tab 1" class="broadcast-tab-content w-tab-pane">
                        <div class="section-heading-main-wrapper w-hidden-small w-hidden-tiny">
                            <div class="heading-text-proper">LOGO</div>
                            <div class="heading-text-proper proper-name">NAME</div>
                            <div class="heading-text-proper proper-location">LOCATION</div>
                            <div class="heading-text-proper proper-status">STATUS</div>
                            <div class="heading-text-proper proper-action">ACTION</div>
                        </div>
                        <div class="section-heading-main-wrapper hidden w-hidden-main w-hidden-medium"></div>
                        @if ($radios)
                            @foreach ($radios as $radio)
                                <div class="broadcasters-list-wrapper">
                                    <div class="station-logo">
                                        <div class="heading-text-proper give-space w-hidden-main w-hidden-medium">LOGO</div>
                                        <img src="{{ asset($radio->logo) }}" class="station-logo">
                                    </div>
                                    <div class="station-name">
                                        <div class="heading-text-proper proper-name give-space w-hidden-main w-hidden-medium">NAME</div>
                                        <div class="text-block-25">{{ $radio->name }}</div>
                                    </div>
                                    <div class="station-location">
                                        <div class="heading-text-proper proper-location give-space w-hidden-main w-hidden-medium">LOCATION</div>
                                        <div class="text-block-25">{{ $radio->getLocation() }}</div>
                                    </div>
                                    <div class="station-status">
                                        <div class="heading-text-proper proper-status give-space w-hidden-main w-hidden-medium">STATUS</div>
                                        <div class="text-block-26">LISTENING</div>
                                    </div>
                                    <div class="station-action">
                                        <div class="heading-text-proper proper-action give-space w-hidden-main w-hidden-medium">ACTION</div>
                                        <div class="div-block-81">
                                            <a href="{{ route('broadcasters.show', ["qisimah_id" => $radio->qisimah_id]) }}" class="station-action-icons w-inline-block">
                                                <img src="{{ asset('images/icons8-eye-24.png') }}" width="20" height="20">
                                            </a>
                                            <form action="{{ route('broadcasters.destroy', ["qisimah_id" => $radio->qisimah_id]) }}" method="post">
                                                {{ csrf_field() }}
                                                <input type="hidden" value="delete" name="_method">
                                                <button type="submit" class="station-action-icons w-inline-block">
                                                    <img src="{{ asset('images/icons8-close-window-20.png') }}" width="20">
                                                </button>
                                            </form>
                                            <a href="{{ route('broadcasters.edit', ["qisimah_id" => $radio->qisimah_id]) }}" class="station-action-icons edit-icon w-inline-block">
                                                <img src="{{ asset('images/icons8-pencil-20.png') }}">
                                            </a>
                                            <a href="" class="station-action-icons w-inline-block">
                                                <img src="{{ asset('images/icons8-hearing-20.png') }}">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        @endif
                    </div>
                    <div data-w-tab="Tab 2" class="broadcast-tab-content w-tab-pane w--tab-active">
                        <div class="section-heading-main-wrapper w-hidden-small w-hidden-tiny">
                            <div class="heading-text-proper">LOGO</div>
                            <div class="heading-text-proper proper-name">NAME</div>
                            <div class="heading-text-proper proper-location">LOCATION</div>
                            <div class="heading-text-proper proper-status">STATUS</div>
                            <div class="heading-text-proper proper-action">ACTION</div>
                        </div>
                        @if ($tvs)
                            @foreach ($tvs as $tv)
                                <div class="broadcasters-list-wrapper">
                                    <div class="station-logo">
                                        <div class="heading-text-proper give-space w-hidden-main w-hidden-medium">LOGO</div>
                                        <img src="{{ asset($tv->logo) }}" class="station-logo">
                                    </div>
                                    <div class="station-name">
                                        <div class="heading-text-proper proper-name give-space w-hidden-main w-hidden-medium">NAME</div>
                                        <div class="text-block-25">{{ $tv->name }}</div>
                                    </div>
                                    <div class="station-location">
                                        <div class="heading-text-proper proper-location give-space w-hidden-main w-hidden-medium">LOCATION</div>
                                        <div class="text-block-25">{{ $tv->getLocation() }}</div>
                                    </div>
                                    <div class="station-status">
                                        <div class="heading-text-proper proper-status give-space w-hidden-main w-hidden-medium">STATUS</div>
                                        <div class="text-block-26">LISTENING</div>
                                    </div>
                                    <div class="station-action">
                                        <div class="heading-text-proper proper-action give-space w-hidden-main w-hidden-medium">ACTION</div>
                                        <div class="div-block-81">
                                            <a href="{{ route('broadcasters.show', ["qisimah_id" => $tv->qisimah_id]) }}" class="station-action-icons w-inline-block">
                                                <img src="{{ asset('images/icons8-eye-24.png') }}" width="20" height="20">
                                            </a>
                                            <form action="{{ route('broadcasters.destroy', ["qisimah_id" => $tv->qisimah_id]) }}" method="post">
                                                {{ csrf_field() }}
                                                <input type="hidden" value="delete" name="_method">
                                                <button type="submit" class="station-action-icons w-inline-block">
                                                    <img src="{{ asset('images/icons8-close-window-20.png') }}" width="20">
                                                </button>
                                            </form>
                                            <a href="{{ route('broadcasters.edit', ["qisimah_id" => $tv->qisimah_id]) }}" class="station-action-icons edit-icon w-inline-block">
                                                <img src="{{ asset('images/icons8-pencil-20.png') }}">
                                            </a>
                                            <a href="" class="station-action-icons w-inline-block">
                                                <img src="{{ asset('images/icons8-hearing-20.png') }}">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection