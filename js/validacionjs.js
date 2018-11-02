// VALIDACION FORMULARIO CONTACTO
	$("#login").validate({
  	rules:{
  		txtUser:{
  			required: true
  		},
      txtPass:{
        required:true

      }

  	},
  	messages:{

  		txtUser:{
  			required: "Debe escribir su Usuario"
  		},
      txtPass:{
        required: "Debe escribir su Contraseña"

      }

  	 },

  submitHandler: function(form){
            var vUser = $('#txtUser').val();
            var vPass = $('#txtPass').val();

            // var vData = {"accion":"login", "txtUser":vUser, "txtPass":vPass}

            if (vUser == 'admin' & vPass == 'adminuan') {
              window.location.href = "../registros.php?v=ok";

            }else{
              alertify.alert('Datos de acceso incorrectos');
              document.getElementById("login").reset();

            }



   }
});