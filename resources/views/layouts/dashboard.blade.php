<html>
<head>
    @include('components.dashboard.head')
</head>
<body class="body">
{{--sidebar--}}
    @include('components.dashboard.sidebar')
{{--/sidebar--}}

{{--song upload form--}}
    @include('components.dashboard.song-upload-form')
{{--/song upload form--}}

<div class="page-wrapper">
    @include('components.dashboard.top-nav')

    @yield('content')
</div>
@include('components.dashboard.scripts')

@yield('custom-scripts')
</body>
</html>