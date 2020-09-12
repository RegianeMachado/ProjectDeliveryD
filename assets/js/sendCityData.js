// Send datas to register the citys
$(function(){
    $('#btnCityRegister').click(function() {

        var dados = $('#formCityRegister').serialize();
    
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: '/ProjectDeliveryD/database/insertCity.php',
            async: true,
            data: dados,
            success: function(response) {
                alert('Cidade cadastrada com sucesso');
            }
        });
    
        return false;
    });
    
});

