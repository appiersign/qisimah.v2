<div class="tag-wrapper" style="height: 10px">
    @if(session()->has('success'))
        <div class="alert positive-alert">
            <div class="alert-content">
                <img src="{{ asset('images/Positive-Icon2x.svg') }}" class="alert-icon">
                <div class="alert-message">{{ session('success') }}</div>
            </div>
            <a href="#" class="alert-close-wrapper w-inline-block"><img
                        src="https://uploads-ssl.webflow.com/5af07f2ff396aa76e7a9deae/5af07f30f396aa1c08a9deeb_Cross%402x.svg"
                        width="8" class="close-alert"></a></div>
        <div class="divider"></div>
    @endif
</div>