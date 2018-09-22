<div class="tabs-menu w-tab-menu">
    <a data-w-tab="radio" class="dash-tabs-link w-inline-block w-tab-link {{ (Session::get('tab') === null)? 'w--current' : ''  }}" data-ix="show-bar">
        <div>radio</div>
        <div class="tab-active-bar"></div>
    </a>
    <a data-w-tab="TV" class="dash-tabs-link w-inline-block w-tab-link {{ (Session::get('tab') == 'tv')? 'w--current': ''  }}" data-ix="show-bar">
        <div>TV</div>
        <div class="tab-active-bar"></div>
    </a>
    <a data-w-tab="Streams" class="dash-tabs-link w-inline-block w-tab-link {{ (Session::get('tab') == 'streams')? 'w--current': ''  }}" data-ix="show-bar">
        <div>STREAMS</div>
        <div class="tab-active-bar"></div>
    </a>
    <a data-w-tab="Facebook" class="dash-tabs-link w-inline-block w-tab-link {{ (Session::get('tab') == 'facebook')? 'w--current': ''  }}" data-ix="show-bar">
        <div>FACEBOOK</div>
        <div class="tab-active-bar"></div>
    </a>
    <a data-w-tab="YouTube" class="dash-tabs-link w-inline-block w-tab-link {{ (Session::get('tab') === 'youtube')? 'w--current': ''  }}" data-ix="show-bar">
        <div>YOUTUBE</div>
        <div class="tab-active-bar"></div>
    </a>
    <a href="{{ route('artists.instagrams.index', ['artist_qisimah_id' => '5b73d8a26a874']) }}" class="dash-tabs-link w-inline-block w-tab-link {{ (Session::get('tab') === 'instagram')? 'w--current': ''  }}" data-ix="show-bar">
        <div>INSTAGRAM</div>
        <div class="tab-active-bar"></div>
    </a>
    <a data-w-tab="twitter" class="dash-tabs-link twit w-inline-block w-tab-link {{ (isset($request) && $request->session()->get('tab') == 'twitter')? 'w--current': ''  }}" data-ix="show-bar">
        <div>TWItter</div>
        <div class="tab-active-bar"></div>
    </a>
    <a data-w-tab="Milestone" class="dash-tabs-link milli w-inline-block w-tab-link" data-ix="show-bar">
        <div>Milestone</div>
        <div class="tab-active-bar"></div>
    </a>
</div>