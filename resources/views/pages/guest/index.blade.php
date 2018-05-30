@extends('layouts.guest')
@section('content')
    <div class="richie-modal">
        <div class="div-block-24"><a href="#" class="richie-close w-inline-block" data-ix="modal-close"><img
                        src="images/close-icon.svg" width="17.5"></a>
            {{--<div style="padding-top:56.17021276595745%" class="w-video w-embed"><iframe class="embedly-embed" src="https://cdn.embedly.com/widgets/media.html?url=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DI4rzedjcvMA&src=http%3A%2F%2Fwww.youtube.com%2Fembed%2FI4rzedjcvMA&type=text%2Fhtml&key=96f1f04c5f4143bcb0f2e68c87d65feb&schema=youtube" scrolling="no" frameborder="0" allowfullscreen=""></iframe></div>--}}
            <div style="padding-top:56.17021276595745%" class="w-video w-embed">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/NsqI_ICmimY?rel=0" frameborder="0"
                        allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <h3 class="heading-8">Richie Mensah</h3>
            <div class="text-block-5">LYNX Entertainment</div>
        </div>
    </div>
    <div class="header-cont">
        <div class="wsa"><img src="{{ asset('images/wsawinner.png') }}" width="150"></div>
        <div class="hero-content-parent">
            <div class="header-content">
                <h1 class="h1-display">Track whats being played on radio</h1>
                <div class="type-writer-cont">
                    <div class="seperator"></div>
                    <h2 id="typed" class="h2-display"></h2>
                    <div class="typed-cursor"></div>
                    <div class="typewrt-sign"></div>
                </div>
            </div>
            <div class="div-block" data-ix="load-text-2"><a href="#how-it-works" class="cta-hero-button w-button">How it
                    works</a><a class="cta-hero-button reverse-button w-button" data-ix="form-modal-show">Try now</a></div>
        </div>
    </div>
    <div id="who-is-it-for" class="who-for">
        <div class="div-block-7">
            <h5 class="heading-3">01.</h5>
            <h5 class="heading-3">WHO IS QISIMAH FOR?</h5>
        </div>
        <h1 class="heading altd" data-ix="fadebounce">A single platform for the management and monitoring of music and
            content airplay.</h1>
        <div>
            <div data-duration-in="300" data-duration-out="100" class="tabs w-tabs">
                <div class="tab-menu w-tab-menu">
                    <a data-w-tab="individual artist" class="tab-link w-inline-block w-tab-link w--current">
                        <div>Individual <br>artist</div>
                    </a>
                    <a data-w-tab="Record Labels" class="tab-link w-inline-block w-tab-link">
                        <div>Management Firms <br>/ Record Labels</div>
                    </a>
                    <a data-w-tab="Collective Management  Organisations" class="tab-link w-inline-block w-tab-link">
                        <div class="text-block-7">Collective Management <br>Organisations (CMOs)</div>
                    </a>
                </div>
                <div class="w-tab-content">
                    <div data-w-tab="individual artist" class="tab-pane w-tab-pane w--tab-active">
                        <div class="row-8 w-row">
                            <div class="column-11 w-col w-col-6">
                                <div class="cat-img"></div>
                            </div>
                            <div class="column-8 w-col w-col-6">
                                <p class="new-paragraph">Do you want to know if your music is being played on the radio?
                                    Qisimah will give you live feedback on which station is playing your music. Our platform
                                    can help you identify areas of weakness in your music promotion plan. This will allow
                                    you to make the right adjustments and investments to gain exposure in order to go
                                    mainstream.</p>
                            </div>
                        </div>
                    </div>
                    <div data-w-tab="Record Labels" class="tab-pane w-tab-pane">
                        <div class="row-9 w-row">
                            <div class="column-10 w-col w-col-6">
                                <p class="new-paragraph">Qisimah helps you analyse and compare your artists’performance
                                    against that of  others within the industry. With our credible audio analytics, you can
                                    make the right promotional decisions. We provide you with real time reports enabling you
                                    to track your artists’s performance continually and with ease.</p>
                            </div>
                            <div class="column-9 w-col w-col-6">
                                <div class="cat-img label"></div>
                            </div>
                        </div>
                    </div>
                    <div data-w-tab="Collective Management  Organisations" class="tab-pane w-tab-pane">
                        <div class="row-10 w-row">
                            <div class="w-col w-col-6">
                                <div class="cat-img royalty"></div>
                            </div>
                            <div class="column-7 w-col w-col-6">
                                <p class="new-paragraph">We provide you with an end-to-end solution that will enable you to
                                    effectively fulfill your mandate. Our user friendly platform will allow you to manage
                                    your processes of allocation, collection and distribution.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div id="how-it-works" class="div-block-6">
            <div class="div-block-7">
                <h5 class="heading-3">02.</h5>
                <h5 class="heading-3">How does Qisimah work?</h5>
            </div>
            <div class="how-column w-row">
                <div class="how-columns w-col w-col-3 w-col-stack" data-ix="fadebounce"><img src="{{ asset('images/upload-new.svg') }}"
                                                                                             class="how-icon">
                    <h4 class="heading-2">Upload</h4>
                    <p class="how-paragraph">Upload your content to Qisimah&#x27;s database to start monitoring.</p>
                </div>
                <div class="how-columns w-col w-col-3 w-col-stack" data-ix="fadebounce"><img src="{{ asset('images/monitor.svg') }}"
                                                                                             class="how-icon">
                    <h4 class="heading-2">Monitor</h4>
                    <p class="how-paragraph">Select the broadcasters which you would like to monitor.</p>
                </div>
                <div class="how-columns w-col w-col-3 w-col-stack" data-ix="fadebounce"><img src="{{ asset('images/notification.svg') }}"
                                                                                             class="how-icon">
                    <h4 class="heading-2">Notifications</h4>
                    <p class="how-paragraph">Get real-time notification when your content is aired.</p>
                </div>
                <div class="how-columns w-col w-col-3 w-col-stack" data-ix="fadebounce"><img src="{{ asset('images/reports.svg') }}"
                                                                                             class="how-icon">
                    <h4 class="heading-2">Reports</h4>
                    <p class="how-paragraph">Receive broadcaster statistics and analytics on content uploaded.</p>
                </div>
            </div>
            <div class="upload">
                <div class="div-block-30"><img src="{{ asset('images/upload-new.svg') }}" class="how-icon">
                    <h4 class="forty-man">Upload</h4>
                    <p class="better-how">Upload your content to Qisimah&#x27;s database to start monitoring.</p>
                </div>
                <h1 data-w-id="83e2b44c-c47a-e281-2681-f97b6b139930" style="opacity:0" class="big-text">Upload</h1>
            </div>
            <div class="div-block-31 w-clearfix">
                <div class="monitor-box"><img src="{{ asset('images/monitor_1.svg') }}" class="how-icon">
                    <h4 class="forty-man">Monitor</h4>
                    <p class="better-how">Select the broadcasters which you would like to monitor.</p>
                </div>
                <h1 data-w-id="9560a424-0154-5367-d312-ba8b65c18936" style="opacity:0" class="monitor-text">Monitor</h1>
            </div>
            <div class="div-block-31">
                <div class="div-block-30"><img src="{{ asset('images/reports.svg') }}" class="how-icon">
                    <h4 class="forty-man">Notifications</h4>
                    <p class="better-how">Get real-time notification when your content is aired.</p>
                </div>
                <h1 data-w-id="1bb8de42-a751-4ef1-b192-1d1016a0d9f7" style="opacity:0" class="notification-text">
                    Notifications</h1>
            </div>
            <div class="div-block-31 w-clearfix">
                <div class="reports-box"><img src="{{ asset('images/upload-new.svg') }}" class="how-icon">
                    <h4 class="forty-man">Reports</h4>
                    <p class="better-how">Receive broadcaster statistics and analytics on content uploaded.</p>
                </div>
                <h1 data-w-id="63255dde-6ad9-1578-47bb-ea28d31837e2" style="opacity:0" class="reports-copy">Reports</h1>
            </div>
            <div class="div-block-21"><img src="{{ asset('images/qisimahdash-screen.png') }}"
                                           srcset="{{ asset('images/qisimahdash-screen-p-500.png') }} 500w, {{ asset('images/qisimahdash-screen-p-800.png') }} 800w, {{ asset('images/qisimahdash-screen-p-1080.png') }} 1080w, {{ asset('images/qisimahdash-screen.png') }} 1920w"
                                           sizes="(max-width: 479px) 82vw, (max-width: 767px) 78vw, (max-width: 991px) 80vw, 96vw"
                                           class="image-8"></div>
            <div class="div-block-9"><img src="images/qisimah-dashboard-1.png"
                                          srcset="images/qisimah-dashboard-1-p-500.png 500w, images/qisimah-dashboard-1-p-800.png 800w, images/qisimah-dashboard-1.png 1011w"
                                          sizes="100vw" class="image-2"></div>
        </div>
        <div class="div-block-3">
            <div class="div-block-5">
                <div class="div-block-7">
                    <h5 class="heading-3">01.</h5>
                    <h5 class="heading-3">WHO IS QISIMAH FOR?</h5>
                </div>
                <h1 class="heading altd" data-ix="fadebounce">A single platform for the management and monitoring of music
                    and content airplay.</h1>
                <div class="div-block-16">
                    <div class="cat-collection" data-ix="fadebounce">
                        <div class="div-block-12">
                            <h3 class="heading-4">Individual artist</h3>
                            <p class="new-paragraph">Do you want to know if your music is being played on the radio? Qisimah
                                will give you live feedback on which station is playing your music. Our platform can help
                                you identify areas of weakness in your music promotion plan. This will allow you to make the
                                right adjustments and investments to gain exposure in order to go mainstream.</p>
                        </div>
                    </div>
                    <div class="cat-collection" data-ix="fadebounce">
                        <div class="cat-img label"></div>
                        <div class="div-block-12">
                            <h3 class="heading-4">Artist Management Firms / Record Labels</h3>
                            <p class="new-paragraph">Qisimah helps you analyse and compare your artists’performance against
                                that of  others within the industry. With our credible audio analytics, you can make the
                                right promotional decisions. We provide you with real time reports enabling you to track
                                your artists’s performance continually and with ease.</p>
                        </div>
                    </div>
                    <div class="cat-collection reverse-cow" data-ix="fadebounce">
                        <div class="cat-img royalty"></div>
                        <div class="div-block-12 sssss">
                            <h3 class="heading-4">Collective Management Organisations (CMOs)</h3>
                            <p class="new-paragraph">We provide you with an end-to-end solution that will enable you to
                                effectively fulfill your mandate. Our user friendly platform will allow you to manage your
                                processes of allocation, collection and distribution.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="div-block-2"></div>
    </div>
    @include('components.guest.get-verified')
    <div id="case-studies" class="case-study">
        <div class="div-block-7">
            <h5 class="heading-3">03.</h5>
            <h5 class="heading-3">CASE STUDIES</h5>
        </div>
        <div class="div-block-22">
            <div class="div-block-23">
                <h1 class="heading altd sssswww" data-ix="fadebounce">What music industry players are saying about
                    Qisimah</h1>
            </div>
            <div class="to-the-left w-clearfix">
                <div class="div-block-15 w-clearfix"><a href="#" class="link-block-3 w-inline-block"
                                                        data-ix="modal-show"><img src="images/richie.png" width="200"
                                                                                  srcset="images/richie-p-500.png 500w, images/richie-p-800.png 800w, images/richie.png 1026w"
                                                                                  sizes="(max-width: 479px) 261px, (max-width: 767px) 421px, (max-width: 991px) 349px, 451px"
                                                                                  class="image-5">
                        <div class="div-block-29"></div>
                        <img src="images/play-button.svg" width="75" class="playbutton">
                        <h1 class="heading-6">Richie Mensah</h1></a></div>
                <div class="div-block-15 _55 w-clearfix"><a href="#" class="link-block-3 w-inline-block"
                                                            data-ix="fadebounce"><img src="images/richie-add.png"
                                                                                      width="200"
                                                                                      srcset="images/richie-add-p-500.png 500w, images/richie-add-p-800.png 800w, images/richie-add.png 1026w"
                                                                                      sizes="(max-width: 479px) 261px, (max-width: 767px) 421px, (max-width: 991px) 349px, 451px"
                                                                                      class="image-5"></a></div>
            </div>
        </div>
    </div>
    <div class="trial">
        <div class="div-block-7">
            <h5 class="heading-3">04.</h5>
            <h5 class="heading-3">PACKAGES</h5>
        </div>
        <div class="w-row">
            <div class="w-col w-col-6">
                <h1 class="heading packagess" data-ix="fadebounce">Qisimah is available in four flexible packages.</h1>
                <h5 class="heading-3 payabe">*payable monthly</h5>
            </div>
            <div class="w-col w-col-6">
                <div class="row-5 w-row">
                    <div class="column-4 w-col w-col-6">
                        <div class="text-block-3" data-ix="fadebounce">Basic</div>
                    </div>
                    <div class="w-col w-col-6">
                        <div class="text-block-3 standard" data-ix="fadebounce">Standard</div>
                    </div>
                </div>
                <div class="w-row">
                    <div class="column-4 w-col w-col-6">
                        <div class="text-block-3 premium" data-ix="fadebounce">Premium</div>
                    </div>
                    <div class="w-col w-col-6">
                        <div class="text-block-3 enterprise" data-ix="fadebounce">Enterprise</div>
                    </div>
                </div>
                <a href="#" class="cta-hero-button reverse-button buttom w-button" data-ix="fadebounce">Try now</a></div>
        </div>
    </div>
@endsection