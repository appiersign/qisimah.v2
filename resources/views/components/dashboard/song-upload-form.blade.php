<div class="upload-song-modal section-3">
    <div class="div-block-26">
        <div class="form-block w-form">
            <form action="#" method="post" id="upload-song-modal-form" name="email-form" data-name="Email Form" class="modal-upload-song w-clearfix">
                <a href="#" class="song-upload-modal-close w-inline-block" data-ix="close-upload-song-modal">
                    <img src="{{ asset('images/close-button.png') }}" width="40" srcset="{{ asset('images/close-button-p-500.png') }} 500w, {{ asset('images/close-button-p-800.png') }} 800w, {{ asset('images/close-button-p-1080.png') }} 1080w, {{ asset('images/close-button-p-1600.png') }} 1600w, {{ asset('images/close-button.png') }} 2133w" sizes="100vw" class="image-7">
                </a>
                <h1 class="upload-modal-title">Upload new song</h1>
                <div class="w-row">
                    <div class="column-24 w-col w-col-7">
                        <input type="text" class="text-field w-input" maxlength="256" name="audio-file-2" data-name="Audio File 2" placeholder="no audio file selected" id="audio-file-2" required=""></div>
                    <div class="column-24 w-col w-col-5"><a href="#" class="button-3 w-button">Select audio file</a>
                    </div>
                </div>
                <div class="text-block-9">* Recommended file type(s): mp3</div>
                <div class="text-block-9 sss">* Maximum file size: 7mb</div>
                <input type="submit" value="Upload" data-wait="Please wait..." class="submit-button w-button" data-ix="next-form">
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

<div class="song-meta-data-form">
    <div class="song-meta-wrapper">
        <div class="meta-data-form-block w-form">
            <form action="#" method="post" id="upload-song-meta-data" name="email-form" data-name="Email Form" class="modal-upload-song"><a href="#" class="song-upload-modal-close w-inline-block" data-ix="close-upload-song-modal-2"><img src="images/close-button.png" width="40" srcset="images/close-button-p-500.png 500w, images/close-button-p-800.png 800w, images/close-button-p-1080.png 1080w, images/close-button-p-1600.png 1600w, images/close-button.png 2133w" sizes="100vw" class="image-7"></a>
                <h1 class="upload-modal-title">Music Metadata</h1>
                <div class="row-6 w-row">
                    <div class="column-47 w-col w-col-6"><label for="Song-Title" class="meta-data-label">Title</label><input type="text" class="meta-data-field w-input" maxlength="256" name="Song-Title" data-name="Song Title" placeholder="song title" id="Song-Title" required=""></div>
                    <div class="column-48 w-col w-col-6"><label for="Song-Version" class="meta-data-label">Version</label><select id="Song-Version" name="Song-Version" data-name="Song Version" class="meta-data-field w-select"><option value="Select version">Select version</option><option value="Original">Original</option><option value="Remix">Remix</option><option value="Cover">Cover</option></select></div>
                </div>
                <div class="row-6 w-row">
                    <div class="column-47 w-col w-col-6"><label for="Artist-name" class="meta-data-label">Artist</label><input type="text" class="meta-data-field w-input" maxlength="256" name="Artist-name" data-name="Artist Name" placeholder="Select artist" id="Artist-name" required=""></div>
                    <div class="column-48 w-col w-col-6"><label for="Featured-artist" class="meta-data-label">Featured Artist</label><input type="text" class="meta-data-field w-input" maxlength="256" name="Featured-artist" data-name="Featured Artist" placeholder="select artist" id="Featured-artist" required=""></div>
                </div>
                <div class="row-6 w-row">
                    <div class="column-47 w-col w-col-6"><label for="Genre" class="meta-data-label">Genre</label><input type="text" class="meta-data-field w-input" maxlength="256" name="Genre" data-name="Genre" placeholder="select Genre " id="Genre" required=""></div>
                    <div class="column-48 w-col w-col-6"><label for="producer" class="meta-data-label">Produced by</label><input type="text" class="meta-data-field w-input" maxlength="256" name="producer" data-name="Producer" placeholder="select producer" id="producer" required=""></div>
                </div>
                <div class="row-6 w-row">
                    <div class="column-47 w-col w-col-6"><label for="album-name" class="meta-data-label">Album</label><input type="text" class="meta-data-field w-input" maxlength="256" name="album-name" data-name="Album Name" placeholder="album name" id="album-name" required=""></div>
                    <div class="column-48 w-clearfix w-col w-col-6"><label for="cover-art" class="meta-data-label">Cover Art</label><input type="text" class="cover-art-field w-input" maxlength="256" name="cover-art" data-name="Cover Art" placeholder="no file selected" id="cover-art" required=""><a href="#" class="meta-data-button-file w-button">Select file</a></div>
                </div>
                <div class="w-row">
                    <div class="column-24 w-col w-col-7"></div>
                    <div class="column-24 w-col w-col-5"></div>
                </div>
                <div class="row-6 w-row">
                    <div class="column-47 w-col w-col-6"><label class="meta-data-label">Label</label><input type="text" class="meta-data-field w-input" maxlength="256" name="audio-file-2" data-name="Audio File 2" placeholder="no audio file selected" id="audio-file-2" required=""></div>
                    <div class="column-48 w-col w-col-6"><label class="meta-data-label">Release Date</label><input type="text" class="meta-data-field w-input" maxlength="256" name="audio-file-2" data-name="Audio File 2" placeholder="no audio file selected" id="audio-file-2" required=""></div>
                </div><input type="submit" value="Save" data-wait="Please wait..." class="meta-data-submit-button w-button"></form>
            <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
            </div>
        </div>
    </div>
</div>