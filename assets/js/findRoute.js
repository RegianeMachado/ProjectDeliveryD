$(function(){
    $('#map').hide();
    
    // Use the google maps api to find the routes
    $('#showDistance').click(function() {
        $('#map').fadeToggle();

        var firstLatitude = $('#firstLatitude').val();
        var firstLongitude = $('#firstLongitude').val();

        var secondLatitude = $('#secondLatitude').val();
        var secondLongitude = $('#secondLongitude').val();

        $('#iframeMap').attr("src",'https://maps.google.com/maps?saddr='+firstLatitude+','+firstLongitude+ '&daddr='+ secondLatitude+' , '+ secondLongitude+' &output=embed');

        if($('input').val() == '') {
            alert('Por favor, digite as informações que deseja buscar');
        }

        var dados = $('#findDistance').serialize();
    
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: '/ProjectDeliveryD/findLowerLocation.php',
            async: true,
            data: dados,
            success: function(response) {
               $('#resultDistance').html(response);
            }
        });
    
        return false;
    });
    
});

