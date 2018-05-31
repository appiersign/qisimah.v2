@extends('layouts.guest')
@section('content')
    <div class="section-3">
        <div class="div-block-13">
            <div class="div-block-7">
                <h5 class="heading-3">01.</h5>
                <h5 class="heading-3">ABOUT US</h5>
            </div>
            <h1 class="heading altd">The Qisimah Story</h1>
            <p class="about-paragraph">Like people, we believe audio music files leave behind a rich trail of both
                digital and offline breadcrumbs which if processed effectively can uncover patterns and insights that
                can help various stakeholders in the music industry make more prudent decisions.<br><br>We are a music
                consumption data company that strives to assist our customers to appreciate their music, audiences and
                the markets which they operate in by providing meaning to their radio airplay data.</p>
        </div>
    </div>
    <div class="advisors">
        <div class="div-block-7">
            <h5 class="heading-3 whittess">02.</h5>
            <h5 class="heading-3 whittess">ADVISERS</h5>
        </div>
        <h1 class="heading altd whhites">We are backed by the finest brains in business and music.</h1>
        <div class="row-3 w-row">
            <div class="advisor-column w-col w-col-4"><a href="#" class="link-block-2 w-inline-block"><img
                            src="images/8.png" class="image-3">
                    <div class="div-block-14"><h4 class="heading-5">Jorn Lyseggen</h4>
                        <p class="paragraph-4">Meltwater Outside Insight</p></div>
                </a></div>
            <div class="advisor-column w-col w-col-4"><a href="#" class="link-block-2 w-inline-block"><img
                            src="images/5.png" srcset="images/5-p-500.png 500w, images/5.png 650w"
                            sizes="(max-width: 479px) 88vw, (max-width: 767px) 87vw, (max-width: 991px) 29vw, 32vw"
                            class="image-3">
                    <div class="div-block-14"><h4 class="heading-5">Colin Gayle</h4>
                        <p class="paragraph-4">CEO - ACA</p></div>
                </a></div>
            <div class="advisor-column w-col w-col-4"><a href="#" class="link-block-2 w-inline-block"><img
                            src="images/2.png" class="image-3">
                    <div class="div-block-14"><h4 class="heading-5">Naima Mclean</h4>
                        <p class="paragraph-4">Project Manager - ACA South Africa</p></div>
                </a></div>
        </div>
        <div class="row-4 w-row">
            <div class="advisor-column w-col w-col-4"><a href="#" class="link-block-2 w-inline-block"><img
                            src="images/7.png" class="image-3">
                    <div class="div-block-14"><h4 class="heading-5">Aaron Fu</h4>
                        <p class="paragraph-4">Managing Director - MEST</p></div>
                </a></div>
            <div class="advisor-column w-col w-col-4"><a href="#" class="link-block-2 w-inline-block"><img
                            src="images/4.png" class="image-3">
                    <div class="div-block-14"><h4 class="heading-5">Roger L. Patton</h4>
                        <p class="paragraph-4">ACA</p></div>
                </a></div>
            <div class="advisor-column w-col w-col-4"><a href="#" class="link-block-2 w-inline-block"><img
                            src="images/3.png" class="image-3">
                    <div class="div-block-14"><h4 class="heading-5">Yvette Gayle</h4>
                        <p class="paragraph-4">Executive VP of Communication - ACA</p></div>
                </a></div>
        </div>
    </div>
    @include('components.guest.get-verified')
    <div class="section-4">
        <div class="div-block-7">
            <h5 class="heading-3">03.</h5>
            <h5 class="heading-3">PARTNERS</h5>
        </div>
        <div class="row-2 w-row">
            <div class="column w-col w-col-4"><img src="images/mest-logo.png" width="200"></div>
            <div class="column-2 w-col w-col-4"><img src="images/musiga2.png" width="200"></div>
            <div class="w-col w-col-4"><img src="images/ACA.png" width="200"></div>
        </div>
    </div>
@endsection

@section('footer')
    @include('components.footer')
@endsection