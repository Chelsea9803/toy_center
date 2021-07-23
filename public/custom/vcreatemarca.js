
$(document).ready(function() {
    $('#frmMarca').submit(function(e) {
        e.preventDefault();
        save();
     });
});


function save(){
    var datos = {
              
        ma_nombre: $('#ma_nombre').val(),
        ma_active: $('#ma_active').val(),        

    }
    $.ajax({
        type: "POST",
        url: 'http://localhost/api-toycenter/public/marcas/add',
        data: datos,
        success: function(response)
        {
           console.log(response);

           alert('Marca guardada con éxito');

           window.location.href = "http://localhost/toy_center/public/marcas";
       }
   });
}