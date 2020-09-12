// fills in with latitude and longitude of the register cities already exists inside of database, after 'focus out ' go out from the name city field
$(function(){
    $('#firstCity').focusout(function() {

        var dados = "city=" + $('#firstCity').val();
    
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: '/ProjectDeliveryD/database/findCityRegisters.php',
            async: true,
            data: dados,
            success: function(response) {
               console.log(response);
               $('#firstLatitude').val(response['latitude']);
               $('#firstLongitude').val(response['longitude']);
            }
        });
    
        return false;
    });

    $('#secondCity').focusout(function() {

        var dados = "city=" + $('#secondCity').val();
    
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: '/ProjectDeliveryD/database/findCityRegisters.php',
            async: true,
            data: dados,
            success: function(response) {
               console.log(response);
               $('#secondLatitude').val(response['latitude']);
               $('#secondLongitude').val(response['longitude']);

            }
        });
    
        return false;
    });
    
});

