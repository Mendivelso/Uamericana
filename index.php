<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alma</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/alertify.core.css">
    <link rel="stylesheet" type="text/css" href="css/alertify.default.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/sweetalert.css">
    <link rel="shortcut icon" href="img/favicon.ico"/>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="60">

    <header class="container">
      <div class="row pdd">
        <div class="col-md-8"><img src="images/logo.png" class="logo"></div>
        <div class="col-md-4">
          <ul class="redes">
            <li><a href="" target="black" title="Facebook"><img src="images/facebook.png"></a></li>
            <li><a href="" target="black" title="Twitter"><img src="images/instagram.png"></a></li>
            <li><a href="" target="black" title="Youtube"><img src="images/buscar.png"></a></li>
          </ul>
        </div>
      </div>
    </header>



    <div class="container" id="main">
      <div class="row">
        <div class="col-md-3"><h2></h2></div>
        <div class="col-md-4"><img src="images/texto.png" width="100%"></div>
        <div class="col-md-4">

             <form class="form"  id="form_uan">
              <input type="hidden" name="accion" value="ins">
              <p class="text-center">INSCRIPCIONES <br> ABIERTAS 2019 - I <br> PREGRADOS / POSTGRADOS </p>
              <center><img src="images/puntos-03.png" width="90%" class="text-center"></center>
              <div class="form-group col-xs-offset-1 col-xs-10">
                <input type="text" name="txtName" id="txtName" class="form-control input" placeholder="Nombre" required >
              </div>
              <div class="form-group col-xs-offset-1 col-xs-10">
                <input type="text" name="txtCed" id="txtCed" class="form-control input" placeholder="Cédula" required maxlength="10">
              </div>

              <div class="form-group col-xs-offset-1 col-xs-10">
                <input type="text" name="txtCelular" id="txtCelular" class="form-control input" placeholder="Celular" required maxlength="15">
              </div>
               <div class="form-group col-xs-offset-1 col-xs-10">
                <input type="email" name="txtEmail" id="txtEmail" class="form-control input" placeholder="Correo Electrónico" required>
              </div>
              <label class="col-xs-offset-1 col-xs-10">Programa de interés</label>
             <div class="form-group col-xs-offset-1 col-xs-10">
                <select class="form-control input" name="programa" id="carrera" required="">
                    <option value="Pregrados">Pregrados</option>
                    <option value="Posgrados">Posgrados</option>
                </select>
                  <select class="form-control input select" name="carrera" id="pregrados" style="margin-top: 3px;">
                    <option value="">Seleccione...</option>
                      <option> Administración de Empresas</option>
                      <option> Arquitectura</option>
                      <option> Artes Plásticas y Visuales</option>
                      <option> Bioquímica</option>
                      <option> Comercio Internacional</option>
                      <option> Contaduría Pública</option>
                      <option> Derecho</option>
                      <option> Diseño Industrial</option>
                      <option> Diseño Gráfico</option>
                      <option> Economía</option>
                      <option> Enfermería</option>
                      <option> Hotelería y Turismo</option>
                      <option> Hotelería y Turismo Ecológico</option>
                      <option> Ingeniería Ambiental</option>
                      <option> Ingeniería Biomédica</option>
                      <option> Ingeniería Civil</option>
                      <option> Ingeniería de Sistemas y Computación</option>
                      <option> Ingeniería Electrónica</option>
                      <option> Ingeniería en Control y Automatización Industrial</option>
                      <option> Ingeniería Industrial</option>
                      <option> Ingeniería Mecánica</option>
                      <option> Ingeniería Mecatrónica</option>
                      <option> Licenciatura en Artes Escénicas</option>
                      <option> Licenciatura en Ciencias Sociales</option>
                      <option> Licenciatura en Español e Inglés</option>
                      <option> Licenciatura en Matemáticas</option>
                      <option> Medicina</option>
                      <option> Medicina Veterinaria</option>
                      <option> Música</option>
                      <option> Odontología</option>
                      <option> Optometría</option>
                      <option> Psicología</option>
                      <!-- <option> Técnica Profesional en Realización de Vestuario para Artes Escénicas</option> -->
                      <option> Tecnología en Mecánica Automotriz</option>
                      <!-- <option> Tecnología en Planeación de Vestuario para Artes Escénicas</option> -->
                      <!-- <option> Terapias Psicosociales</option> -->
                      <option> Administración de Empresas (Virtual)</option>
                      <option> Psicología (A Distancia)</option>
                      <!-- <option> Tecnología en Coordinación Logística de Eventos Culturales y Artísticos  (A Distancia)</option> -->
                      <option> Tecnología en Gestión de Operaciones Industriales (A Distancia)</option>
                      <option> Tecnología en Mantenimiento Electromecánico Industrial (A Distancia)</option>
                </select>

                 <select class="form-control input select" name="carrera" id="posgrados" style="margin-top: 3px;">
                      <option value="">Seleccione...</option>
                      <option>Especialización en Seguridad y Salud en el Trabajo</option>
                      <option> Especialización en Actuaria</option>
                      <option> Especialización en Auditoría y Control Fiscal</option>
                      <option> Especialización en Derecho</option>
                      <option> Especialización en Derecho Administrativo y Procedimiento Administrativo</option>
                      <option> Especialización en Derecho Penal y Procedimientos Penales</option>
                      <option> Especialización en Ingeniería de Software</option>
                      <option> Especialización en Instrumentación Electrónica y Biomédica</option>
                      <option> Especialización en Ortodoncia</option>
                      <option> Especialización en Periodoncia</option>
                      <option> Especialización en Sistemas de Información Geográfica</option>
                      <option>Especialización en Administración Pública (Virtual)</option>
                      <option>Especialización en Auditoria de Sistemas (Virtual)</option>
                      <option>Especialización en Desarrollo del Potencial Humano en la Organización (Virtual)</option>
                      <option>Especialización en Gestión Financiera (Virtual)</option>
                      <option>Especialización en Auditoría y Control Fiscal (A Distancia)</option>
                      <option> Maestría en Arte Sonoro</option>
                      <option> Maestría en Bienestar Animal</option>
                      <option> Maestría en Bioingeniería</option>
                      <option> Maestría en Bioquímica</option>
                      <option> Maestría en Ciencia e Ingeniería Computacional</option>
                      <option> Maestría en Derecho de Familia</option>
                      <option> Maestría en Educación</option>
                      <option> Maestría en Educación Matemática</option>
                      <option> Maestría en Geomática Ambiental</option>
                      <option> Maestría en Gestión y Desarrollo Inmobiliario</option>
                      <option> Maestría en Hidrogeología Ambiental</option>
                      <option> Maestría en Ingeniería Física</option>
                      <option> Maestría en Innovación</option>
                      <option> Maestría en Economía de la Salud</option>
                      <option> Maestría en Instrumentación y Automatización</option>
                      <option>Maestría en Economía de la Salud (Virtual)</option>
                      <option>Maestría en Economía Internacional  (Virtual)</option>
                      <option>Maestría en Gerencia Financiera y  Tributaria (Virtual)</option>
                      <option>Maestría en Mediación Familiar  (Virtual)</option>
                      <option>Maestría en Ingeniería de Bioprocesos</option>
                      <option>Maestría en Gestión de la Infraestructura</option>
                      <option> Doctorado en Ciencia Aplicada</option>
                      <option> Doctorado en Ciencias de la Salud</option>
                      <option> Doctorado en Educación Matemática</option>
                </select>

              </div>
               <div class="form-group col-xs-offset-1 col-xs-10">
                <textarea class="form-control input" placeholder="Mensaje" name="txtMsj" id="txtMsj" rows="4" required="" maxlength="200"></textarea>
              </div>
              <center><img src="images/puntos-03.png" width="90%" class="text-center"></center>
              <center><input type="checkbox" id="terminos" name="terminos" checked="" required="">
              <label  for="terminos" class="ter"><a href="http://www.uan.edu.co/politica-de-proteccion-de-datos" target="_black"  title="Ver documento" class="termi">Acepto términos y condiciones</a></label></center>
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
        <div class="col-md-1"><h2></h2></div>
      </div>
    </div>


    <!-- Beneficios -->
    <div class="container" id="beneficios">
      <div class="row pdd">
        <div class="col-md-6"><img src="images/beneficios.png" width="100%"></div>
      </div>
            <br><br>
      <div class="row pdd2">
        <div class="col-md-4 text-center text-center">
          <img src="images/icono-1.png" width="">
          <p>Acompañamiento Virtual  <br> para el desarrollo académico.</p>

        </div>
        <div class="col-md-4 text-center">
            <img src="images/icono-2.png">
          <p>Aula de Atención a la Primera <br>
          Infancia para hijos de estudiantes</p>
        </div>
        <div class="col-md-4 text-center">
          <img src="images/icono-3.png">
          <p>(Club, biblioteca, gimnasio, piscina, <br> auditorios, entre otros espacios)</p>
        </div>
      </div>
      <!-- ************************** -->
      <div class="row pdd2">
        <div class="col-md-4 text-center text-center">
          <img src="images/icono-4.png" width="">
          <p>
            Semilleros de investigación, <br>
            emprendimiento, actividades <br>
            culturales y deportivas gratuitas <br>
            para la comunidad educativa.

          </p>

        </div>
        <div class="col-md-4 text-center">
            <img src="images/icono-5.png">
          <p>
            Convenios internacionales para <br>
            intercambios con prestigiosas <br>
            universidades en Brasil, Puerto Rico, <br>
            Estados Unidos, Francia entre otros.
          </p>
        </div>
        <div class="col-md-4 text-center">
          <img src="images/icono-7.png">
          <p>
            Convenios para prácticas  <br>
            empresariales con importantes  <br>
            empresas de la ciudad y la región.
          </p>
        </div>
      </div>

      <!-- ************************** -->
      <div class="row pdd2">
        <div class="col-md-4 text-center text-center">
          <img src="images/icono-6.png" width="">
          <p>
            Excelente calidad académica; <br>
            docentes con especialización,  <br>
            maestría y doctorado, amplia <br>
            experiencia docente.

          </p>

        </div>
        <div class="col-md-8 text-center">
            <img src="images/icnop.png" class="flex">
        </div>

      </div>

    </div>

    <!-- Scripts -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/validacion.js"></script>
    <script type="text/javascript" src="js/alertify.min.js"></script>
    <script type="text/javascript" src="js/valid.js"></script>

    <script type="text/javascript" src="js/sweetalert.min.js"></script>
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