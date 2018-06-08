$(document).ready(function () {
    $('#same-as-label').on('change', function(e){
        if ($(this).is(':checked')) {
            $('.management-fields').attr('disabled', true);
            $('#management-name').val( $('#label-name').val() );
            $('#management-email').val( $('#label-email').val() );
            // $('#management-logo').val( $('#label-logo').val() );
            $('#management-website').val( $('#label-website').val() );
            $('#management-rep').val( $('#label-rep').val() );
            $('#management-telephone').val( $('#label-telephone').val() );
        } else {
            $('.management-fields').removeAttr('disabled');
        }
    });
});