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
                                    artist:</label><select id="field-3" name="field-3" data-name="Field 3"
                                                           class="text-field-2 w-select">
                                    <option value="">Select one...</option>
                                    <option value="First">First Choice</option>
                                    <option value="Second">Second Choice</option>
                                    <option value="Third">Third Choice</option>
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
    <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease-in-out-quart"
         data-no-scroll="1" class="navbar w-nav">
        <div class="container w-container"><a href="#" class="brand w-nav-brand"><img
                        src="images/Qisimah-logo-qhite.gif" width="726"></a>
            <nav role="navigation" class="nav-menu w-nav-menu">
                <div class="srcoll-bar-wrap"><a href="index.html" class="nav-link w-nav-link">Dashboard</a><a href="#"
                                                                                                              class="nav-link w-nav-link">Ads
                        Dashboard</a><a href="artists.html" class="nav-link w-nav-link w--current">Artists</a><a
                            href="albums.html" class="nav-link w-nav-link">Albums</a><a href="broadcasters.html"
                                                                                        class="nav-link w-nav-link">Broadcasters</a>
                    <p class="nav-separator-text">Monitoring</p><a href="songs.html"
                                                                   class="nav-link w-nav-link">Songs</a><a href="#"
                                                                                                           class="nav-link w-nav-link">Ads</a><a
                            href="charts.html" class="nav-link w-nav-link">Charts</a>
                    <div class="drop-parent">
                        <div class="drop-triger" data-ix="open-drop-menu">
                            <div class="div-block-19" data-ix="open-drop-menu">
                                <div class="reports-head" data-ix="open-drop-menu">Reports</div>
                                <div class="open-and-close-drop">+</div>
                            </div>
                        </div>
                        <div class="drop-child"><a href="summary-report.html"
                                                   class="dropnav-links w-nav-link">Summary</a><a href="compare.html"
                                                                                                  class="dropnav-links w-nav-link">Compare</a><a
                                    href="general-reports.html" class="dropnav-links w-nav-link">General Reports</a>
                        </div>
                    </div>
                    <p class="nav-separator-text">Account</p><a href="settings.html" class="nav-link w-nav-link">Settings</a>
                    <div class="drop-parent-2">
                        <div class="admin-drop-triger" data-ix="open-admin-drop-menu">
                            <div class="div-block-19">
                                <div class="reports-head-2">Admin</div>
                                <div class="admin-open-and-close-drop">+</div>
                            </div>
                        </div>
                        <div class="admin-drop-child"><a href="email-input.html" class="dropnav-links-2 w-nav-link">Email
                                Verification</a><a href="add-artist-details.html" class="dropnav-links-2 w-nav-link">Add
                                Role &amp; Details</a><a href="add-artist-filla.html"
                                                         class="dropnav-links-2 w-nav-link">Another page</a><a
                                    href="new-signup.html" class="dropnav-links-2 w-nav-link">Welcome Screen</a><a
                                    href="#" class="dropnav-links-2 w-nav-link">Admin Dashboard</a><a href="#"
                                                                                                      class="dropnav-links-2 w-nav-link">Client
                                Mgt</a><a href="#" class="dropnav-links-2 w-nav-link">User Mgt.</a><a href="#"
                                                                                                      class="dropnav-links-2 w-nav-link">Reporting
                                Tool</a></div>
                    </div>
                </div>
            </nav>
            <div class="menu-button w-nav-button">
                <div class="icon-3 w-icon-nav-menu"></div>
            </div>
        </div>
    </div>
    <div class="top-nav">
        <div data-delay="0" class="dropdown-2 w-dropdown">
            <div class="dropdown-toggle-2 w-dropdown-toggle">
                <div class="w-icon-dropdown-toggle"></div>
                <div>All Artists</div>
            </div>
            <nav class="dropdown-list-3 w-dropdown-list"><a href="#"
                                                            class="artist-dashboard-drop w-dropdown-link">All</a><a
                        href="#" class="artist-dashboard-drop w-dropdown-link">Kidi</a><a href="#"
                                                                                          class="artist-dashboard-drop w-dropdown-link">Kwame
                    Eugene</a><a href="#" class="artist-dashboard-drop w-dropdown-link">Miss Vee</a></nav>
        </div>
        <div class="div-block-11">
            <div data-delay="120" data-hover="1" class="dropdown-3 _444444 w-dropdown">
                <div class="dropdown-toggle-3 _45455 w-dropdown-toggle">
                    <div class="icon-2 w-icon-dropdown-toggle"></div>
                    <div>GH</div>
                </div>
                <nav class="dropdown-list-3 w-dropdown-list"><a href="#" class="artist-dashboard-drop w-dropdown-link">All</a><a
                            href="#" class="artist-dashboard-drop w-dropdown-link">Togo</a><a href="#"
                                                                                              class="artist-dashboard-drop w-dropdown-link">Ghana</a><a
                            href="#" class="artist-dashboard-drop w-dropdown-link">South Africa</a></nav>
            </div>
            <div class="div-block-14">
                <div data-delay="100" data-hover="1" class="dropdown-4 w-clearfix w-dropdown">
                    <div class="dropdown-toggle w-dropdown-toggle">
                        <div class="div-block-10"><img src="images/profile-img_1profile-img.jpg" width="75"
                                                       class="image-4"></div>
                    </div>
                    <nav class="dropdown-list w-dropdown-list">
                        <div class="text-block-20">Hey! <span>Kofi</span></div>
                        <a href="#" class="dropdown-link w-dropdown-link">Profile</a><a href="#"
                                                                                        class="dropdown-link w-dropdown-link">Settings</a><a
                                href="#" class="dropdown-link w-dropdown-link">Log out</a></nav>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="inner-top-wrapper">
            <div class="div-block-16">
                <h1 class="heading-2">Artists</h1>
                <div>
                    <a href="#" class="upload-song-button w-inline-block" data-ix="upload-song-modal-trigger">
                        <img src="https://uploads-ssl.webflow.com/5ace5bf2286b145321f46e32/5ad49a1a0e93f33a9edcb8eb_upload-to-the-cloud.svg"
                             width="30">
                        <div class="div-block-18">
                            <div class="text-block-6">Upload song</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="qisimah-container-main">
            <div class="div-block-118">
                <a href="#" class="link-block-5 w-inline-block" data-ix="add-new-artist-modal">
                    <div>Add new artist</div>
                </a>
            </div>
            <div class="w-row">
                @if(empty($user->artists))
                    You have no artist linked to your account
                @else
                    @foreach($user->artists as $artist)

                        <div class="w-col w-col-6 w-col-stack">
                            <div class="artist-cards">
                                <div class="image-wrapper-artists">
                                    <img src="images/adina10.jpg" srcset="images/adina10-p-500.jpeg 500w, images/adina10.jpg 575w" sizes="(max-width: 479px) 100vw, (max-width: 692px) 83vw, (max-width: 767px) 575px, (max-width: 991px) 45vw, 20vw" class="image-12"></div>
                                <div class="div-block-116">
                                    <div class="text-block-40">{{ $artist->nick_name }}</div>
                                    <div class="text-block-44">{{ $artist->label->name }}</div>
                                    <div class="row-10 w-row">
                                        <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6">
                                            <div class="text-block-41">ALBUMS</div>
                                        </div>
                                        <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6">
                                            <div class="text-block-42">210</div>
                                        </div>
                                    </div>
                                    <div class="row-10 w-row">
                                        <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6">
                                            <div class="text-block-41">TOTAL SONGS</div>
                                        </div>
                                        <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6">
                                            <div class="text-block-42">214</div>
                                        </div>
                                    </div>
                                    <div class="row-10 w-row">
                                        <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6">
                                            <div class="text-block-41">RANK</div>
                                        </div>
                                        <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6">
                                            <div class="text-block-42">4</div>
                                        </div>
                                    </div>
                                    <div class="row-10 w-row">
                                        <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6">
                                            <div class="text-block-41">PLAYS</div>
                                        </div>
                                        <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6">
                                            <div class="text-block-42">1454</div>
                                        </div>
                                    </div>
                                    <div class="div-block-117"></div>
                                    <div class="text-block-43">CONNECT SOCIAL MEDIA</div>
                                    <div class="row-11 w-row">
                                        <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3"><a href="#"
                                                                                                 class="connect-active w-inline-block"><img
                                                        src="https://uploads-ssl.webflow.com/5ace5bf2286b145321f46e32/5ade2f6c4682eaa5b7e28353_036-facebook.svg"
                                                        width="32"></a></div>
                                        <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3"><a href="#"
                                                                                                 class="connect-inactive w-inline-block"><img
                                                        src="https://uploads-ssl.webflow.com/5ace5bf2286b145321f46e32/5ade301a4682ea0de0e283b8_008-twitter.svg"
                                                        width="32"></a></div>
                                        <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3"><a href="#"
                                                                                                 class="connect-inactive w-inline-block"><img
                                                        src="images/029-instagram.svg" width="32"></a></div>
                                        <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3"><a href="#"
                                                                                                 class="connect-inactive w-inline-block"><img
                                                        src="images/001-youtube.svg" width="32"></a></div>
                                    </div>
                                    <div class="row-11 w-row">
                                        <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3"><a href="#"
                                                                                                 class="connect-inactive w-inline-block"><img
                                                        src="images/icons8-google-play-music.svg" width="32"></a></div>
                                        <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3"><a href="#"
                                                                                                 class="connect-inactive w-inline-block"><img
                                                        src="images/icons8-deezer.svg" width="32"></a></div>
                                        <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3"><a href="#"
                                                                                                 class="connect-inactive w-inline-block"><img
                                                        src="images/012-spotify.svg" width="32"></a></div>
                                        <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3"><a href="#"
                                                                                                 class="connect-inactive w-inline-block"><img
                                                        src="images/013-soundcloud.svg" width="32"></a></div>
                                    </div>
                                </div>
                                <div class="edit-delete-wrapper"><a href="#" class="edit-artist-trigger w-inline-block"
                                                                    data-ix="edit-artist"><img
                                                src="images/icons8-pencil-20.png"></a><a href="#"
                                                                                         class="delete-artist-trigger w-inline-block"
                                                                                         data-ix="delete-artist-warning"><img
                                                src="images/icons8-close-window-20.png"></a></div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection