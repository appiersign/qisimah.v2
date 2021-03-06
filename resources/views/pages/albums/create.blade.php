@extends('layouts.dashboard')
@section('content')
    <div class="add-twitter-modal">
        <div class="form-modal-sub">
            <h1 class="heading-6">Connect <span class="text-span-3">Twitter</span></h1><a href="#"
                                                                                          class="proper-close-4-modal w-inline-block"
                                                                                          data-ix="close-twitter"><img
                        src="images/ic_close_white_256dp_1x.png" width="32"></a>
            <div class="div-block-120">
                <div class="w-embed">
                    <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with"
                         data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>
                </div>
                <div class="w-form">
                    <form id="email-form-2" name="email-form-2" data-name="Email Form 2" action="index.blade.php">
                        <div class="form-submit-wrapper"></div>
                    </form>
                    <div class="w-form-done">
                        <div>Thank you! Your submission has been received!</div>
                    </div>
                    <div class="w-form-fail">
                        <div>Oops! Something went wrong while submitting the form.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="add-social-connection-modal">
        <div class="form-modal-sub">
            <h1 class="heading-6">Connect <span class="text-span-3">Facebook</span></h1><a href="#"
                                                                                           class="proper-close-4-modal w-inline-block"
                                                                                           data-ix="close-facebook-connect"><img
                        src="images/ic_close_white_256dp_1x.png" width="32"></a>
            <div class="div-block-120">
                <div class="w-embed">
                    <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with"
                         data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>
                </div>
                <div class="w-form">
                    <form id="email-form-2" name="email-form-2" data-name="Email Form 2" action="index.blade.php">
                        <div class="form-submit-wrapper"></div>
                    </form>
                    <div class="w-form-done">
                        <div>Thank you! Your submission has been received!</div>
                    </div>
                    <div class="w-form-fail">
                        <div>Oops! Something went wrong while submitting the form.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="edit-artist-modal">
        <div class="form-modal-sub">
            <h1 class="heading-6">Edit artist details</h1>
            <div class="div-block-125">
                <div class="w-form">
                    <form id="email-form-2" name="email-form-2" data-name="Email Form 2" action="index.blade.php">
                        <div class="w-row">
                            <div class="w-col w-col-6"><label for="artist" class="form-label">Current name</label><input
                                        type="text" class="text-field-2 w-input" maxlength="256" name="artist"
                                        data-name="artist" placeholder="Sarkodie" id="artist"></div>
                            <div class="w-col w-col-6"><label for="new-artist-name" class="form-label">Suggested artist
                                    name</label><input type="text" class="text-field-2 w-input" maxlength="256"
                                                       name="new-artist-name" data-name="new artist name"
                                                       placeholder="type new artist name" id="new-artist-name"
                                                       required=""></div>
                        </div>
                        <div class="w-row">
                            <div class="w-col w-col-6"><label for="Station" class="form-label">Current
                                    label</label><input type="text" class="text-field-2 w-input" maxlength="256"
                                                        name="artist-2" data-name="Artist 2" placeholder="Sarkodie"
                                                        id="artist-2"></div>
                            <div class="w-col w-col-6"><label for="Frequency" class="form-label">Suggested label
                                    name</label><input type="text" class="text-field-2 w-input" maxlength="256"
                                                       name="artist-2" data-name="Artist 2" placeholder="Sarkodie"
                                                       id="artist-2"></div>
                        </div>
                        <div class="div-block-119 w-clearfix"><label for="broadcaster-url" class="form-label">Profile
                                picture</label><input type="text" class="text-field-2 logo-field w-input"
                                                      maxlength="256" name="logo-2" data-name="Logo 2"
                                                      placeholder="no image selected" id="logo-2"><input type="submit"
                                                                                                         value="Select logo"
                                                                                                         data-wait="Please wait..."
                                                                                                         class="submit-button-7 w-button">
                        </div>
                        <div class="form-submit-wrapper">
                            <div class="div-block-83"><input type="submit" value="Save" data-wait="Please wait..."
                                                             class="button w-button"></div>
                        </div>
                    </form>
                    <div class="w-form-done">
                        <div>Thank you! Your submission has been received!</div>
                    </div>
                    <div class="w-form-fail">
                        <div>Oops! Something went wrong while submitting the form.</div>
                    </div>
                </div>
            </div>
            <a href="#" class="proper-close-4-modal w-inline-block" data-ix="close-edit-artist-modal"><img
                        src="images/ic_close_white_256dp_1x.png" width="32"></a></div>
    </div>
    <div class="delete-artist-modal">
        <div class="form-modal-sub">
            <h1 class="heading-6">Delete an Artist</h1>
            <div class="div-block-125">
                <div>Are you sure you want to delete <span><strong>Sarkodie</strong></span>?</div>
                <div class="div-block-126"><a href="#" class="button-6 w-button" data-ix="close-delete-artist-modal">CANCEL</a><a
                            href="#" class="button-7 w-button">DELETE</a></div>
            </div>
            <a href="#" class="proper-close-4-modal w-inline-block" data-ix="close-delete-artist-modal"><img
                        src="images/ic_close_white_256dp_1x.png" width="32"></a></div>
    </div>
    <div class="add-new-artist-modal">
        <div class="form-modal-sub">
            <h1 class="heading-6">Add New Artist</h1><a href="#" class="proper-close-4-modal w-inline-block"
                                                        data-ix="close-add-artist-modal"><img
                        src="images/ic_close_white_256dp_1x.png" width="32"></a>
            <div class="div-block-120">
                <div class="w-form">
                    <form id="email-form-2" name="email-form-2" data-name="Email Form 2" action="index.blade.php">
                        <div class="w-row">
                            <div class="w-col w-col-6"><label for="Station" class="form-label">Select
                                    artist:</label>
                                <select id="field-3" name="field-3" data-name="Field 3" class="text-field-2 w-select">
                                    <option value="" disabled selected>Select one...</option>
                                    @if(count($artists))
                                        @foreach($artists as $artist)
                                            <option value="">{{$artist->nick_name}}</option>
                                        @endforeach
                                    @endif
                                </select><a href="#" class="link-3">Cant find your artist? Click here to request
                                    addition</a></div>
                            <div class="w-col w-col-6"><label for="Frequency" class="form-label">Select
                                    label</label><select id="field-2" name="field-2" data-name="Field 2"
                                                         class="text-field-2 w-select">
                                    <option value="">Select one...</option>
                                    <option value="First">First Choice</option>
                                    <option value="Second">Second Choice</option>
                                    <option value="Third">Third Choice</option>
                                </select></div>
                        </div>
                        <div class="div-block-119 w-clearfix"><label for="broadcaster-url" class="form-label">Profile
                                picture</label><input type="text" class="text-field-2 logo-field w-input"
                                                      maxlength="256" name="logo-2" data-name="Logo 2"
                                                      placeholder="no image selected" id="logo-2"><input type="submit"
                                                                                                         value="Select logo"
                                                                                                         data-wait="Please wait..."
                                                                                                         class="submit-button-7 w-button">
                        </div>
                        <div class="form-submit-wrapper">
                            <div class="div-block-83"><input type="submit" value="Save" data-wait="Please wait..."
                                                             class="button w-button"></div>
                        </div>
                    </form>
                    <div class="w-form-done">
                        <div>Thank you! Your submission has been received!</div>
                    </div>
                    <div class="w-form-fail">
                        <div>Oops! Something went wrong while submitting the form.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="upload-song-modal section-3">
        <div class="div-block-26">
            <div class="form-block w-form">
                <form id="upload-song-modal-form" name="email-form" data-name="Email Form"
                      class="modal-upload-song w-clearfix" action="index.blade.php">
                    <a href="#" class="song-upload-modal-close w-inline-block" data-ix="close-upload-song-modal">
                        <img src="images/close-button.png" width="40"
                             srcset="images/close-button-p-500.png 500w, images/close-button-p-800.png 800w, images/close-button-p-1080.png 1080w, images/close-button-p-1600.png 1600w, images/close-button.png 2133w"
                             sizes="100vw" class="image-7"></a>
                    <h1 class="upload-modal-title">Upload new song</h1>
                    <div class="w-row">
                        <div class="column-24 w-col w-col-7"><input type="text" class="text-field w-input"
                                                                    maxlength="256" name="audio-file-2"
                                                                    data-name="Audio File 2"
                                                                    placeholder="no audio file selected"
                                                                    id="audio-file-2" required=""></div>
                        <div class="column-24 w-col w-col-5"><a href="#" class="button-3 w-button">Select audio file</a>
                        </div>
                    </div>
                    <div class="text-block-9">* Recommended file type(s): mp3</div>
                    <div class="text-block-9 sss">* Maximum file size: 7mb</div>
                    <input type="submit" value="Upload" data-wait="Please wait..." class="submit-button w-button"
                           data-ix="next-form"></form>
                <div class="w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                    <div>Oops! Something went wrong while submitting the form.</div>
                </div>
            </div>
        </div>
    </div>
    <div class="song-meta-data-form">
        <div class="song-meta-wrapper">
            <div class="meta-data-form-block w-form">
                <form id="upload-song-meta-data" name="email-form" data-name="Email Form" class="modal-upload-song"
                      action="index.blade.php">
                    <a href="#" class="song-upload-modal-close w-inline-block" data-ix="close-upload-song-modal-2">
                        <img src="images/close-button.png" width="40"
                             srcset="images/close-button-p-500.png 500w, images/close-button-p-800.png 800w, images/close-button-p-1080.png 1080w, images/close-button-p-1600.png 1600w, images/close-button.png 2133w"
                             sizes="100vw" class="image-7"></a>
                    <h1 class="upload-modal-title">Music Metadata</h1>
                    <div class="row-6 w-row">
                        <div class="column-47 w-col w-col-6"><label for="Song-Title"
                                                                    class="meta-data-label">Title</label><input
                                    type="text" class="meta-data-field w-input" maxlength="256" name="Song-Title"
                                    data-name="Song Title" placeholder="song title" id="Song-Title" required=""></div>
                        <div class="column-48 w-col w-col-6"><label for="Song-Version"
                                                                    class="meta-data-label">Version</label><select
                                    id="Song-Version" name="Song-Version" data-name="Song Version"
                                    class="meta-data-field w-select">
                                <option value="Select version">Select version</option>
                                <option value="Original">Original</option>
                                <option value="Remix">Remix</option>
                                <option value="Cover">Cover</option>
                            </select></div>
                    </div>
                    <div class="row-6 w-row">
                        <div class="column-47 w-col w-col-6"><label for="Artist-name"
                                                                    class="meta-data-label">Artist</label><input
                                    type="text" class="meta-data-field w-input" maxlength="256" name="Artist-name"
                                    data-name="Artist Name" placeholder="Select artist" id="Artist-name" required="">
                        </div>
                        <div class="column-48 w-col w-col-6"><label for="Featured-artist" class="meta-data-label">Featured
                                Artist</label><input type="text" class="meta-data-field w-input" maxlength="256"
                                                     name="Featured-artist" data-name="Featured Artist"
                                                     placeholder="select artist" id="Featured-artist" required=""></div>
                    </div>
                    <div class="row-6 w-row">
                        <div class="column-47 w-col w-col-6"><label for="Genre"
                                                                    class="meta-data-label">Genre</label><input
                                    type="text" class="meta-data-field w-input" maxlength="256" name="Genre"
                                    data-name="Genre" placeholder="select Genre " id="Genre" required=""></div>
                        <div class="column-48 w-col w-col-6"><label for="producer" class="meta-data-label">Produced
                                by</label><input type="text" class="meta-data-field w-input" maxlength="256"
                                                 name="producer" data-name="Producer" placeholder="select producer"
                                                 id="producer" required=""></div>
                    </div>
                    <div class="row-6 w-row">
                        <div class="column-47 w-col w-col-6"><label for="album-name"
                                                                    class="meta-data-label">Album</label><input
                                    type="text" class="meta-data-field w-input" maxlength="256" name="album-name"
                                    data-name="Album Name" placeholder="album name" id="album-name" required=""></div>
                        <div class="column-48 w-clearfix w-col w-col-6"><label for="cover-art" class="meta-data-label">Cover
                                Art</label><input type="text" class="cover-art-field w-input" maxlength="256"
                                                  name="cover-art" data-name="Cover Art" placeholder="no file selected"
                                                  id="cover-art" required=""><a href="#"
                                                                                class="meta-data-button-file w-button">Select
                                file</a></div>
                    </div>
                    <div class="w-row">
                        <div class="column-24 w-col w-col-7"></div>
                        <div class="column-24 w-col w-col-5"></div>
                    </div>
                    <div class="row-6 w-row">
                        <div class="column-47 w-col w-col-6"><label class="meta-data-label">Label</label><input
                                    type="text" class="meta-data-field w-input" maxlength="256" name="audio-file-2"
                                    data-name="Audio File 2" placeholder="no audio file selected" id="audio-file-2"
                                    required=""></div>
                        <div class="column-48 w-col w-col-6"><label class="meta-data-label">Release Date</label><input
                                    type="text" class="meta-data-field w-input" maxlength="256" name="audio-file-2"
                                    data-name="Audio File 2" placeholder="no audio file selected" id="audio-file-2"
                                    required=""></div>
                    </div>
                    <input type="submit" value="Save" data-wait="Please wait..."
                           class="meta-data-submit-button w-button"></form>
                <div class="w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                    <div>Oops! Something went wrong while submitting the form.</div>
                </div>
            </div>
        </div>
    </div>

    <div class="">
        <div class="inner-top-wrapper">
            <div class="div-block-16">
                <h1 class="heading-2">Albums</h1>
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

        @include('components.guest.danger-message')

        <div class="form-modal-sub albums-column w-row form-block-7">
            <h1 class="heading-6">add album</h1>
            <a href="{{ route('albums.index') }}" class="proper-close-4-modal w-inline-block" data-ix="close-broadcaster-modal">
                <img src="{{ asset('images/ic_close_white_256dp_1x.png') }}" width="32">
            </a>
            <div class="div-block-82">
                <div class="w-form">
                    <form method="post" enctype="multipart/form-data" action="{{ route('albums.store') }}" name="albums" data-name="Email Form 2">
                        {{ csrf_field() }}
                        <div class="w-row">
                            <div class="w-col w-col-6">
                                <label for="album-title" class="form-label">Album Title:</label>
                                <input id="album-title" value="{{ old('title') }}" type="text" class="text-field-2 w-input" name="title" placeholder="Title">
                            </div>
                            <div class="w-col w-col-6">
                                <label for="album-year" class="form-label">Release Year:</label>
                                <input id="album-year" value="{{ old('year') }}" type="text" class="text-field-2 w-input" name="year" placeholder="eg. {{ date('Y') }}">
                            </div>
                        </div>
                        <div class="w-row">
                            <div class="w-clearfix w-col w-col-6">
                                <label for="album-artist" class="form-label">Artist:</label>
                                <select id="album-artist" name="artist" class="meta-data-field w-select">
                                    <option value="">Select Artist</option>
                                    @if($artists)
                                        @foreach($artists as $artist)
                                            <option value="{{ $artist->id }}">{{ $artist->nick_name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="w-clearfix w-col w-col-6">
                                <label for="album-label" class="form-label">Label:</label>
                                <select id="album-label" name="label" class="meta-data-field w-select">
                                    <option value="">Select Label</option>
                                    @if($labels)
                                        @foreach($labels as $label)
                                            <option value="{{ $label->id }}">{{ $label->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="w-row">
                            <div class="w-clearfix w-col w-col-6">
                                <label for="logo" class="form-label">Album art:</label>
                                <input type="file" class="text-field-2 logo-field w-input" name="art">
                            </div>
                            <div class="w-clearfix w-col w-col-6">
                                <label for="logo" class="form-label"><p></p></label>
                                <div class="div-block-83">
                                    <input type="submit" value="add" data-wait="Please wait..." class="button w-button">
                                </div>
                            </div>
                        </div>
                        <div class="form-submit-wrapper">

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection