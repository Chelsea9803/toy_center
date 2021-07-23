$('#frmLogin').on('submit', function (e) {
	e.preventDefault();
	login();
})
function login(){


    var datos = {
		user_email: $('#user_email').val(),
		user_pass: $('#user_pass').val(),
	}

    console.log(datos);
   
    $.ajax({
    headers: { "Accept": "application/json" },
    crossDomain: true,
    dataType: "html",
     type: 'POST',  
     url: 'http://localhost/api-toycenter/public/usuario/login', 
     data: datos
     }).done(function( response ) {  
        response = JSON.parse(response);
        console.log(response);
        alert(response.messages+" Token:"+response.tocken); 
        window.location.href = "http://localhost/toy_center/public/marcas";       
     }).fail(function (jqXHR, textStatus, errorThrown){ 
         alert('Algo salió mal en la petición');
   
     console.log("The following error occured: "+ textStatus +" "+ errorThrown); 
    });
  }