
function deleteMa(ma_id){

    let isBoss = confirm("Desea Eliminar la marca?");

    if(isBoss){

        var datos = {             
      
            ma_id: ma_id
    
        }
        $.ajax({
            type: "POST",
            url: 'http://localhost/api-toycenter/public/marcas/delete',
            data: datos,
            success: function(response)
            {
               console.log(response);
    
               alert('Marca eliminada con éxito');
    
               window.location.href = "http://localhost/toy_center/public/marcas";
           }
       });


    }
   
}