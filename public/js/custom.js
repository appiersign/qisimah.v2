$(document).ready(function () {
    $('#same-as-label').on('change', function(e){
        if ($(this).is(':checked')) {
            $('.management-fields').attr('readonly', true);
            $('#management-name').val( $('#label-name').val() );
            $('#management-email').val( $('#label-email').val() );
            // $('#management-logo').val( $('#label-logo').val() );
            $('#management-website').val( $('#label-website').val() );
            $('#management-rep').val( $('#label-rep').val() );
            $('#management-telephone').val( $('#label-telephone').val() );
        } else {
            $('.management-fields').removeAttr('readonly');
        }
    });

    $('#summary-artist').on('change', function (e) {
        var $that = $("#summary-song");
        var id = $(this).val();
        if ($(this).val() !== 'all') {
            $.get('/artists/' + id + '/songs', function (data, status) {
                $that.empty();
                $that.append("<option value='all' selected>All</option>");
                data.map( function (obj) {
                    $that.append("<option value='"+ obj.qisimah_id +"'>"+ obj.title +"</option>");
                });
            });
        } else {
            $that.empty();
            $that.append("<option value='all' selected>All</option>");
        }

    });

    $('#general-country').on('change', function (e) {
        var $that = $("#general-broadcaster");
        var id = $(this).val();
        $.get('/countries/' + id + '/broadcasters', function (data, status) {
            console.log(data);
            $that.empty();
            $that.append("<option value='all' selected>All</option>");
            data.map( function (obj) {
                $that.append("<option value='"+ obj.stream_id +"'>"+ obj.name +' '+ obj.frequency+"</option>");
            });
        });
    });

    $('#get-general-report-button').on('click', function (e) {
        e.preventDefault();
        let broadcaster = $('#general-broadcaster').val();
        let artist = $('#summary-artist').val();
        let song = $('#summary-song').val();

        let broadcaster_id = (broadcaster)? broadcaster : 'all';
        let artist_id = (artist)? artist : 'all';
        let song_id = (song)? song : 'all';
        let range = $('#reportrange').val().split(' - ');

        window.location.pathname = 'reports/general/'+ broadcaster_id +'/'+ artist_id +'/'+ song_id +'/'+ new Date(range[0]).toISOString().split('T')[0] +'/'+ new Date(range[1]).toISOString().split('T')[0];
    });

    function drawHeatMap() {
        var options = {
            mapType: 'styledMap',
            zoomLevel: 7,
            showTooltip: true,
            showInfoWindow: true,
            useMapTypeControl: true,
            // User will only be able to view/select custom styled maps.
            mapTypeIds: ['styledMap', 'redEverything', 'imBlue'],
            maps: {
                styledMap: {
                    name: 'Styled Map',
                    styles: [
                        {featureType: 'poi.attraction',
                            stylers: [{color: '#fce8b2'}]},
                        {featureType: 'road.highway',
                            stylers: [{hue: '#0277bd'}, {saturation: -50}]},
                        {featureType: 'road.highway', elementType: 'labels.icon',
                            stylers: [{hue: '#000'}, {saturation: 100}, {lightness: 50}]},
                        {featureType: 'landscape',
                            stylers: [{hue: '#259b24'}, {saturation: 10},{lightness: -22}]}
                    ]},
                redEverything: {
                    name: 'Redden All The Things',
                    styles: [
                        {featureType: 'landscape',
                            stylers: [{color: '#fde0dd'}]},
                        {featureType: 'road.highway',
                            stylers: [{color: '#67000d'}]},
                        {featureType: 'road.highway', elementType: 'labels',
                            stylers: [{visibility: 'off'}]},
                        {featureType: 'poi',
                            stylers: [{hue: '#ff0000'}, {saturation: 50}, {lightness: 0}]},
                        {featureType: 'water',
                            stylers: [{color: '#67000d'}]},
                        {featureType: 'transit.station.airport',
                            stylers: [{color: '#ff0000'}, {saturation: 50}, {lightness: -50}]}
                    ]},
                imBlue: {
                    name: 'All Your Blues are Belong to Us',
                    styles: [
                        {featureType: 'landscape',
                            stylers: [{color: '#c5cae9'}]},
                        {featureType: 'road.highway',
                            stylers: [{color: '#023858'}]},
                        {featureType: 'road.highway', elementType: 'labels',
                            stylers: [{visibility: 'off'}]},
                        {featureType: 'poi',
                            stylers: [{hue: '#0000ff'}, {saturation: 50}, {lightness: 0}]},
                        {featureType: 'water',
                            stylers: [{color: '#0288d1'}]},
                        {featureType: 'transit.station.airport',
                            stylers: [{color: '#0000ff'}, {saturation: 50}, {lightness: -50}]}
                    ]}
            }
        };
    }
});