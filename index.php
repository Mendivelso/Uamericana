<?php
	if(empty($_GET)){
		$Id = 0;
	}else{
		$Id = $_GET['v'];
	}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="estudiar, derecho, negocios, internacionales, administración, empresa, contaduría, ingeniería, sistemas, universidad, ingeniería industrial" />
	<meta name="rights" content="Derechos reservados ® Coruniamericana." />
	<meta name="description" content="Estudia tu carrera profesional o estudio de posgrado en la Americana. Conoce los beneficios, programas de internacionalización y descuentos económicos." />
	<meta name="generator" content="Joomla! - Open Source Content Management" />
	<title>Corporación Universitaria Americana - Sede Medellín</title>
	<link href="http://americana.edu.co/medellin/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <link rel="stylesheet" type="text/css" href="front/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="front/css/style.css">
    <link rel="stylesheet" type="text/css" href="front/css/alertify.core.css">
    <link rel="stylesheet" type="text/css" href="front/css/alertify.default.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="front/css/sweetalert.css">
    <link rel="shortcut icon" href="img/favicon.ico"/>

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="60">


	<div class="btnes">
	   <div class="pse">

	      <h3><a href="https://www.psepagos.co/PSEHostingUI/ShowTicketOffice.aspx?ID=6648" target="_blank"><img style="position: relative;
	      top: 5px;
	      margin-right: 31px;
	      margin-left: 5px;
	      left: 20px;" src="http://www.americana.edu.co/medellin/images/logo-pse2.png" alt=""/>Pago en línea</a></h3>
	      <a style="color: #94a0b5;
	      text-align: center;
	      font-size: 9px;
	      margin-left: 32px;" href="http://descubre.pse.com.co/persona_pt.html" target="_blank">Beneficios y requisitos para pagar por PSE</a>

	   </div>
	   <div class="pse">
	      <h3><a href="http://www.americana.edu.co/medellin/index.php?option=com_content&view=article&id=189">
	         <i style="    font-size: 31px;position: relative;top: 7px;margin-right: 21px;margin-left: 13px;left: 20px;color: #fff;"  class="fa fa-pencil-square-o" aria-hidden="true"></i>Liquidación</a>
	      </h3>
	      <p style="    color: #94a0b5;
	      text-align: center;
	      font-size: 11px;
	      margin-left: 6px;"> Solicita aquí la liquidación en línea</p>

	   </div>

	<a href="http://ciid.co/medellin/" > <div style="background-image: url('http://www.americana.edu.co/medellin/images/sitio/novedades/2018/Julio/botonciid2018.png');background-position: bottom;" class="pse"></div>     </a>

	<!--<a href="http://www.americana.edu.co/evaluaciondocente/" > <div style="background-image: url(/medellin/images/sitio/Estudiantes/Evaluacion-docente-Boton-2018.png);background-position: bottom;" class="pse">
	     </a></div>-->

	</div>


    <header class="container">
      <div class="row pdd">
        <div class="col-xs-12 col-sm-8 col-md-8"><img src="front/images/logo.png" class="logo" alt="Corporación Universitaria Americana" title="Corporación Universitaria Americana - Sede Medellín"></div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <ul class="redes">
            <li><a href="https://www.facebook.com/americana.med/" target="black" title="Facebook"><img src="front/images/facebook.png" alt="Facebook"></a></li>
            <li><a href="https://www.instagram.com/americana.med/" target="black" title="Instagram"><img src="front/images/instagram.png" alt="Instagram"></a></li>
            <li><a href="https://www.youtube.com/channel/UCfZay7MfSMXHEwCq0VudYrw" target="black" title="Youtube"><img src="front/images/youtube-2.png" alt="Buscar"></a></li>
          </ul>
        </div>
      </div>
    </header>



    <div class="container" id="main">
      <div class="row pdd4">
        <div class="col-xs-1 col-sm-1 col-md-3"><h2></h2></div>
        <div class="col-xs-12 col-sm-6 col-md-4">
        	<img src="front/images/texto.png" width="100%" alt="Acreditación Americana">
			<img src="front/images/estudiantes.png" width="100%" class="estudiantes_movil">
        </div>
        <div class="col-xs-12 col-sm-5 col-md-4">

             <form class="form"  id="form_uan">
              <input type="hidden" name="accion" value="ins">
              <p class="text-center">INSCRIPCIONES <br class="none"> ABIERTAS 2019 - I <br class="none"> PREGRADOS / POSGRADOS </p>
              <center><img src="front/images/puntos-03.png" width="90%" class="text-center" alt="Separador"></center>
              <div class="form-group col-xs-offset-0 col-md-offset-1 col-xs-12 col-md-10">
                <input type="text" name="txtName" id="txtName" class="form-control input" placeholder="Nombre *" required >
              </div>
              <div class="form-group col-xs-offset-0 col-md-offset-1 col-xs-12 col-md-10">
                <input type="text" name="txtCed" id="txtCed" class="form-control input" placeholder="Cédula *" required maxlength="10">
              </div>

              <div class="form-group col-xs-offset-0 col-md-offset-1 col-xs-12 col-md-10">
                <input type="text" name="txtCelular" id="txtCelular" class="form-control input" placeholder="Celular *" required maxlength="15">
              </div>
               <div class="form-group col-xs-offset-0 col-md-offset-1 col-xs-12 col-md-10">
                <input type="email" name="txtEmail" id="txtEmail" class="form-control input" placeholder="Correo Electrónico *" required>
              </div>
              <label class="col-xs-offset-0 col-md-offset-1 col-xs-12 col-md-10 label1" >Programa de interés</label>
             <div class="form-group col-xs-offset-0 col-md-offset-1 col-xs-12 col-md-10">
                <select class="form-control input" name="programa" id="carrera" required="">
                    <option value="Pregrados">Pregrados</option>
                    <option value="Posgrados">Posgrados</option>
                </select>
                  <select class="form-control input select" name="carrera" id="pregrados" style="margin-top: 3px;">
                    <option value="">Seleccione...</option>
                      <option>Licenciatura en pedagogía de la primera infancia</option>
                      <option>Administración de Empresas</option>
                      <option>Derecho</option>
                      <option>Ingeniería de Sistemas </option>
                      <option>Ingeniería Industrial</option>
                      <option>Negocios Internacionales</option>
                      <option>Contaduría Pública</option>
                      <option>Virtual - Administración de Empresas</option>
                      <option>Virtual - Contaduría Pública</option>
                      <option>Virtual - Ingeniería Industrial</option>
                      <option>Virtual - Negocios Internacionales</option>

                </select>

                 <select class="form-control input select" name="carrera" id="posgrados" style="margin-top: 3px;">
                      <option value="">Seleccione...</option>
                      <option>Especialización en Gerencia de Talento Humano</option>
                      <option>Especialización en Derecho Administrativo</option>
                      <option>Especialización en Derecho Penal</option>
                      <option>Especialización en Gerencia Tributaria</option>
                      <option>Especialización en Seguridad Informática</option>
                      <option>Especialización en Gerencia Empresarial y Competitividad</option>
                      <option>Especialización en Gerencia de Mercadeo</option>
                </select>

              </div>
               <div class="form-group col-xs-offset-0 col-md-offset-1 col-xs-12 col-md-10">
                <textarea class="form-control input" placeholder="Mensaje *" name="txtMsj" id="txtMsj" rows="4" required="" maxlength="200"></textarea>
              </div>
              <center><img src="front/images/puntos-03.png" width="90%" class="text-center" alt="Separador"></center>
              <center><input type="checkbox" id="terminos" name="terminos" checked="" required="">
              <label  for="terminos" class="label1"><a href="#" target="_black"  title="Ver documento" class="termi">Acepto términos y condiciones</a></label></center>
               <div class="form-group">
                <center>
                  <div class="boton">
                    <input type="hidden" name="txtOrigen" value="0" id="txtOrigen">
                    <input type="hidden" name="txtId" id="txtId" value=<?php echo $Id ?>>
                    <button type="submit" class="btn text-center" id="Enviar">Enviar</button>
                  </div>
                </center>
              </div>
          </form>

        </div>
        <div class="col-sm-0 col-md-1"><h2></h2></div>
      </div>
    </div>


    <!-- Beneficios -->
    <div class="container" id="beneficios">
      <div class="row pdd">
        <div class="col-sm-10 col-md-6"><img src="front/images/beneficios.png" width="100%" alt="Beneficios"></div>
      </div>
            <br><br>
      <div class="row pdd2">
        <div class="col-sm-4 col-md-4 text-center text-center">
          <img src="front/images/icono-1.png" width="" class="imagen" alt="Acompañamiento Virtual">
          <p>Acompañamiento Virtual  <br> para el desarrollo académico.</p>

        </div>
        <div class="col-sm-4 col-md-4 text-center">
            <img src="front/images/icono-2.png" class="imagen" alt="Primera Infancia ">
          <p>Aula de Atención a la Primera <br>
          Infancia para hijos de estudiantes</p>
        </div>
        <div class="col-sm-4 col-md-4 text-center">
          <img src="front/images/icono-3.png" class="imagen" alt="Club, Biblioteca">
          <p>(Club, biblioteca, gimnasio, piscina, <br> auditorios, entre otros espacios)</p>
        </div>
      </div>
      <!-- ************************** -->
      <div class="row pdd2">
        <div class="col-sm-4 col-md-4 text-center text-center">
          <img src="front/images/icono-4.png" width="" class="imagen" alt="Semilleros">
          <p>
            Semilleros de investigación, <br>
            emprendimiento, actividades <br>
            culturales y deportivas gratuitas <br>
            para la comunidad educativa.

          </p>

        </div>
        <div class="col-sm-4 col-md-4 text-center">
            <img src="front/images/icono-5.png" class="imagen" alt="Convenios internacionales">
          <p>
            Convenios internacionales para <br>
            intercambios con prestigiosas <br>
            universidades en Brasil, Puerto Rico, <br>
            Estados Unidos, Francia entre otros.
          </p>
        </div>
        <div class="col-sm-4 col-md-4 text-center">
          <img src="front/images/icono-7.png" class="imagen" alt="Convenios para práctias">
          <p>
            Convenios para prácticas  <br>
            empresariales con importantes  <br>
            empresas de la ciudad y la región.
          </p>
        </div>
      </div>

      <!-- ************************** -->
      <div class="row pdd2">
        <div class="col-sm-4 col-md-4 text-center text-center">
          <img src="front/images/icono-6.png" width="" class="imagen" alt="Excelente Calidad">
          <p>
            Excelente calidad académica; <br>
            docentes con especialización,  <br>
            maestría y doctorado, amplia <br>
            experiencia docente.

          </p>

        </div>
        <div class="col-sm-8 col-md-8 text-center">
            <img src="front/images/icnop.png" class="flex" class="imagen" alt="Horario Flexible">
        </div>

      </div>

    </div>


    <!-- *************************** -->

    <section id="gkBottom5" class="container pdd white">
		<div class="box double gkmod-1"><div class="content gkPage">

    <div class="custom double">

    	<div class="gkCols" data-cols="6">
    <div>
    <h3 class="header">INSTITUCIONAL</h3>
    <ul>
    <li><a href="http://americana.edu.co/medellin/index.php?option=com_content&view=article&id=136&Itemid=1052">Campus</a></li>
    <li><a href="http://americana.edu.co/medellin/index.php?option=com_content&view=article&id=136&Itemid=1052">Historia</a></li>
    <li><a href="http://americana.edu.co/medellin/index.php?option=com_content&view=article&id=136&Itemid=1052">Misión - Visión</a></li>
    <li><a href="http://americana.edu.co/medellin/index.php?option=com_content&view=article&id=136&Itemid=1052">Principios y valores</a></li>
    <li><a href="http://americana.edu.co/medellin/index.php?option=com_content&view=article&id=136&Itemid=1052">Sistema de Gestión de la Calidad</a></li>
    <li><a href="http://americana.edu.co/medellin/index.php?option=com_content&view=article&id=136&Itemid=1052">Organigrama</a></li>
    <li><a href="http://americana.edu.co/medellin/index.php?option=com_content&view=article&id=136&Itemid=1052">Estatutos y Reglamentos</a></li>
    <li><a href="http://www.americana.edu.co/medellin/index.php?option=com_content&view=article&id=155">Directorio Institucional</a></li>
    <li><a href="http://americana.edu.co/medellin/index.php?option=com_content&view=article&id=136&Itemid=1052">Presentación Institucional</a></li>
    <li><a href="/medellin/index.php?option=com_content&amp;view=article&amp;id=142&amp;Itemid=1062">Protección de datos</a></li>
    </ul>
    </div>
    <div>
    <h3 class="header">ADMISIONES</h3>
    <ul>
    <li><a href="http://americana.edu.co/medellin/index.php?option=com_content&view=article&id=123&Itemid=1053">Matrícula</a></li>
    <li><a href="http://americana.edu.co/medellin/index.php?option=com_content&view=article&id=123&Itemid=1053">Calendario académico</a></li>
    <li><a href="http://americana.edu.co/medellin/index.php?option=com_content&view=article&id=123&Itemid=1053">Financiación</a></li>
    <li><a href="http://americana.edu.co/medellin/index.php?option=com_content&view=article&id=123&Itemid=1053">Grados</a></li>
    <li><a href="http://americana.edu.co/medellin/index.php?option=com_content&view=article&id=123&Itemid=1053">Convenios</a></li>
    </ul>
    </div>
    <div>
    <h3 class="header">EXTENSIÓN Y<br /> PROYECCIÓN SOCIAL</h3>
    <ul>
    <li><a href="http://www.americana.edu.co/medellin/index.php?option=com_content&view=article&id=131&Itemid=1054">Centro de Innovación y Emprendimiento</a></li>
    <li><a href="http://www.americana.edu.co/medellin/index.php?option=com_content&view=article&id=131&Itemid=1054">Centro de Idiomas</a></li>
    <li><a href="http://www.americana.edu.co/medellin/index.php?option=com_content&view=article&id=131&Itemid=1054">Prácticas</a></li>
    <li><a href="http://www.americana.edu.co/medellin/index.php?option=com_content&view=article&id=131&Itemid=1054">Educación Continua</a></li>
    <li><a href="http://www.americana.edu.co/medellin/index.php?option=com_content&view=article&id=131&Itemid=1054">Consultorio Jurídico</a></li>
    <li><a href="http://www.americana.edu.co/medellin/index.php?option=com_content&view=article&id=131&Itemid=1054">Consultorio Empresarial</a></li>
    <li><a href="http://www.americana.edu.co/medellin/index.php?option=com_content&view=article&id=131&Itemid=1054">Centro de Conciliación</a></li>
    </ul>
    </div>
    <div>
    <h3 class="header">BIENESTAR UNIVERSITARIO</h3>
    <ul>
    <li><a href="/medellin/index.php?option=com_content&amp;view=article&amp;id=125&amp;Itemid=1025">Noticias y eventos</a></li>
    <li><a href="/medellin/index.php?option=com_content&amp;view=article&amp;id=125&amp;Itemid=1025">Recreación y deporte</a></li>
    <li><a href="/medellin/index.php?option=com_content&amp;view=article&amp;id=125&gt;Arte%20y%20cultura&lt;/a&gt;&lt;/li&gt;%20%20&lt;li&gt;&lt;a%20href=&amp;Itemid=1025"/medellin/index.php?option=com_content&amp;view=article&amp;id=125&amp;Itemid=1025">Salud</a></li>
    <li><a href="/medellin/index.php?option=com_content&amp;view=article&amp;id=125&amp;Itemid=1025">Desarrollo Humano y Social</a></li>
    <li><a href="/medellin/index.php?option=com_content&amp;view=article&amp;id=125&amp;Itemid=1025">Programa de Apoyo Laboral - PAL</a></li>
    <li><a href="/medellin/index.php?option=com_content&amp;view=article&amp;id=125&amp;Itemid=1025">Aula Atención a la Primera Infancia</a></li>
    <li><a href="/medellin/index.php?option=com_content&amp;view=article&amp;id=125&amp;Itemid=1025">Becas</a></li>
    <li><a href="/medellin/index.php?option=com_content&amp;view=article&amp;id=125&amp;Itemid=1025">Programa Pare</a></li>
    </ul>
    </div>
    <div>
    <h3 class="header">INTERNACIONALIZACIÓN</h3>
    <ul>
    <li><a href="/medellin/index.php?option=com_content&amp;view=article&amp;id=128&amp;Itemid=1045">Noticias y eventos</a></li>
    <li><a href="/medellin/index.php?option=com_content&amp;view=article&amp;id=128&amp;Itemid=1045">Convocatorias intercambios</a></li>
    <li><a href="/medellin/index.php?option=com_content&amp;view=article&amp;id=128&amp;Itemid=1045">Convenios internacionales</a></li>
    <li><a href="/medellin/index.php?option=com_content&amp;view=article&amp;id=128&amp;Itemid=1045">Testimonios estudiantes</a></li>
    <li><a href="/medellin/index.php?option=com_content&amp;view=article&amp;id=128&amp;Itemid=1045">Estudia idiomas en el exterior</a></li>
    </ul>
    </div>
    <div>
    <h3 class="header">INVESTIGACIÓN</h3>
    <ul>
    <li><a href="/medellin/index.php?option=com_content&amp;view=article&amp;id=129&amp;Itemid=1046">Noticias y convocatorias</a></li>
    <li><a href="/medellin/index.php?option=com_content&amp;view=article&amp;id=129&amp;Itemid=1046">Semilleros</a></li>
    <li><a href="/medellin/index.php?option=com_content&amp;view=article&amp;id=129&amp;Itemid=1046">Centro de Investigación</a></li>
    <li><a href="/medellin/index.php?option=com_content&amp;view=article&amp;id=129&amp;Itemid=1046">Grupos</a></li>
    <li><a href="/medellin/index.php?option=com_content&amp;view=article&amp;id=129&amp;Itemid=1046">Publicaciones</a></li>
    </ul>
    </div>
    </div>
    </div>
    </div></div>
    </section>


    <div class="container white pdd">
    	<hr>
    </div>

	<div class="container text-center white">
		<img src="front/images/logos pie de pagina web.png" title="Aliados y certificados Uamericana" alt="Aliados y Certificados" class="logos_pie">
	</div>

	<div class="container text-center white">
	<p>
		<strong>Corporación Universitaria Americana</strong>
	</p>
	<p>Sede Medellín:Cra. 42 No. 52 - 06 (Av. La Playa) | Teléfono: (+57 4) 444 5004</p>
	<p>Institución de Educación Superior sujeta a inspección y vigilancia por parte del Ministerio de Educación Nacional.</p>

	<p>Americana 2015 ® Todos los derechos reservados</p>
	</div>

	    <!-- Scripts -->
    <script type="text/javascript" src="front/js/jquery.min.js"></script>
    <script type="text/javascript" src="front/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="front/js/jquery.validate.min.js"></script>
    <!-- <script type="text/javascript" src="js/validacion.js"></script> -->
    <script type="text/javascript" src="front/js/alertify.min.js"></script>
    <script type="text/javascript" src="front/js/valid.js"></script>
    <script type="text/javascript" src="front/js/funciones.js"></script>

    <script type="text/javascript" src="front/js/sweetalert.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){

        $('#eliminar').click(function(){
          swal({
            title: "Eliminar Registro",
            text: "Esta seguro de eliminar el registro",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: 'btn-danger',
            cancelButtonText: 'Cancelar',
            confirmButtonText: 'Eliminar',
            closeOnConfirm: false,
            //closeOnCancel: false
          },
          function(){
            swal("Eliminado!", "Su registro ha sido eliminado!", "success");
          });

        });

        $('#registro').click(function(){
          swal({
            title: "Quieres registrarte en nuestro voletin?",
            text: "Resiviras noticias acerca de nuestra marca y promociones de nuestros productos!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-success",
            cancelButtonClass: "btn-danger",
            confirmButtonText: "Suscribirme",
            cancelButtonText: "Cancelar",
            closeOnConfirm : false,
            closeOnCancel: false
          },
          function(isConfirm) {
            if (isConfirm) {
              swal({title: "Deleted!",
                    text: "Your imaginary file has been deleted.",
                    type: "success"
              },
              function(isConfirm){
                 window.location.href = "//stackoverflow.com";
              }
              );

            } else {
              swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
          });

        });
      });

    $(function(){
      $('#txtTel').validCampoFranz('0123456789');
    });
    </script>
</body>
</html>