@extends('layouts.wide')
@section('content')
    <div class="welcome-parent w-clearfix">
        <div class="div-block-159">
            <div class="div-block-162">
                <div class="div-block-163">
                    <h1 class="heading-4-copy _2014">Welcome to Qisimah</h1>
                </div>
                <div>
                    <h1 class="heading-4">Find artist</h1>
                    <div>Request access to your artist to start monitoring</div>
                    <div class="find-artist-form-copy">
                        <form action="{{ url('artists/request.do') }}" method="post" class="w-clearfix w-form">
                            {{ csrf_field() }}
                            <input type="search" value="" class="search-box w-input" maxlength="256" name="artist"
                                   placeholder="Search…" id="search" required="">
                            <input type="submit" value="Search" class="search-button-2 w-button">
                        </form>
                    </div>
                </div>

                @if(count($artists))
                    <div class="free-the-wrapper-copy">
                        @foreach($artists as $artist)
                            <a href="{{ route('artists.management.details', ['qisimah_id' => $artist->qisimah_id]) }}">
                                <div class="dont-mind-them w-row">
                                    <div class="w-col w-col-1 w-col-small-6 w-col-tiny-6"><img
                                                src="{{ asset('images/adina10.jpg') }}"
                                                srcset="{{ asset('images/adina10-p-500.jpeg') }} 500w, {{ asset('images/adina10.jpg') }} 575w"
                                                sizes="(max-width: 767px) 50px, (max-width: 991px) 3vw, 1vw"
                                                class="image-13"></div>
                                    <div class="column-67 w-col w-col-11 w-col-small-6 w-col-tiny-6">
                                        <div class="text-block-55">{{ $artist->nick_name }}</div>
                                        <div>{{ $artist->full_name }}</div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
        <div class="div-block-160"></div>
    </div>
    <div class="verification">
        @if($errors->any())
            @include('components.guest.danger-message')
        @endif
        <h1 class="heading-4">Personal Details</h1>
        <div class="form-block-4 w-form">
            <form id="email-form" method="post" name="email-form" data-name="Email Form" data-redirect="/add-artist-filla"
                  redirect="/add-artist-filla" action="{{ route('user.register.handle') }}">
                {{ csrf_field() }}
                <label for="full-name" class="welcome-form-label">Your name</label>
                <input type="text" class="name-fields w-input" maxlength="256" name="name"
                       data-name="full-name" placeholder="enter your name" id="full-name" value="{{ old('name') }}" required>

                <label for="nick_name" class="welcome-form-label">Nick name</label>
                <input type="text" class="name-fields w-input" maxlength="256" name="nick_name"
                       data-name="nick_name" placeholder="enter your nick name" id="nick_name" value="{{ old('nick_name') }}" required>

                <label for="gender" class="welcome-form-label">Gender</label>
                <select id="gender" name="gender" class="name-fields w-select">
                    <option value="" disabled selected>Select one...</option>
                    <option value="m">male</option>
                    <option value="f">female</option>
                </select>
                <label for="Password" class="welcome-form-label">Create Password</label>
                <input type="password" class="name-fields w-input" maxlength="256" name="password"
                                           data-name="Password" placeholder="enter your password" id="Password"
                                           required="">
                <label for="Password-3" class="welcome-form-label">Retype Password</label>
                <input type="password" class="name-fields w-input" maxlength="256" name="password_confirmation"
                                           data-name="Password 2" placeholder="confirm password" id="Password-2"
                                           required="">
                <label for="accounts" class="welcome-form-label">Select account type</label>
                <select id="accounts" name="accounts[]" class="name-fields w-select" multiple>
                    <option value="" disabled selected>Select one...</option>
                    <option value="artist">Artist</option>
                    <option value="producer">Producer</option>
                    <option value="writer">Writer</option>
                    <option value="manager">Manager</option>
                    <option value="label_rep">Label Rep</option>
                </select>
                <input type="submit" value="register" data-wait="Please wait..." class="_50 w-button">
                {{--<input type="submit" value="Verify" data-wait="Please wait..." class="email-button w-button">--}}
            </form>
            <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
            </div>
        </div>
    </div>
@endsection