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
});