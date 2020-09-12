// Hide and show the div after click
$(function() {
    $('#mainCityRegister').hide();

    $('#linkCityRegister').click(function(){
        $('#mainCityRegister').fadeToggle();
        $('#findDistance').fadeToggle();
       
    });
})
