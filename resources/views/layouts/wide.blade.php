<!DOCTYPE html>
<!--  Last Published: Wed May 23 2018 16:43:43 GMT+0000 (UTC)  -->
<html data-wf-page="5b033451a6a86140aff0a9ee" data-wf-site="5af81e784818965bd6b92e69">
<head>
    @include('components.wide.head')
</head>

<body>
<div class="section-4">
    @yield('content')
    <div class="div-block-64"></div>
</div>

@include('components.scripts')
<script src="{{ asset('js/qisimahfinal.js') }}" type="text/javascript"></script>
</body>
</html>