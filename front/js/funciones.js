$(document).ready(function(){
    $("#carrera").change(function(){
        var value = $(this).val();
        if (value == "") {

            $("#artes_carreras").hide("fast");
           $("#ciencias_carreras").hide("fast");
           $("#salud_carreras").hide("fast");
           $("#agro_carreras").hide("fast");
           $("#educacion_carreras").hide("fast");
           $("#educacion_carreras").hide("fast");
           $("#sociales_carreras").hide("fast");
           $("#ingenierias_carreras").hide("fast");
           $("#economicas_carreras").hide("fast");
           $("#economicas_carreras").hide("fast");
           $("#doctorados").hide("fast");
           $("#Especializaciones").hide("fast");
           $("#maestrias").hide("fast");


           $("#artes_carreras").focus();

        }


        if (value == 'Artes') {
          $("#artes_carreras").show("fast");

           $("#ciencias_carreras").hide("fast");
           $("#salud_carreras").hide("fast");
           $("#agro_carreras").hide("fast");
           $("#educacion_carreras").hide("fast");
           $("#educacion_carreras").hide("fast");
           $("#sociales_carreras").hide("fast");
           $("#ingenierias_carreras").hide("fast");
           $("#economicas_carreras").hide("fast");
           $("#economicas_carreras").hide("fast");
           $("#Especializaciones").hide("fast");
           $("#maestrias").hide("fast");


           $("#artes_carreras").focus();

        }

        if (value == 'Ciencias') {

          $("#ciencias_carreras").show("fast");

          $("#artes_carreras").hide("fast");
          $("#salud_carreras").hide("fast");
          $("#agro_carreras").hide("fast");
          $("#educacion_carreras").hide("fast");
          $("#educacion_carreras").hide("fast");
          $("#sociales_carreras").hide("fast");
          $("#ingenierias_carreras").hide("fast");
          $("#economicas_carreras").hide("fast");
          $("#economicas_carreras").hide("fast");
          $("#Especializaciones").hide("fast");
          $("#maestrias").hide("fast");
          $("#artes_carreras").focus();
        }


        if (value == 'Salud') {

          $("#salud_carreras").show("fast");

          $("#artes_carreras").hide("fast");
          $("#ciencias_carreras").hide("fast");
          $("#agro_carreras").hide("fast");
          $("#educacion_carreras").hide("fast");
          $("#educacion_carreras").hide("fast");
          $("#sociales_carreras").hide("fast");
          $("#ingenierias_carreras").hide("fast");
          $("#economicas_carreras").hide("fast");
          $("#economicas_carreras").hide("fast");
          $("#Especializaciones").hide("fast");
          $("#maestrias").hide("fast");

          $("#artes_carreras").focus();
        }

        if (value == 'Ciencias Agropecuarias') {

          $("#agro_carreras").show("fast");

          $("#artes_carreras").hide("fast");
          $("#ciencias_carreras").hide("fast");
          $("#salud_carreras").hide("fast");
          $("#educacion_carreras").hide("fast");
          $("#educacion_carreras").hide("fast");
          $("#sociales_carreras").hide("fast");
          $("#ingenierias_carreras").hide("fast");
          $("#economicas_carreras").hide("fast");
          $("#economicas_carreras").hide("fast");
          $("#Especializaciones").hide("fast");
          $("#maestrias").hide("fast");



          $("#artes_carreras").focus();
        }

        if (value == 'Educación') {

          $("#educacion_carreras").show("fast");

          $("#artes_carreras").hide("fast");
          $("#ciencias_carreras").hide("fast");
          $("#salud_carreras").hide("fast");
          $("#agro_carreras").hide("fast");
          $("#sociales_carreras").hide("fast");
          $("#ingenierias_carreras").hide("fast");
          $("#economicas_carreras").hide("fast");
          $("#economicas_carreras").hide("fast");
          $("#Especializaciones").hide("fast");
          $("#maestrias").hide("fast");





          $("#artes_carreras").focus();
        }

        if (value == 'Ciencias Sociales') {

          $("#sociales_carreras").show("fast");


          $("#artes_carreras").hide("fast");
          $("#ciencias_carreras").hide("fast");
          $("#salud_carreras").hide("fast");
          $("#agro_carreras").hide("fast");
          $("#educacion_carreras").hide("fast");
          $("#ingenierias_carreras").hide("fast");
          $("#economicas_carreras").hide("fast");
          $("#economicas_carreras").hide("fast");
          $("#Especializaciones").hide("fast");
          $("#maestrias").hide("fast");





          $("#artes_carreras").focus();
        }

        if (value == 'Ingenierías') {

          $("#ingenierias_carreras").show("fast");


          $("#artes_carreras").hide("fast");
          $("#ciencias_carreras").hide("fast");
          $("#salud_carreras").hide("fast");
          $("#agro_carreras").hide("fast");
          $("#educacion_carreras").hide("fast");
          $("#sociales_carreras").hide("fast");
          $("#economicas_carreras").hide("fast");
          $("#economicas_carreras").hide("fast");
          $("#Especializaciones").hide("fast");
          $("#maestrias").hide("fast");




          $("#artes_carreras").focus();
        }

        if (value == 'Ciencias Económicas') {

          $("#economicas_carreras").show("fast");



          $("#artes_carreras").hide("fast");
          $("#ciencias_carreras").hide("fast");
          $("#salud_carreras").hide("fast");
          $("#agro_carreras").hide("fast");
          $("#educacion_carreras").hide("fast");
          $("#sociales_carreras").hide("fast");
          $("#ingenierias_carreras").hide("fast");
          $("#Especializaciones").hide("fast");
          $("#maestrias").hide("fast");




          $("#artes_carreras").focus();
        }


        if (value == 'Doctorados') {

          $("#doctorados").show("fast");


          $("#artes_carreras").hide("fast");
          $("#ciencias_carreras").hide("fast");
          $("#salud_carreras").hide("fast");
          $("#agro_carreras").hide("fast");
          $("#educacion_carreras").hide("fast");
          $("#sociales_carreras").hide("fast");
          $("#ingenierias_carreras").hide("fast");
          $("#economicas_carreras").hide("fast");
          $("#Especializaciones").hide("fast");
          $("#maestrias").hide("fast");

          $("#artes_carreras").focus();
        }

        if (value == 'Maestrías') {

          $("#maestrias").show("fast");


          $("#artes_carreras").hide("fast");
          $("#ciencias_carreras").hide("fast");
          $("#salud_carreras").hide("fast");
          $("#agro_carreras").hide("fast");
          $("#educacion_carreras").hide("fast");
          $("#sociales_carreras").hide("fast");
          $("#ingenierias_carreras").hide("fast");
          $("#economicas_carreras").hide("fast");
          $("#Especializaciones").hide("fast");
          $("#doctorados").hide("fast");

          $("#artes_carreras").focus();
        }

        if (value == 'Especializaciones') {

          $("#Especializaciones").show("fast");

          $("#artes_carreras").hide("fast");
          $("#ciencias_carreras").hide("fast");
          $("#salud_carreras").hide("fast");
          $("#agro_carreras").hide("fast");
          $("#educacion_carreras").hide("fast");
          $("#sociales_carreras").hide("fast");
          $("#ingenierias_carreras").hide("fast");
          $("#economicas_carreras").hide("fast");
          $("#doctorados").hide("fast");
          $("#maestrias").hide("fast");

          $("#artes_carreras").focus();
        }


        if (value == 'Pregrados') {
            $("#pregrados").show("fast");
            $("#posgrados").hide("fast");
            $("#posgrados").val('');

            $("#pregrados").focus();

        }


        if (value == 'Posgrados') {

            $("#pregrados").hide("fast");
            $("#posgrados").show("fast");
            $("#pregrados").val('');
            $("#posgrados").focus();

        }




    });
});

  //  --------------------  Función para redireccionar     -----------------------------
  function redireccionarPagina() {
    window.location.href = "http://service.uan.edu.co/common/inscriptions/university_inscription/inscription_formHome.jsp";
  }

// VALIDACION FORMULARIO CONTACTO
  $("#form_uan").validate({
    rules:{
      txtName:{
        required: true
      },
      txtCed:{
        required: true,
        minlength:7
      },
      txtCity:{
        required: true
      },
      txtCelular:{
        required:true,
        minlength:7,
        maxlength:20
      },
      txtEmail:{
        required:true,
        email:true
      },
      programa:{
        required:true
      },
      carrera:{
        required:true
      },

      txtMsj:{
        required:true,
        maxlength:300
      },
      terminos:{
        required:true
      }

    },
    messages:{

      txtName:{
        required: "Debe escribir su Nombre"
      },
      txtCed:{
        required: "Escribe tu cédula",
        minlength: "Ingrese mínimo 7 números"
      },
      txtCity:{
        required: "Seleccione una ciudad"
      },
      txtCelular:{
       required:"Este escribir su Teléfono",
       minlength: "Ingrese mínimo 7 números",
        maxlength: "Debe escribir Máximo 20 números"
      },
      txtEmail:{
        required: "Escribe su E-mail",
        email: "Tu E-mail es incorrecto"
      },
      programa:{
        required:"Seleccione un programa"
      },
      carrera:{
        required: "Seleccione una carrera"
      },

      txtMsj:{
        required:"Déjanos tu comentario",
        maxlength:"Maxímo 300 Caracteres"
      },
      terminos:{
        required: "Acepta los términos | <br>"
      }


     },

  submitHandler: function(form){

          $( "#Enviar" ).prop( "disabled", true );
            var urlc = "";
            var vNom = $('#txtName').val();
            var vCed = $('#txtCed').val();
            var vCity = "Medellin";
            var vEml = $('#txtEmail').val();
            var vCel  = $('#txtCelular').val();
             var vOrigen  = $('#txtOrigen').val();
             var vPrograma = "";
             var vcarrera1 = "";

             var vPregrado = "";
             var vPosgrado = "";

             if (vOrigen == 0) {

                  var vPrograma = $('#carrera').val();


                  var vcarrera1  = $('#artes_carreras').val();
                  var vcarrera2 = $('#ciencias_carreras').val();
                  var vcarrera3  = $('#salud_carreras').val();
                  var vcarrera4  = $('#agro_carreras').val();
                  var vcarrera5  = $('#educacion_carreras').val();
                  var vcarrera6  = $('#sociales_carreras').val();
                  var vcarrera7  = $('#ingenierias_carreras').val();
                  var vcarrera8  = $('#economicas_carreras').val();
                  var vcarrera9  = $('#doctorados').val();
                  var vcarrera10  = $('#maestrias').val();
                  var vcarrera11  = $('#Especializaciones').val();
                  var vPregrado = $('#pregrados').val();
                  var vPosgrado = $('#posgrados').val();

                  var total = vPregrado + vPosgrado;


             }else{
                  var vcarrera1  = $('#carreras2').val();
                  var total = vcarrera1;
                  if (vOrigen ==1) { var vPrograma  = "Artes";}
                  if (vOrigen ==2) { var vPrograma  = "Ciencias Economicas";}
                  if (vOrigen ==3) { var vPrograma  = "Arquitectura";}
                  if (vOrigen ==4) { var vPrograma  = "Comercio Internacional";}
                  if (vOrigen ==5) { var vPrograma  = "Contaduría Pública ";}
                  if (vOrigen ==6) { var vPrograma  = "Administración de Empresas";}
                  if (vOrigen ==7) { var vPrograma  = "Derecho";}
                  if (vOrigen ==8) { var vPrograma  = "Ingeniería Industrial";}
                  if (vOrigen ==9) { var vPrograma  = "Psicología";}
                  if (vOrigen ==10) { var vPrograma  = "Ingeniería Electrónica";}
                  if (vOrigen ==11) { var vPrograma  = "Ingeniería Sistemas";}

             }

            var vMsj  = $('#txtMsj').val();
            var vIdM = $('#txtId').val();


            var vData = {"accion":'ins', "txtName":vNom, "txtCed":vCed, "txtCity":vCity,
            "txtEmail":vEml, "txtCelular":vCel, "programa":vPrograma,
            "carrera":total,
             "txtMsj":vMsj, "idOrigen":vOrigen, "txtId":vIdM}


              var urlc = "controller/contactosController.php";

              $.ajax({
                data: vData,
                type: "POST",
                datatype: "json",
                url: urlc,
               })
              .done(function(data){
                if (data.success)
                {
                  alertify.alert(data.message);
                  document.getElementById("form_uan").reset();
                   $( "#Enviar" ).prop( "disabled", false );
                   // Activamos la redirección luego de 5seg
                  // setTimeout("redireccionarPagina()", 5000);
                }
              else
              {
                alertify.alert(data.message);

                //$("#txtBtn").removeAttr("disabled");
              }
            })
            .fail(function(data){
              alert('algo ha sucedido al conectar con el servidor');
            });
   }
});