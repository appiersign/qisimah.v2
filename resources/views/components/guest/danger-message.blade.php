<div class="tag-wrapper">
        <div class="alert error-alert">
            @foreach($errors->all() as $error)
            <div class="alert-content">
                <img src="https://uploads-ssl.webflow.com/5af07f2ff396aa76e7a9deae/5af07f30f396aab96ca9dedd_Error%20Icon%402x.svg"
                     class="alert-icon">

                <div class="alert-message">
                    {{ $error }}
                </div>
                <br>
            </div>
            @endforeach
        </div>
</div>