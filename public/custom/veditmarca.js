
$(document).ready(function() {
    $('#frmMarca').submit(function(e) {
        e.preventDefault();
        update();
     });
});


function update(){
    var datos = {
              
        ma_nombre: $('#ma_nombre').val(),
        ma_active: $('#ma_active').val(),
        ma_id: $('#ma_id').val()

    }
    $.ajax({
        type: "POST",
        url: 'http://localhost/api-toycenter/public/marcas/update',
        data: datos,
        success: function(response)
        {
           console.log(response);

           alert('Marca actualizada con éxito');

           window.location.href = "http://localhost/toy_center/public/marcas";
       }
   });
}